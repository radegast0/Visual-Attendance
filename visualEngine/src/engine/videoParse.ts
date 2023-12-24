import { Prisma, videos, videos_status } from "@prisma/client"
import fs from 'fs-extra';
import ffmpeg from 'fluent-ffmpeg';
import path from "path";
import db from "../db";

type videoWithUser = Prisma.videosGetPayload<{
    include: {
        users: true,
    }
}>;

const handlePathing = (v : videos) => {

    const vPath = path.join(path.dirname(v.path), "..", "images", v.id.toString());

    fs.ensureDirSync(vPath);

    return vPath;
}

const parserVideos : videoWithUser[] = []

const handleFrames = async (video : videoWithUser) => {

    const imgFolder = handlePathing(video);

    const frames = fs.readdirSync(imgFolder);

    await db.video_frames.deleteMany({
        where:{
            video_id: video.id
        }
    })

    frames.forEach(async (frame, index) => {
        await db.video_frames.create({
            data:{
                path: path.join(imgFolder, frame),
                video_id: video.id,
                time: index
            }
        })
    })

    return true;
}

export const handleVideo = (video : videoWithUser) => {
    const find = parserVideos.find(v =>v.id == video.id);

    if(find){
        return find;
    }
    const fontPath = path.join(__dirname, "..", "..","thin.ttf");

    parserVideos.push(video);

    const imgFolder = handlePathing(video);
    fs.emptyDirSync(imgFolder);

    const cmd = ffmpeg()
        .input(video.path)
        .videoFilter('select=not(mod(n\\,60)),format=gray')
        .inputOptions('-vsync vfr')
        .output(`${imgFolder}/%03d.png`)
        .outputOptions([
            '-vf',
            `drawtext=fontfile=${fontPath}:text='${video.users?.email ?? '-'}':fontcolor=red:fontsize=24:box=1:boxcolor=black@0.2:boxborderw=5:x=(w-text_w):y=(h-text_h),drawtext=fontfile=${fontPath}:text='%{pts\:hms}':fontcolor=red:fontsize=24:box=1:boxcolor=black@0.2:boxborderw=5:x=0:y=0`,
        ])

    cmd.on('progress',async (progress) => {
        await db.videos.update({
            where: {
                id: video.id
            },
            data:{
                status: videos_status.processing
            }
        });
    });

    cmd.on('end',async () => {
        await db.videos.update({
            where: {
                id: video.id
            },
            data:{
                status: videos_status.done
            }
        });

        handleFrames(video);
        //unset video from parserVideos
        const index = parserVideos.findIndex(v => v.id == video.id);
        if(index > -1){
            parserVideos.splice(index, 1);
        }
    })

    cmd.on('error', (err) => {
        console.log(err);
        const index = parserVideos.findIndex(v => v.id == video.id);
        if(index > -1){
            parserVideos.splice(index, 1);
        }
    });

    cmd.run();
    return video;
}

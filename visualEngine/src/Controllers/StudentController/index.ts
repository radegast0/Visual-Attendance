import { Request, Response } from "express";
import db from "../../db";
import { handleVideo } from "../../engine/videoParse";
// const ffmpeg = require("fluent-ffmpeg");

export const ParseVideo = async (req: Request, res: Response) => {
    // res.setHeader("Content-Type", "text/event-stream");
    // res.setHeader("Cache-Control", "no-cache");
    // res.setHeader("Connection", "keep-alive");
    // res.setHeader("Access-Control-Allow-Origin", "*");
    // res.flushHeaders();

	// let interval = setInterval(() => {
    //     res.write("data: " + JSON.stringify({ message: "Hello World" }) + "\n\n");
    //     console.log("sdasa");
    // }, 1000);

    // //on client disconnect
    // res.on("close", () => {
    //     console.log("client dropped me");
    //     clearInterval(interval);
    //     res.end();
    // });

    console.log("poggers");

    const video = await db.videos.findFirst({
        where: {
            users: {
                id: parseInt(req.params.id)
            }
        },
        include: {
            users: true
        }
    });

    //check if video

    if(!video){
        return res.status(404).json({message: "Video not found"});
    }

    let lVideo = await handleVideo(video);

    console.log(lVideo.id);


    return res.status(200).json({message: "Video found"});
};

export default {};

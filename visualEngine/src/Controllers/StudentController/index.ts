import { Request, Response } from "express";
// import db from "../../db";
// const ffmpeg = require("fluent-ffmpeg");

export const ParseVideo = async (req: Request, res: Response) => {
    res.setHeader("Content-Type", "text/event-stream");
    res.setHeader("Cache-Control", "no-cache");
    res.setHeader("Connection", "keep-alive");
    res.setHeader("Access-Control-Allow-Origin", "*");
    res.flushHeaders();

	let interval = setInterval(() => {
        res.write("data: " + JSON.stringify({ message: "Hello World" }) + "\n\n");
        console.log("sdasa");
    }, 1000);

    //on client disconnect
    res.on("close", () => {
        console.log("client dropped me");
        clearInterval(interval);
        res.end();
    });

};

export default {};

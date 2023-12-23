import { Request, Response } from "express";
// const ffmpeg = require("fluent-ffmpeg");

export const ParseVideo = async (req: Request, res: Response) => {
	const { studentId } = req.params;
	console.log(studentId);
	res.send("Hello World");
};

export default {};

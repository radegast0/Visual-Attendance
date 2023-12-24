import path from "path";
import dotenv from "dotenv";

dotenv.config({
	path: path.resolve(__dirname, "../../.env"),
});

export const config = {
	env: process.env.NODE_ENV || "dev",
	port: process.env.PORT || 5000,
	host: process.env.HOST || "http://127.0.0.1",
	video_folder: process.env.VIDEO_FOLDER || "videos",

	db: {
		host: process.env.DB_HOST || "localhost",
		port: process.env.DB_PORT || 5432,
		database: process.env.DB_NAME || "test",
		user: process.env.DB_USER || "postgres",
		password: process.env.DB_PASSWORD || "postgres",
	},
};

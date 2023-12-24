import { config } from "./Config";
import router from "./Routes";
import server from "./Server";
import db from "./db";

db.$connect().then(() => {
	console.log("Database connected");
});

server.use("/", router);

server.listen(config.port, () => {
	console.log(
		`Server is running ${config.env} on ${config.host}:${config.port}`,
	);
});

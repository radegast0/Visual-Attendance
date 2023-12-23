import router from "./Routes";
import server from "./Server";
import { config } from "./Config";

server.use("/", router);

server.listen(config.port, () => {
	console.log(`Server is running ${config.env} on ${config.host}:${config.port}`);
});

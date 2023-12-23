import { Router } from "express";
import { ParseVideo } from "../Controllers/StudentController";

const router = Router();

router.get("/student/:studentId/parse-video", ParseVideo);

export default router;

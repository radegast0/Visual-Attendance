import { Router } from "express";
import { ParseVideo } from "../Controllers/StudentController";

const router = Router();

router.get("/student/:id/parse-video", ParseVideo);

export default router;

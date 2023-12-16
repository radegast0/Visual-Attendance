<?php
namespace App\Http\Controllers\acp;

use App\Models\Lecture;
use App\Models\LecturePlan;
use App\Models\School;
use Illuminate\Http\Request;

class LectureController extends BaseController{
    use BasePattern;
    public function __construct()
    {
        $this->page = "lecture";
        $this->title = "Lectures";
        $this->model = new Lecture;
        $this->listQuery = $this->model->query()->with('school');

        return parent::__construct();
    }

    public function planIndex(Request $req, Lecture $lecture){
        return view('acp.lecture.plan', [
            'lecture' => $lecture
        ]);
    }

    public function planForm(Request $req, Lecture $lecture, LecturePlan $plan = null){
        return view('acp.lecture.plan-form', [
            'lecture' => $lecture,
            'plan' => ($plan ?? new LecturePlan)
        ]);
    }

    public function planSave(Request $req, Lecture $lecture, LecturePlan $plan = null){


        $req->validate([
            'week_day' => 'required|integer|min:0|max:6',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time'
        ]);

        $plan = $plan ?? new LecturePlan;
        $plan->fill($req->all());
        $plan->lecture_id = $lecture->id;
        $plan->save();

        return redirect()->route('lecture.plan.index', ['lecture' => $lecture->id])->with('success', 'Plan saved');
    }
}

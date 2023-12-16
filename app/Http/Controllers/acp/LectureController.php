<?php
namespace App\Http\Controllers\acp;

use App\Models\Lecture;
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
}

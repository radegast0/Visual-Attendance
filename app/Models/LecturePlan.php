<?php
namespace App\Models;

class LecturePlan extends BaseModel{
    public $table = "lecture_plans";
    public $fillable = [
        "lecture_id",
        "week_day",
        "start_time",
        "end_time"
    ];

    public $appends = [
        "week_name"
    ];


    public function getWeekNameAttribute(){
        $week = [
            "Sunday",
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday"
        ];

        return $week[$this->week_day];
    }
}

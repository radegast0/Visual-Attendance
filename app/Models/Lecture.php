<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends BaseModel
{
    use HasFactory;

    public $table = "lectures";

    public $fillable = [
        "title",
        "school_id"
    ];

    public function school(){
        return $this->belongsTo(School::class, "school_id", "id");
    }

    public function users(){
        return $this->belongsToMany(User::class, "lecture_user", "lecture_id", "user_id")->withPivot("role_id");
    }

    public function plans(){
        return $this->hasMany(LecturePlan::class, "lecture_id", "id");
    }
}

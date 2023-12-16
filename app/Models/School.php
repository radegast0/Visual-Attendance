<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends BaseModel
{
    use HasFactory;

    public $table = "schools";

    public $fillable = [
        "title"
    ];

    public function lectures(){
        return $this->hasMany(Lecture::class, "school_id", "id");
    }
}

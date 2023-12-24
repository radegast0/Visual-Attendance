<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoFrame extends Model
{
    use HasFactory;

    protected $table = "video_frames";
    protected $fillable = [
        'video_id',
        'time',
        'path',
    ];

    public function video(){
        return $this->belongsTo(Video::class);
    }
}

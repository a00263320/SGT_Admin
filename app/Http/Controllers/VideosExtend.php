<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideosExtend extends Controller
{
    public function videos_all()
    {
        $video = Video::all();
        return $video;
    }

    public function videos_c($request)
    {
        $video_c = Video::create($request);
        return $video_c;
    }

    public function videos_id($id)
    {
        $video_id = Video::find($id);
        return $video_id;
    }
}

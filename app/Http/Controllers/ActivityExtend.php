<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityExtend extends Controller
{
    //Activity all 繼承方法
    public function act_all()
    {
        $act = Activity::all();
        return $act;
    }

    //Activity create 繼承方法
    public function act_create($request)
    {
        $act_c = Activity::create($request);
        return $act_c;
    }

    //Activity id 繼承方法
    public function act_id($id)
    {
        $act_id = Activity::find($id);
        return $act_id;
    }
}

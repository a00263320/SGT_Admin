<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class NewsExtend extends Controller
{
    //News all繼承方法
    public function news_all()
    {
        $news = News::all();
        return $news;
    }

    //$request  為自訂一參數  可更改
    //News create繼承方法
    public function news_create($request)
    {
        $new_c = News::create($request);
        return $new_c;
    }

    //News id繼承方法
    public function news_id($id)
    {
        $new_id = News::find($id);
        return $new_id;
    }
}

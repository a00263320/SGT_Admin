<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsArticalController extends NewsExtend
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //News文章管理
        $news = $this->news_all();

        return view('Admin.Manage.News.Index', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Manage.News.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 新增文章API
        $this->news_create([
            'photo' => $request ['News_photo'],
            'title' => $request ['News_title'],
            'content' => $request ['News_content'],
            'date' => $request ['News_date'],
            'about' => $request ['News_about']
        ]);

        //繼承用法
        // $data = [
        //     'photo' => $request ['News_photo'],
        //     'title' => $request ['News_title'],
        //     'content' => $request ['News_content'],
        //     'date' => $request ['News_date'],
        //     'about' => $request ['News_about']
        // ];

        // $this->news_create($data);


        return view('Admin.Manage.News.CReturn');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //如果繼承有值的話，一定要給一個值
        $news = $this->news_id($id);

        return view('Admin.Manage.News.Show', ['news' => $news]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newsup = $this->news_id($id);
        return view('Admin.Manage.News.Edit', ['newsup' => $newsup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reup = $this->news_id($id)->update([
            'photo' => $request ['up_photo'],
            'title' => $request ['up_title'],
            'content' => $request ['up_content'],
            'date' => $request ['up_date'],
            'about' => $request ['up_about']
        ]);

        return view('Admin.Manage.News.UpReturn') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = $this->news_id($id)->delete();
        return view('Admin.Manage.News.DelReturn');
    }
}

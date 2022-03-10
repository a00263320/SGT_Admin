<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideosArticalController extends VideosExtend
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = $this->videos_all();
        return view('Admin.Manage.Videos.Index', ['videos' => $videos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Manage.Videos.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->videos_c([
            'title' => $request ['videos_title'],
            'source' => $request ['videos_source'],
            'URL' => $request ['videos_URL'],
            'youtube1' => $request ['videos_youtube1'],
            'youtube2' => $request ['videos_youtube2']
        ]);

        return view('Admin.Manage.Videos.CReturn');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $videos = $this->videos_id($id);
        return view('Admin.Manage.Videos.Show', ['videos' => $videos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $videosup = $this->videos_id($id);
        return view('Admin.Manage.Videos.Edit', ['videosup' => $videosup]);
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
        $reup = $this->videos_id($id)->update([
            'title' => $request ['up_title'],
            'source' => $request ['up_source'],
            'URL' =>$request ['up_URL'],
            'youtube1' => $request ['up_youtube1'],
            'youtube2' => $request ['up_youtube2']
        ]);
        return view('Admin.Manage.Videos.UpReturn');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = $this->videos_id($id)->delete();
        return view('Admin.Manage.Videos.DelReturn');
    }
}

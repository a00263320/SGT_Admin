<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;

class ActivityArticalController extends ActivityExtend
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //周邊文章管理
        $activity = $this->act_all();

        return view('Admin.Manage.Activity.Index', ['activity' => $activity]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Manage.Activity.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->act_create([
            'photo' => $request ['activity_photo'],
            'title' => $request ['activity_title'],
            'content' => $request ['activity_content'],
            'date' => $request ['activity_date'],
            'about' => $request ['activity_about']
        ]);      
        return view('Admin.Manage.Activity.CReturn');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $activity = $this->act_id($id);
        
        return view('Admin.Manage.Activity.Show', ['activity' => $activity]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activityup = $this->act_id($id);
        
        return view('Admin.Manage.Activity.Edit', ['activityup' => $activityup]);
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
        $reup = $this->act_id($id)->update([
            'photo' => $request ['up_photo'],
            'title' => $request ['up_title'],
            'content' => $request ['up_content'],
            'date' => $request ['up_date'],
            'about' => $request ['up_about']
        ]);
        return view('Admin.Manage.Activity.UpReturn');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = $this->act_id($id)->delete();

        return view('Admin.Manage.Activity.DelReturn');
    }
}

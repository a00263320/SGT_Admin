<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductArticalController extends ProductExtend
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = $this->pro_all();

        return view('Admin.Manage.Product.Index', ['product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Manage.Product.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->pro_create([
            'photo' => $request ['product_photo'],
            'title' => $request ['product_title'],
            'content' => $request ['product_content'],
            'date' => $request ['product_date'],
            'about' => $request ['product_about']
        ]);
        return view('Admin.Manage.Product.CReturn');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->pro_id($id);

        return view('Admin.Manage.Product.Show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productup = $this->pro_id($id);
        return view('Admin.Manage.Product.Edit', ['productup' => $productup]);
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
        $reup = $this->pro_id($id)->update([
            'photo' => $request ['up_photo'],
            'title' => $request ['up_title'],
            'content' => $request ['up_content'],
            'date' => $request ['up_date'],
            'about' => $request ['up_about']
        ]);
        return view('Admin.Manage.Product.UpReturn');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = $this->pro_id($id)->delete();

        return view('Admin.Manage.Product.DelReturn');
    }
}

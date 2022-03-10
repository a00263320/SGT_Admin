@extends('Extend.Item') {{-- 繼承Extend.Admin頁面 --}}

@section('title', 'News新增') {{-- 網頁標題 --}}

@section('content') {{-- 網頁文章區塊 --}}

    {{-- 中置標題 --}}
    <div class="container text-center" style="color: black">
        <div class="row">
            <div class="col-6 mx-auto">
                <h1>News 新增文章</h1>
            </div>
        </div>
    </div>

    {{-- 新增文章列表 --}}
    <div class="container text-center" style="color: black">
        <form name="input" action="/news" method="post">
            @csrf
            輸入圖片網址&emsp;
            <input type="text" name="News_photo">
            <br>
            <br>
            輸入文章標題&emsp;
            <input type="text" name="News_title">
            <br>
            <br>
            輸入文章內容
            <br>
            <br>
            <textarea name="News_content" cols="30" rows="10"></textarea>
            <br>
            <br>
            輸入文章上傳日期&emsp;
            <input type="text" name="News_date">
            <br>
            <br>
            輸入文章有關資訊&emsp;
            <input type="text" name="News_about">
            <br>
            <br>
            <button type="submit" class="btn btn-primary" style="width:122px">
                確定新增文章
            </button>
        </form>
    </div>

@endsection

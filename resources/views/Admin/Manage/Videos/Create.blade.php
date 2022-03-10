@extends('Extend.Admin') {{-- 繼承Extend.Admin頁面 --}}

@section('title', '新增影片') {{-- 網頁標題 --}}

@section('content') {{-- 網頁文章區塊 --}}

    {{-- 中置標題 --}}
    <div class="container text-center" style="color: black">
        <div class="row">
            <div class="col-6 mx-auto">
                <h1>新增影片網址</h1>
            </div>
        </div>
    </div>

    {{-- 新增文章列表 --}}
    <div class="container text-center" style="color: black">
        <form name="input" action="/videos" method="post">
            @csrf
            輸入影片標題&emsp;&emsp;&emsp;&emsp;
            <input type="text" name="videos_title">
            <br>
            <br>
            輸入影片創作者&emsp;&emsp;&emsp;
            <input type="text" name="videos_source">
            <br>
            <br>
            輸入影片嵌入網址&emsp;&emsp;
            <input type="text" name="videos_URL">
            <br>
            <br>
            輸入影片YT網址&emsp;&emsp;&emsp;
            <input type="text" name="videos_youtube1">
            <br>
            <br>
            輸入影片創作者YT網址
            <input type="text" name="videos_youtube2">
            <br>
            <br>
            <button type="submit" class="btn btn-primary" style="width:122px">
                確定新增文章
            </button>
        </form>
    </div>

@endsection

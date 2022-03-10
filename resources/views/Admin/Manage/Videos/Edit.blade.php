@extends('Extend.Admin') {{-- 繼承Extend.Admin頁面 --}}

@section('title', '影片編輯') {{-- 網頁標題 --}}

@section('content') {{-- 網頁文章區塊 --}}

    {{-- 中置標題 --}}
    <div class="container text-center">
        <div class="row">
            <div class="col-6 mx-auto" style="color: black">
                <h1>影片編輯</h1>
            </div>
        </div>
    </div>

    {{-- 編輯文章內容 --}}
    <div class="container text-center" style="color: black">
        <form name="input" action="/videos/{{ $videosup['id'] }}" method="post">
            @csrf
            @method('put')
            輸入影片標題&emsp;&emsp;&emsp;&emsp;
            <input type="text" name="up_title" value="{{ $videosup->title}}">
            <br>
            <br>
            輸入影片創作者&emsp;&emsp;&emsp;
            <input type="text" name="up_source" value="{{ $videosup->source}}">
            <br>
            <br>
            輸入影片嵌入網址&emsp;&emsp;
            <input type="text" name="up_URL" value="{{ $videosup->URL}}">
            <br>
            <br>
            輸入影片YT網址&emsp;&emsp;&emsp;
            <input type="text" name="up_youtube1" value="{{ $videosup->youtube1}}">
            <br>
            <br>
            輸入影片創作者YT網址
            <input type="text" name="up_youtube2" value="{{ $videosup->youtube2}}">
            <br>
            <br>
            <button type="submit" class="btn btn-primary" style="width:auto">
            確定更新影片資訊
            </button>
        </form>
    </div>

@endsection

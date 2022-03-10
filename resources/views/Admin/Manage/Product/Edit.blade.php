@extends('Extend.Admin') {{-- 繼承Extend.Admin頁面 --}}

@section('title', '編輯News文章') {{-- 網頁標題 --}}

@section('content') {{-- 網頁文章區塊 --}}

    {{-- 中置標題 --}}
    <div class="container text-center">
        <div class="row">
            <div class="col-6 mx-auto" style="color: black">
                <h1>SGT周邊 文章編輯</h1>
            </div>
        </div>
    </div>

    {{-- 編輯文章內容 --}}
    <div class="container text-center" style="color: black">
        <form name="input" action="/product/{{ $productup['id'] }}" method="post">
            @csrf
            @method('put')
            更改文章圖片&emsp;
            <input type="text" name="up_photo" value="{{ $productup->photo }}">
            <br>
            <br>
            更改文章標題&emsp;
            <input type="text" name="up_title" value="{{ $productup->title }}">
            <br>
            <br>
            更改文章內容
            <br>
            <br>
            <textarea name="up_content" cols="30" rows="10">{{ $productup->content }}</textarea>
            <br>
            <br>
            更改文章上傳日期&emsp;
            <input type="text" name="up_date" value="{{ $productup->date }}">
            <br>
            <br>
            更改文章有關資訊&emsp;
            <input type="text" name="up_about" value="{{ $productup->about }}">
            <br>
            <br>
            <button type="submit" class="btn btn-primary" style="width:auto">
                確定更新文章資訊
            </button>
        </form>
    </div>

@endsection

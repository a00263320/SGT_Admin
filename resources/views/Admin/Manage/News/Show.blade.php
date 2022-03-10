@extends('Extend.Admin') {{-- 繼承Extend.Admin頁面 --}}

@section('title', 'News單筆資訊') {{-- 網頁標題 --}}

@section('content') {{-- 網頁文章區塊 --}}

    {{-- 單筆文章全覽 --}}
    {{-- 文章列表 --}}
    <div class="container">
        <div class="row py-5">
            <div class="col-5">
                <div>
                    <img src="{{ $news['photo'] }}" style="height: 540px" alt="...">
                </div>
            </div>

            <div class="col-6" style="color: black">
                {{-- 標題 --}}
                <div>
                    <h2>
                        {{ $news['title'] }}
                    </h2>
                </div>
                {{-- 用row把全部框起來區隔一ㄍ區塊 --}}
                <div class="row">
                    {{-- 描述 --}}
                    <div class="col">
                        <span style="font-size: 115%">內&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;容:</span>
                    </div>
                    <div class="col">
                        <span style="font-size: 115%">{{ $news['content'] }}</span>
                    </div>
                    <hr>
                    {{-- 日期 --}}
                    <div class="col">
                        <span style="font-size: 115%">日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;期:</span>
                    </div>
                    <div class="col">
                        <span style="font-size: 115%">{{ $news['date'] }}</span>
                    </div>
                    <hr>
                    {{-- 相關資訊 --}}
                    <div class="col">
                        <span style="font-size: 115%">相&nbsp;關&nbsp;資&nbsp;訊:</span>
                    </div>
                    <div class="col">
                        <span style="font-size: 115%">{{ $news['about'] }}</span>
                    </div>
                    <hr>
                    {{-- 操作 --}}
                    <div class="col">
                        <span style="font-size: 115%">操&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;作:</span>
                    </div>
                    <div class="col">
                        <a href="/news/{{ $news['id'] }}/edit" class="btn btn-info">編輯產品所有資訊</a>

                        <form action="/news/{{ $news['id'] }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit" style="width:156px">刪除</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

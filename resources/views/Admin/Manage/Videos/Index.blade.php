@extends('Extend.Admin') {{-- 繼承Extend.Admin頁面 --}}

@section('title', '影片管理') {{-- 網頁標題 --}}

@section('content') {{-- 網頁文章區塊 --}}

    {{-- 管理文章按鈕 --}}
    <div class="container text-center">
        <div class="row">
            <div class="col-6 mx-auto py-3">
                <a href="/videos/create" class="btn btn-primary">新增影片</a>
                <a href="/manager" class="btn btn-secondary" onclick="Return()">返回文章總管理</a>
            </div>
        </div>
    </div>

    {{-- 快訊文章排版  迴圈 --}}
    <div class="container">
        <div class="row">
            @foreach ($videos as $videos)
                <div class="col-sm-4 py-3">
                    {{-- youtube影片嵌入 --}}
                    <div>
                        <iframe width="380" height="213" src="{{ $videos['URL'] }}" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                    {{-- 影片標題 --}}
                    <a href="{{ $videos['youtube1'] }}" style="text-decoration:none;">
                        <div class="data" style="color: black">{{ $videos['title'] }}</div>
                    </a>
                    <br>
                    <a href="{{ $videos['youtube2'] }}" style="text-decoration:none;">
                        <div class="data" style="color: black">
                            影片來源:&nbsp;&nbsp;&nbsp;&nbsp;{{ $videos['source'] }}
                        </div>
                    </a>
                    <a href="/videos/{{ $videos['id'] }}" class="btn btn-primary" style="width:240px">編輯</a>

                    <form action="/videos/{{ $videos['id'] }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" style="width:240px" onclick="del()">
                            刪除
                        </button>
                        {{-- style->改變外觀 --}}
                    </form>
                </div>
            @endforeach
        </div>
    </div>

    {{-- 中置按鈕 --}}
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-4 mx-auto">
                <a class="btn btn-secondary" style="width: 180px; height: 50px" href="#" role="button">
                    <h2>MORE</h2>
                </a>
            </div>
        </div>
    </div>
@endsection

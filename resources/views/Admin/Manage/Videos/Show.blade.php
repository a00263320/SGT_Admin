@extends('Extend.Admin') {{-- 繼承Extend.Admin頁面 --}}

@section('title', '影片單筆資料') {{-- 網頁標題 --}}

@section('content') {{-- 網頁文章區塊 --}}

    {{-- 單筆文章全覽 --}}
    {{-- 文章列表 --}}
    <div class="container">
        <div class="row py-5">
            <div class="col-5">
                <div>
                    <iframe width="420" height="236.25" src="{{ $videos['URL'] }}" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            {{-- 用row把全部框起來區隔一ㄍ區塊 --}}
            {{-- 標題 --}}
            <div class="col-6" style="color: black">
                <div class="row">
                    <div class="col-3">
                        <span style="font-size: 115%">影片標題:</span>
                    </div>
                    <div class="col">
                        <span style="font-size: 115%">{{ $videos['title'] }}</span>
                    </div>
                </div>
                <hr>

                {{-- 創作者 --}}
                <div class="row">
                    <div class="col-3">
                        <span style="font-size: 115%">YT創作者名稱:</span>
                    </div>
                    <div class="col">
                        <span style="font-size: 115%">{{ $videos['source'] }}</span>
                    </div>
                </div>
                <hr>

                {{-- 影片網址 --}}
                <div class="row">
                    <div class="col-3">
                        <span style="font-size: 115%">youtube嵌入網址:</span>
                    </div>
                    <div class="col">
                        <span style="font-size: 115%">{{ $videos['URL'] }}</span>
                    </div>
                </div>
                <hr>

                {{-- YT影片網址 --}}
                <div class="row">
                    <div class="col-3">
                        <span style="font-size: 115%">youtube網址:</span>
                    </div>
                    <div class="col">
                        <span style="font-size: 115%">{{ $videos['youtube1'] }}</span>
                    </div>
                </div>
                <hr>

                {{-- 創作者YT往只 --}}
                <div class="row">
                    <div class="col-3">
                        <span style="font-size: 115%">YT創作者網址:</span>
                    </div>
                    <div class="col">
                        <span style="font-size: 115%">{{ $videos['youtube2'] }}</span>
                    </div>
                </div>
                <hr>

                {{-- 操作 --}}
                <div class="row">
                    <div class="col-3">
                        <span style="font-size: 115%">操作:</span>
                    </div>
                    <div class="col">
                        <a href="/videos/{{ $videos['id'] }}/edit" class="btn btn-info">編輯產品所有資訊</a>

                        <form action="/videos/{{ $videos['id'] }}" method="post">
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

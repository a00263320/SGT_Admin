@extends('Extend.Admin') {{-- 繼承Extend.Admin頁面 --}}

@section('title', '周邊管理') {{-- 網頁標題 --}}

@section('content') {{-- 網頁文章區塊 --}}

    {{-- 管理文章按鈕 --}}
    <div class="container text-center">
        <div class="row">
            <div class="col-6 mx-auto py-3">
                <a href="/product/create" class="btn btn-primary">新增文章</a>
                <a href="/manager" class="btn btn-secondary" onclick="Return()">返回文章總管理</a>
            </div>
        </div>
    </div>

    {{-- 快訊文章排版  迴圈 --}}
    <div class="container">
        <div class="row">
            @foreach ($product as $product)
                <div class="col-sm-3 py-3">
                    {{-- 照片超連結 --}}
                    <a href="#">
                        <img src="{{ $product['photo'] }}" style="height: 350px; wdith: 350px" alt="">
                    </a>
                    {{-- 日期 --}}
                    <div class="data" style="color: gray">{{ $product['date'] }}</div>
                    {{-- 文字敘述連結 --}}
                    <div class="myclass">
                        <a href="" class="title"
                            style="text-decoration: none; color:black">{{ $product['title'] }}</a>
                    </div>
                    {{-- 文章置底的# --}}
                    <div class="detial">
                        <div class="tag">
                            <a href="cate.php?t1=2"
                                style="text-decoration: none; color:gray">{{ $product['about'] }}</a>&nbsp;
                        </div>
                    </div>
                    <div class="footer">
                        <div class="col">
                            <a href="/product/{{ $product['id'] }}" class="btn btn-primary" style="width:260px">編輯</a>

                            <form action="/product/{{ $product['id'] }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger" style="width:260px" onclick="del()">
                                    刪除
                                </button>
                                {{-- style->改變外觀 --}}
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- 中置按鈕 --}}
    <div class="container text-center">
        <div class="row">
            <div class="col-6 mx-auto">
                <a class="btn btn-secondary" style="width: 180px; height: 50px" href="/news" role="button">
                    <h2>MORE</h2>
                </a>
            </div>
        </div>
    </div>

@endsection

@extends('Extend.Admin') {{-- 繼承Extend.Admin頁面 --}}

@section('title', '刪除文章成功') {{-- 網頁標題 --}}

@section('content') {{-- 網頁文章區塊 --}}

    {{-- 成功的視窗 --}}
    <div class="container-fluid my-4">
        <div class="row py-5 ">
            <div class="col">
                <div class="card mx-auto bg-dark" style="width: 750px">
                    <h3>
                        <div class="card-header" style="color: black">
                            SGT周邊 文章刪除成功!
                        </div>
                    </h3>
                    <div class="card-body" style="color: black">
                        <p class="card-text">文章刪除成功! 請返回"SGT周邊"文章列表繼續操作。</p>
                        <form>
                            <a href="/product" class="btn btn-primary">返回"SGT周邊"文章列表</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

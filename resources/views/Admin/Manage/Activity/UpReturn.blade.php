@extends('Extend.Admin') {{-- 繼承Extend.Admin頁面 --}}

@section('title', '文章編輯成功') {{-- 網頁標題 --}}

@section('content') {{-- 網頁文章區塊 --}}

    {{-- 成功的視窗 --}}
    <div class="container-fluid my-4">
        <div class="row py-5 ">
            <div class="col">
                <div class="card mx-auto" style="width: 750px">
                    <h3>
                        <div class="card-header" style="color: black">
                            SGT活動 文章編輯成功!
                        </div>
                    </h3>
                    <div class="card-body" style="color: black">
                        <p class="card-text">文章編輯修改成功! 請返回"SGT活動"文章列表繼續操作。</p>
                        <form>
                            <a href="/activity" class="btn btn-primary">返回"SGT活動"文章列表</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

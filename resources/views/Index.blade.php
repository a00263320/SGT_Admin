@extends('Extend.Admin') {{-- 繼承 Extend/Admin 頁面 --}}

@section('title', 'SGT後台')

@section('content')

    {{-- 選擇文章區塊 --}}
    <div class="container">
        <div class="row py-2">
            {{-- News --}}
            <div class="col-3 py-3">
                <div class="card">
                    <a href="/news">
                        <img src="https://img.onl/WqpZOn" class="card-img-top bg-dark" alt="...">
                    </a>
                    <div class="card-footer">
                        <div>
                            <a class="btn btn-info" style="width: 250px; height: 45px" href="/news" onclick='news()'>
                                <h4>NEWS文章管理</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Activity --}}
            <div class="col-3 py-3">
                <div class="card">
                    <a href="/product">
                        <img src="https://img.onl/XhoiiC" class="card-img-top  bg-dark" alt="...">
                    </a>
                    <div class="card-footer">
                        <div>
                            <a class="btn btn-info" style="width: 250px; height: 45px" href="/product"
                                onclick='product()'>
                                <h4>周邊文章管理</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Product --}}
            <div class="col-3 py-3">
                <div class="card">
                    <a href="/activity">
                        <img src="https://img.onl/ONEzO7" class="card-img-top  bg-dark" alt="...">
                    </a>
                    <div class="card-footer">
                        <div>
                            <a class="btn btn-info" style="width: 250px; height: 45px" href="/activity"
                                onclick='activity()'>
                                <h4>活動文章管理</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- videos --}}
            <div class="col-3 py-3">
                <div class="card">
                    <a href="/videos">
                        <img src="https://img.onl/xS6efo" class="card-img-top bg-dark" alt="...">
                    </a>
                    <div class="card-footer">
                        <div>
                            <a class="btn btn-info" style="width: 250px; height: 45px" href="/videos"
                                onclick='activity()'>
                                <h4>影片管理</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

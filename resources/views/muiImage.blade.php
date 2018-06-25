@extends('laupload.layouts.base')
@section('html')
    <style>
        #box img {
            width: 200px;
            float: left;
            margin-right: 10px;
            border: solid 1px #999;
            padding: 10px;
            height: 200px;
        }
    </style>
    <button onclick="upImageMul(this)" class="btn btn-default" type="button">选择图片</button>
    <div id="box"></div>
@endsection
@section('script')
    <script>
    require(['hdjs']);
    // 多图上传
    function upImageMul(obj) {
        require(['hdjs'], function (hdjs) {
            hdjs.image(function (images) {
                $(images).each(function (k, v) {
                    $("<img src='" + v + "'/>").appendTo('#box');
                })
            }, {
                //上传多图
                multiple: true,
            })
        });
    }
    </script>
@endsection



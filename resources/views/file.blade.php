@extends('laupload.layouts.base')
@section('html')
    <button onclick="upFile(this)" class="btn btn-default" type="button">选择文件</button>
@endsection
@section('script')
    <script>
        require(['hdjs']);
        // 文件上传
        function upFile() {
            require(['hdjs'], function (hdjs) {
                var options = {
                    extensions: 'txt,php',
                    //data是向后台服务器提交的POST数据
                    data:{name:'后盾人',year:2099},
                    //单个文件允许为5MB
                    fileSingleSizeLimit:5 * 1024 * 1024
                };
                hdjs.file(function (files) {
                    //上传成功的文件，数组类型
                    console.log(files);
                }, options)
            });
        }
    </script>
@endsection


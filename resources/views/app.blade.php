@extends('laupload.layouts.base')
@section('html')
<button onclick="upImage()" class="btn btn-default">选择图片</button>
@endsection
@section('script')
<script>
    // 移动端上传
    function upImage() {
        require(['hdjs'], function (hdjs) {
            var options = {
                multiple: false, // 是否允许多图上传
                // data是向后台服务器提交的POST数据
                data: {name: '后盾人', year: 2099},
                compress: {
                    width: 1600,
                    height: 1600,
                }
            };
            hdjs.image(function (images) {
                console.log(images[0])
            }, options)
        });
    }
</script>
@endsection
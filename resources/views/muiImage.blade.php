<meta name="csrf-token" content="{{csrf_token()}}">
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
<script>
    window.hdjs={};
    //组件目录必须绝对路径(在网站根目录时不用设置)
    window.hdjs.base = "{{ asset('node_modules/hdjs')}}";
    //上传文件后台地址
    window.hdjs.uploader = "{{ route('upload.store') }}";
    //获取文件列表的后台地址
    window.hdjs.filesLists = "{{ route('upload.filesLists') }}";
</script>
<script>
    require(['hdjs']);
    //上传图片
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
<script src="{{ asset('node_modules/hdjs/static/requirejs/require.js') }}"></script>
<script src="{{ asset('node_modules/hdjs/static/requirejs/config.js') }}"></script>


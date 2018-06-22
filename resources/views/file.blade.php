<meta name="csrf-token" content="{{csrf_token()}}">
<button onclick="upFile(this)" class="btn btn-default" type="button">选择文件</button>
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
<script src="{{ asset('node_modules/hdjs/static/requirejs/require.js') }}"></script>
<script src="{{ asset('node_modules/hdjs/static/requirejs/config.js') }}"></script>


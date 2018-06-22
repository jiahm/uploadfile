<meta name="csrf-token" content="{{csrf_token()}}">
<button onclick="upImage()" class="btn btn-default">选择图片</button>
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
    //上传图片
    function upImage() {
        require(['hdjs'], function (hdjs) {
            var options = {
                multiple: false,//是否允许多图上传
                //data是向后台服务器提交的POST数据
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
<script src="{{ asset('node_modules/hdjs/static/requirejs/require.js') }}"></script>
<script src="{{ asset('node_modules/hdjs/static/requirejs/config.js') }}"></script>


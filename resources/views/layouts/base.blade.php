<meta name="csrf-token" content="{{csrf_token()}}">
@yield('html')
<script>
    window.hdjs={};
    // 组件目录必须绝对路径(在网站根目录时不用设置)
    window.hdjs.base = "{{ asset('node_modules/hdjs')}}";
    // 上传文件后台地址
    window.hdjs.uploader = "{{ route(config('laupload.uploadStore')) }}";
    // 获取文件列表的后台地址
    // window.hdjs.filesLists = "{{ route(config('laupload.uploadFileList')) }}";
</script>
@yield('script')
<script src="{{ asset('node_modules/hdjs/static/requirejs/require.js') }}"></script>
<script src="{{ asset('node_modules/hdjs/static/requirejs/config.js') }}"></script>


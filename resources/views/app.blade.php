<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>uploadfile test</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>
<body>
<div class="col-sm-10">
    <div class="input-group">
        <input class="form-control" name="thumb" readonly="" value="">
        <div class="input-group-btn">
            <button onclick="upImagePc(this)" class="btn btn-default" type="button">选择图片</button>
        </div>
    </div>
    <div class="input-group" style="margin-top:5px;">
        <img src="../dist/static/image/nopic.jpg" class="img-responsive img-thumbnail" width="150">
        <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片"
            onclick="removeImg(this)">×</em>
    </div>
</div>
</body>
<script>
    window.hdjs={};
    //组件目录必须绝对路径(在网站根目录时不用设置)
    window.hdjs.base = '/node_modules/hdjs';
    //上传文件后台地址
    window.hdjs.uploader = 'test/php/uploader.php?';
    //获取文件列表的后台地址
    window.hdjs.filesLists = 'test/php/filesLists.php?';
</script>
<script>
    require(['hdjs']);
    //上传图片
    function upImagePc() {
        require(['hdjs'], function (hdjs) {
            var options = {
                multiple: false,//是否允许多图上传
                //data是向后台服务器提交的POST数据
                data: {name: '后盾人', year: 2099},
            };
            hdjs.image(function (images) {
                //上传成功的图片，数组类型
                $("[name='thumb']").val(images[0]);
                $(".img-thumbnail").attr('src', images[0]);
            }, options)
        });
    }

    //移除图片
    function removeImg(obj) {
        $(obj).prev('img').attr('src', '../dist/static/image/nopic.jpg');
        $(obj).parent().prev().find('input').val('');
    }
</script>
<script src="/hdjs/static/requirejs/require.js"></script>
<script src="/node_modules/hdjs/static/requirejs/config.js"></script>
</html>



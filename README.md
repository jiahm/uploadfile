<p align="center">
    <a href="https://packagist.org/packages/guanguans/laupload"><img src="https://img.shields.io/packagist/v/guanguans/laupload.svg" alt="Version"></a>
    <a href="https://packagist.org/packages/guanguans/laupload"><img src="https://img.shields.io/packagist/l/guanguans/laupload.svg" alt="License"></a>
    <a href="https://packagist.org/packages/guanguans/laupload"><img src="https://img.shields.io/packagist/php-v/guanguans/laupload.svg" alt="PHP version"></a>
    <a href="https://github.com/guanguans/laupload/tags"><img src="https://img.shields.io/github/tag/guanguans/laupload.svg" alt="GitHub tag"></a>
</p>

# 通用文件上传类

## 安装

``` sh
composer global require fxp/composer-asset-plugin
composer require guanguans/laupload
```

## 使用

### 视图

``` html
<div class="col-lg-4">
    <!-------------------后台处理路由-------------->
    {!! laupload_widget('uploadStore', 'file') !!}
</div>
```

### 后台

``` php
use guanguans\laupload\Laupload;
...
$upload = new Laupload();
$upload->savePath = storage_path('app/public/laupload') . '/';    // 上传根目录
if ($upload->upload()) {
    //成功时返回数据 message 为文件地址
    $data = ['valid' => 1, 'message' => asset('storage/app/public/laupload/').'/'.$upload->getlauploadInfo()[0]['savename']];
} else {
    //失败时返回数据 message 为失败原因
    $data = ['valid' => 0, 'message' => "后台提示:" . $upload->getErrorMsg()];
}

return $data;
```

## License

[MIT](./LICENSE)


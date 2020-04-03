<?php
/**
 *
 * PHP Version 6
 * Created by PhpStorm.
 *
 * @category  Xin
 * @package   uploadfile
 * @author    jiahongming <jiahongming@xin.com>
 * @time      2020/4/3 11:38 上午
 * @copyright 2016 优信拍（北京）信息科技有限公司
 * @license   http://www.xin.com license
 * @link      jiahongming@xin.com
 */
require_once '../vendor/autoload.php';

use Guanguans\UploadFile;

$upload = new UploadFile();
$upload->maxSize       = 1*1024*1024;    // 默认为-1，不限制上传大小
$upload->savePath      = './upload/';    // 上传根目录
$upload->saveRule      = 'uniqid';       // 上传文件的文件名保存规则
$upload->uploadReplace = true;           // 如果存在同名文件是否进行覆盖
$upload->autoSub       = true;           // 上传子目录开启
$upload->subType       = 'date';         // 上传子目录命名规则
$upload->allowExts     = ['jpg', 'png']; // 允许类型

if ($upload->upload()) {
    var_dump($upload->getUploadFileInfo());
} else {
    var_dump($upload->getErrorMsg());
}
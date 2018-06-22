<?php

namespace guanguans\laupload\Controllers;

use guanguans\laupload\Laupload;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UploadController extends Controller
{
    /**
     * 视图
     */
    public function create()
    {
        return view('laupload::oneImage');
//        return view('laupload::muiImage');
//        return view('laupload::file');
//        return view('laupload::app');
//        return view('laupload.upload');

    }

    /**
     * 上传
     */
    public function store(Request $request)
    {
        $upload = new Laupload();
        $upload->maxSize = 1 * 1024 * 1024;    // 默认为-1，不限制上传大小
        $upload->savePath = storage_path('app/public/laupload') . '/';    // 上传根目录
        $upload->saveRule = 'uniqid';       // 上传文件的文件名保存规则
        $upload->uploadReplace = true;           // 如果存在同名文件是否进行覆盖
        $upload->autoSub = true;           // 上传子目录开启
        $upload->subType = 'date';         // 上传子目录命名规则
        $upload->allowExts = ['jpg', 'png']; // 允许类型
        if ($upload->upload()) {
            //成功时返回数据 message 为文件地址
            $data = ['valid' => 1, 'message' => asset('storage/app/public/laupload/').'/'.$upload->getUploadFileInfo()[0]['savename']];
        } else {
            //失败时返回数据 message 为失败原因
            $data = ['valid' => 0, 'message' => "后台提示:" . $upload->getErrorMsg()];
        }

        return $data;
    }

    /**
     * 文件列表
     */
    public function filesLists(Request $request)
    {
        $files = glob(storage_path('app/public/laupload/20180621').'/*');
        $data = [];
        foreach ($files as $f) {
            $data[] = ['url' => $f, 'path' => $f];
        }
        //返回数据 data为文件列表 page 为分页数据，可以使用 houdunwang/page 组件生成
        $json = ['valid'=>1,'data' => $data,'page'=>[]];

        return $json;
    }
}

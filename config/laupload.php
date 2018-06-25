<?php

return [
    'maxSize'        => -1,               // 上传文件的最大值
    'supportMulti'   => true,             // 是否支持多文件上传
    'allowExts'      => [],               // 允许上传的文件后缀 留空不作后缀检查
    'allowTypes'     => [],               // 允许上传的文件类型 留空不做检查
    'autoSub'        => true,             // 启用子目录保存文件
    'subType'        => 'date',           // 子目录创建方式 可以使用hash date custom
    'subDir'         => '',               // 子目录名称 subType为custom方式后有效
    'dateFormat'     => 'Ymd',            // 子目录名称规则
    'hashLevel'      => 1,                // hash的目录层次
    'savePath'       => storage_path('app/public/laupload') . '/', // 上传文件保存路径
    'autoCheck'      => true,             // 是否自动检查附件
    'uploadReplace'  => false,            // 存在同名是否覆盖
    'saveRule'       => 'uniqid',         // 上传文件命名规则
    'hashType'       => 'md5_file',       // 上传文件Hash规则函数名
    'uploadStore'    => 'uploadStore',    // 上传文件路由
    'uploadFileList' => 'uploadFileList', // 获取文件路由
];
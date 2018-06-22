<?php

if (!function_exists('laupload_widget')) {
    /**
     * 获取上传视图
     * @param string [oneImage muiImage file app]
     * @param string
     * @return string
     */
    function laupload_widget($action, $type = 'oneImage')
    {
        return view('laupload::'.$type, ['action'=>$action]);
    }
}
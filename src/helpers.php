<?php

/*
 * This file is part of the guanguans/laupload.
 *
 * (c) 琯琯 <yzmguanguan@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

if (!function_exists('laupload_widget')) {
    /**
     * 获取上传视图.
     *
     * @param string [oneImage muiImage file app]
     * @param string
     *
     * @return string
     */
    function laupload_widget($type = 'oneImage')
    {
        return view('laupload.'.$type);
    }
}

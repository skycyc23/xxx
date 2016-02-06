<?php
/**
 * Created by Eric Chen.
 * User: Eric Chen
 * Date: 2016/1/4
 * Desc:
 */

namespace Admin\Controller;

use Think\Controller;

class BaseController extends Controller{
    protected $_admin_info = array();//登录用户的信息
    protected $_config = array();
    protected $_permission;//权限信息
    public function _initialize(){
        $this->_admin_info = session('admin');
    }


    protected function successAlert($message, $jumpUrl = '', $time = 3000) {
        $str = '<script>';
        $str .='parent.success("' . $message . '",' . $time . ',\'jumpUrl("' . $jumpUrl . '")\');';
        $str.='</script>';
        exit($str);
    }

    protected function errorAlert($message, $time = 3000, $yzm = false) {
        $str = '<script>';
        if ($yzm) {
            $str .='parent.error("' . $message . '",' . $time . ',"yzmCode()");';
        } else {
            $str .='parent.error("' . $message . '",' . $time . ');';
        }
        $str.='</script>';
        exit($str);
    }
}
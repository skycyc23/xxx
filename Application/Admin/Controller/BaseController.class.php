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
}
<?php
/**
 * Created by Eric Chen.
 * User: Eric Chen
 * Date: 2016/1/4
 * Desc:
 */

namespace Admin\Controller;

use Think\Controller;
use Think\Verify;

class LoginController extends Controller{

    public function index(){
        $this->display();
    }

    public function logout(){

    }

    /**
     * 生成验证码
     */
    public function makeverify(){
        $Verify = new Verify();
        $Verify->expire = 60;//验证码有效期60秒
        $Verify->length = 4;
        $Verify->fontSize = 64;
        $Verify->codeSet = '2345679abcdefghijkmnpqrstuvwxyz';//指定验证码字符
        $Verify->entry();
    }

    /**
     * 验证码检测
     */
    public function checkverify($code,$id=''){
        $Verify = new Verify();
        return $Verify->check($code,$id);
    }
}
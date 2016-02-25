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
        if(IS_POST){
            //验证登录
        }else{
            $this->display();
        }
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
        $Verify->codeSet = '2345678ABCDEFGHJKLMNPQRTUVWXY';//指定验证码字符
        $Verify->useCurve = false;//取消画混淆曲线
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
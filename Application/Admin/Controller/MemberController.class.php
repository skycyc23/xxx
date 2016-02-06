<?php
/**
 * Created by Eric Chen.
 * User: Eric Chen
 * Date: 2016/1/29
 * Desc: 会员管理
 */
namespace Admin\Controller;
class MemberController extends BaseController{
    public function index(){
        if(!IS_POST){
            $this->errorAlert('error message!');
        }
        $this->display('member:index');
    }
}

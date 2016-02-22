<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
        //echo "admin index";
        $this->display();
    }

    /**
     * 修改密码
     */
    public function password(){
        if(IS_POST){
            var_dump(I('post.'));
        }else{
            $this->display();
        }
    }

    public function demo(){
        if(IS_POST){
            $this->errorAlert('error message!');
        }
        $this->display();
    }

    public function test(){
        if(IS_POST){
            $this->errorAlert('error message!');
        }
        $this->display();
    }
}
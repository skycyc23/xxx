<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/1/18
 * Time: 21:23
 */

namespace Admin\Controller;


class DashboardController extends BaseController{
    public function welcome(){
        //echo "welcome";
    }

    /**
     * 关于我们
     */
    public function aboutus(){
       $this->display('index/aboutus');
    }

    public function base(){
        echo "hello website setting";
    }
}
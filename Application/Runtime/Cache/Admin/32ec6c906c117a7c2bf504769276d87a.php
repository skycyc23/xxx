<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="/Public/resource/script/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="/Application/Admin/View/resource/css/login.css" />
    <script src="/Application/Admin/View/resource/js/jquery.supersized.min.js" ></script>
    <title><?php echo ($title); ?></title>
</head>
<body>
<div class="login-layout">
    <div class="top">
        <h5><em></em></h5>
        <h2>平台管理中心</h2>
        <h6>友善&nbsp;&nbsp;|&nbsp;&nbsp;诚信&nbsp;&nbsp;|&nbsp;&nbsp;素养&nbsp;&nbsp;|&nbsp;&nbsp;专业&nbsp;&nbsp;|&nbsp;&nbsp;进取</h6>
    </div>
    <form method="post" id="form_login">
        <input type='hidden' name='formhash' value='' />
        <input type="hidden" name="form_submit" value="ok" />
        <input type="hidden" name="SiteUrl" id="SiteUrl" value="" />
        <div class="lock-holder">
            <div class="form-group left input-username">
                <label>账号</label>
                <input name="user_name" id="user_name" autocomplete="off" type="text" class="input-text" value="" required>
            </div>
            <!--<i class="fa fa-ellipsis-h dot-left"></i><i class="fa fa-ellipsis-h dot-right"></i>-->
            <div class="form-group right input-password-box">
                <label>密码</label>
                <input name="password" id="password" class="input-password" autocomplete="off" type="password" required pattern="[\S]{6}[\S]*"
                       title="密码不少于6个字符">
            </div>
        </div>
        <div class="avatar"><img src="/Application/Admin/View/resource/img/login/admin.png" alt=""></div>
        <div class="submit">
            <span>
                <div class="code">
                    <div class="arrow"></div>
                    <div class="code-img">
                        <img src="/index.php/Admin/Login/makeverify" name="codeimage" id="codeimage" border="0"/>
                    </div>
                    <a href="JavaScript:void(0);" id="hide" class="close" title="关闭"><i></i></a>
                    <a href="JavaScript:void(0);" onclick="javascript:document.getElementById('codeimage').src='/index.php/Admin/Login/makeverify?t=' + Math.random();" class="change" title="看不清,点击更换验证码"><i></i>
                    </a>
                </div>
             <input name="captcha" type="text" required class="input-code" id="captcha" placeholder="输入验证" pattern="[A-z0-9]{4}" title="验证码为4个字符" autocomplete="off" value="" >
            </span>
            <span>
                <input name="nchash" type="hidden" value="4fa3f6e3" />
                <input name="" class="input-button" type="submit" value="登录">
            </span>
        </div>
        <div class="submit2"></div>
    </form>
    <div class="bottom">
    </div>
</div>
<script>
    $(function(){
        $.supersized({
            // 功能
            slide_interval     : 4000,
            transition         : 1,
            transition_speed   : 1000,
            performance        : 1,
            // 大小和位置
            min_width          : 0,
            min_height         : 0,
            vertical_center    : 1,
            horizontal_center  : 1,
            fit_always         : 0,
            fit_portrait       : 1,
            fit_landscape      : 0,
            // 组件
            slide_links        : 'blank',
            slides             : [
                {image : '/Application/Admin/View/resource/img/login/1.jpg'},
                {image : '/Application/Admin/View/resource/img/login/2.jpg'},
                {image : '/Application/Admin/View/resource/img/login/3.jpg'},
                {image : '/Application/Admin/View/resource/img/login/4.jpg'},
                {image : '/Application/Admin/View/resource/img/login/5.jpg'}
            ]
        });
        //显示隐藏验证码
        $("#hide").click(function(){
            $(".code").fadeOut("slow");
        });
        $("#captcha").focus(function(){
            $(".code").fadeIn("fast");
        });
        //跳出框架在主窗口登录
        if(top.location!=this.location)	top.location=this.location;
        $('#user_name').focus();
        if ($.browser.msie && ($.browser.version=="6.0" || $.browser.version=="7.0")){
            window.location.href='http://www.shopnc.ltd/admin/templates/default/ie6update.html';
        }
        $("#captcha").nc_placeholder();
        //动画登录
        $('.btn-submit').click(function(e){
            $('.input-username,dot-left').addClass('animated fadeOutRight')
            $('.input-password-box,dot-right').addClass('animated fadeOutLeft')
            $('.btn-submit').addClass('animated fadeOutUp')
            setTimeout(function () {
                        $('.avatar').addClass('avatar-top');
                        $('.submit').hide();
                        $('.submit2').html('<div class="progress"><div class="progress-bar progress-bar-success" aria-valuetransitiongoal="100"></div></div>');
                        $('.progress .progress-bar').progressbar({
                            done : function() {$('#form_login').submit();}
                        });
                    },
                    300);
        });
        // 回车提交表单
        $('#form_login').keydown(function(event){
            if (event.keyCode == 13) {
                $('.btn-submit').click();
            }
        });
    });
</script>
</body>
</html>
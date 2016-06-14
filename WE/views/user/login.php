<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="此代码内容为超萌的猫头鹰登录界面" />
    <title>超萌的猫头鹰登录界面</title>
    <link rel="stylesheet" href="css/jq22.css">
</head>
<body>
<!--
客服添加
-->
<ul style="position: fixed;top: 200px;list-style: none;left: 0px">
    <li class="ke"></li>
</ul>
<!-- begin -->
<div id="login">
    <div class="wrapper">
        <div class="login">
            <form action="index.php?r=user/sel" method="post" class="container offset1 loginform">
                <div id="owl-login">
                    <div class="hand"></div>
                    <div class="hand hand-r"></div>
                    <div class="arms">
                        <div class="arm"></div>
                        <div class="arm arm-r"></div>
                    </div>
                </div>
                <div class="pad">
                    <input type="hidden" name="_csrf" value="9IAtUxV2CatyxHiK2LxzOsT6wtBE6h8BpzOmk=">
                    <div class="control-group">
                        <div class="controls">
                            <label for="user" class="control-label fa fa-user"></label>
                            <input id="user" type="text" name="user" placeholder="账号" tabindex="1" autofocus="autofocus" class="form-control input-medium">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <label for="password" class="control-label fa fa-asterisk"></label>
                            <input id="password" type="password" name="password" placeholder="密码" tabindex="2"  class="form-control input-medium">
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <a href="#" tabindex="5" class="btn pull-left btn-link text-muted">忘记密码?</a>
                    <a target="_blank" tabindex="5" class="btn pull-left btn-link text-muted" href="http://wpa.qq.com/msgrd?v=3&uin=975128226&site=qq&menu=yes">联系我们</a>
                    <a href="#" tabindex="6" class="btn btn-link text-muted">注册</a>

                    <input type="button" id="button" tabindex="4" value="登陆" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script>
        $(function() {
            $('#login #password').focus(function() {
                $('#owl-login').addClass('password');
            }).blur(function() {
                $('#owl-login').removeClass('password');
            });
            $(document).on('click','#button',function(){
                var user=  $('#user').val();
                var password=$('#password').val();
                var zhengze=/^[a-zA-z0-9\u4E00-\u9FA5]*$/;
                if(user==""){
                    alert('您的账号没有填写');
                    //终止请求动作.
                    ajax.abort();
                }else if(password==""){
                    alert("您的密码没有填写")
                    //终止请求动作.
                    ajax.abort();
                }else if(!zhengze.test(user)){
                    alert("账号格式错误")
                    ajax.abort();
                }else if(!zhengze.test(password)){
                    alert("密码格式错误")
                    ajax.abort();
                }
                $.ajax({
                    url:"index.php?r=user/sel",
                    type:"post",
                    data:{
                        user:user,
                        password:password
                    },
                    success:function(aa){
                     if(aa){
                        location.href="index.php?r=user/login";
                     }else{
                         alert('密码错误')
                     }
                    }
                })

            })
        });
    </script>

</div>
<!-- end -->
</body>
</html>
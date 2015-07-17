<?php
/*********用户欢迎页面************/
    get_header(); //载入头部文件

//if( !is_user_logged_in()) { //判断用户是否登录
//    echo '<div style="text-align:center; margin:40px;">访客您好,请先登录。</div>';
//}else{
//    global $current_user;
//    get_currentuserinfo();
//    $uname = $current_user->user_nicename;
//
//    echo '<div style="text-align:center; margin:40px;"><span style="color:red;">';
//    echo $uname; //输出用户名
//    echo '</span>您好，欢迎登陆...</div>';
//}

?>




<form>
    <div style="padding: 30px;"
    <label for="name">姓名</label>
    <input id="name" name="name" type="text" />

    <label for="phone">手机号</label>
    <input id="phone" name="phone" type="text" />

    <label for="validatecode">验证码</label>
    <input id="validatecode" name="validatecode"/>
    
    <img title="点我刷新" src="/validate-code" onclick="this.src='/validate-code?'+Math.random();" />
    <input type="submit" value="提交" />
</form>



<?php
    get_footer(); //载入底部文件
?>  
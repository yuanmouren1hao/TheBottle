<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<br>

<?php echo R('Login/isLogin','','Widget');?> 
<br>
<ul>
	<li><a href="__APP__/Index/index">主页</a></li>
    <li><a href="__APP__/Order/showAllPrintshop">复印打印</a></li>
    <li><a href="__APP__/File/getFileListPage">我的文档</a></li>
    <li><a href="__APP__/Order/UserOrderInfoPage">订单记录</a></li>
    <li><a href="#">充值中心</a></li>
    <li><a href="#">帮助中心</a></li>
    <li><a href="#">个人中心</a></li>
    


</ul>
以上是head
<br>-------------------------------------------------------------------------
<br>
<br>
</body>
</html>

<br>用户登录  页面
<br>登录需要的数据有用户名，密码，验证码


<form action="__URL__/doLogin" method="post">
用户名：<input type="text" name="username" /><br>
密码：<input type="password" name="password" /><br>
验证码：<input type="text" name="verify" />
<img src="__APP__/Public/checkCode" onclick="this.src='__APP__/Public/checkcode/'+Math.random()"><br>
<input type="submit" value="提交" /><input type="reset" value="重置" />


</form>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<br><br>

-------------------------------------------------------------------------
<br>以下是foot
<br>foot

</body>
</html>


</body>
</html>
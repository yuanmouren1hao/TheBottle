<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Insert title here</title>
</head>
<body>

<!--<iframe src="__APP__/Index/head" vspace="0" width="100%" height="300px" ></iframe>-->
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

<br>
我是主页内容<br>
<a href="__APP__/Mytest/a">test</a>
<br><?php echo (date('Y-m-d g:i a',time())); ?>
<!--<br><img src="__ROOT__/Public/Images/user_default_img.png">-->

<br><a href="__APP__/File/doDownloadFile?askcode=e30f4cee907b137fef6c" target="_blank">文件下载</a>

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
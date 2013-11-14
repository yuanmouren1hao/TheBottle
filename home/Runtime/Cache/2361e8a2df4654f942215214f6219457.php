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

<p>showAllPrintshop</p>
<p>展示所有的打印店</p>

<p>选择打印店之后，选择上传文件页面</p>
<p><a href="__URL__/afterChooseShop">点击,假设已经选择某一个打印店==></a></p>

<?php if(is_array($shoplist)): $i = 0; $__LIST__ = $shoplist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><?php echo ($vo["Ps_title"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>

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
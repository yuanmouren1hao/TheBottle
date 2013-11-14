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

<form action="__APP__/Order/comfirmOrderPage" method="post">

<br>填写打印参数，并提交打印参数，进行确认
<hr>

<br>您上传的文件是：<a href="__APP__/File/doDownloadFile?askcode=<?php echo ($data["file_askcode"]); ?>"><?php echo ($data["file_name"]); ?></a>
<br>文件类型：<?php echo ($data["file_type"]); ?>
<br>文件大小：<?php echo ($data["file_size"]); ?>B
<br>文件页数：<?php echo ($data["file_pagenum"]); ?>
<br>预计使用金额：11.5元
<br>预计打折后金额：10元
<br>可用余额：<?php echo ($data["Usr_money"]); ?>
<br><hr>

<br>打印份数：<input value="1" name="Od_printnum" type="text">

<br>打印质量：
<select name="Od_iscloorprint">
	<option selected="selected" value="0">黑白打印</option>
    <option value="1">彩色打印</option>
</select>

<br>是否双面：
<select name="Od_oneortwoside">
	<option selected="selected" value="1">单面打印</option>
	<option value="2">双面打印</option>
</select>

<br>打印范围：
<input name="Od_pagefromto" type="radio" value="0" />全部<br>
<input name="Od_pagefromto" type="radio" value="" />部分
从<input type="text" name="formpage" />到<input type="text" name="topage" />

<br>
<br>
<br><hr>
<br>配送方式：
<input name="Odr_shiptype" type="radio" value="0" />自取
<input name="Odr_shiptype" type="radio" value="" />送货上门

<br>备注：<input type="text" name="Od_note" />
<br>
<br>
<br>
<input type="submit" value="提交订单">

</form>





<br><a href="__URL__/comfirmOrderPage">点击，进行确认打印信息，跳转到打印信息确认界面</a>

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
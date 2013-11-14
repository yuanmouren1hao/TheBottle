<?php

/*
 * test   测试函数
 * @author aoplee
 */
function aaaa_aop()
{
  return($_SESSION['name']);
}

/*
 * 判断用户是否已经登陆
 * @author aoplee
 */
function isLogin()
{
	if($_SESSION['user']['Usr_id']!=NULL)
	{
		//已经登陆
		return  true;
	}
	return false;
}


/**
 * 获取PDF的页数
 */
function getPDFPageTotal($path){

	//echo "getPageTotal pdf";
	// 打开文件
	if (!$fp =@fopen($path,"r")) {
		$error = "打开文件{$path}失败";
		echo $error;
		return false;
	}
	else {
		$max=0;
		while(!feof($fp)) {
			$line = fgets($fp,255);
			if (preg_match('/\/Count [0-9]+/', $line, $matches)){
				preg_match('/[0-9]+/',$matches[0], $matches2);
				if ($max<$matches2[0]) $max=$matches2[0];
			}
		}
		fclose($fp);
		// 返回页数
		return $max;
	}

}

/*
 * get current ip 
 * @author Aoplee
 * 
 */
function get_current_ip_aop()
{
	if ($_SERVER['REMOTE_ADDR'])
	{
		$cip=$_SERVER['REMOTE_ADDR'];
	}
	elseif (getenv("REMOTE_ADDR"))
	{
		$cip=getenv("REMOTE_ADDR");
	}
	elseif (getenv("HTTP_CLIENT_IP"))
	{
		$cip = getenv("HTTP_CLIENT_IP");
	}
	else 
	{
		$cip='unknow';
	}
	
	return $cip;
}

/*
 * get_current_time_aop  获取当前系统时间
 * @author Aoplee
 */
function get_current_time_aop()
{
	return date("Y-m-d H:i:s");
}

/*
 * 获取时间差
 * 如果时间差大于设置的$timeout则返回真
 * 如果时间差小于设置的$timeout则返回假
 * 单位是：秒
 */
function get_time_change($now_time,$session_time,$timeout)
{
	return  strtotime($now_time)-strtotime($session_time)>$timeout?true:false;
}





/*
 * 获取中英文混合长度函数定义
 * $str,$charset 代表的是字符串和字符编码设置，如果是中英文的话设置为gb2312
 */
function strLength_chinese_aop($str,$charset='utf-8')
{
	if($charset=='utf-8')
	{
		$str = iconv('utf-8','gb2312',$str);
	}
	$num = strlen($str);
	$cnNum = 0;
	for($i=0;$i<$num;$i++)
	{
		if(ord(substr($str,$i+1,1))>127)
		{
			$cnNum++;
			$i++;
		}
	}
	$enNum = $num-($cnNum*2);
	$number = ($enNum/2)+$cnNum;
	return ceil($number);
}





/**
 * 中英文截取
 * @param string    要截取的字符串
 * @param string    要截取的长度(超过总长度 按总长度计算)
 * @param [string]  (可选)开始位置(第一个为0)
 * @param [$dot]  添加的后缀
 * @return string
 * @author Aoplee
 */
function cut_mixstr_aop($str, $length, $start=FALSE,$dot = '...')
{
	if( ! $length){
		return false;
	}

	$strlen = strlen($str);
	$content = '';
	$sing = 0;
	$count = 0;

	if($length > $strlen) {
		$length = $strlen;
	}
	if($start >= $strlen) {
		return false;
	}

	while($length != ($count-$start))
	{
		if(ord($str[$sing]) > 0xa0) {
			if(!$start || $start <= $count) {
				$content .= $str[$sing].$str[$sing+1].$str[$sing+2];
			}
			$sing += 3;
			$count++;
		}else{
			if(!$start || $start <= $count) {
				$content .= $str[$sing];
			}
			$sing++;
			$count++;
		}
	}
	return $content.$dot;
}


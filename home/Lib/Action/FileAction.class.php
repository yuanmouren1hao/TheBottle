<?php
class FileAction extends Action
{
	/*
	 * 空操作
	*/
	public function _empty()
	{
		$this->error("亲爱的，没有您请求的操作哦~~");
	}
	
	/*
	 * getFileListPage获取用户文档页面
	 */
	public function getFileListPage()
	{
		//该操作需要用户首先登陆
		if(!isLogin())
		{
			//如果没有登录
			$this->error("您还没有登陆哦~","__APP__/User/loginPage");
			return ;
		}
		$this->display();
	}
	
	/*
	 * doDownloadFile
	 */
	public  function doDownloadFile()
	{
		//该操作需要用户首先登陆
		if(!isLogin())
		{
			//如果没有登录
			$this->error("您还没有登陆哦~","__APP__/User/loginPage");
			return ;
		}
		
		$askcode=$_GET['askcode'];
// 		$this->show($askcode);

		//$uploadpath="H:/AppServ/www/bm/uploads/";//设置文件上传路径，服务器上的绝对路径
		$uploadpath="F:/wamp/www/bottle/Public/file/".$_SESSION['user']['Usr_id']."/";
		if($askcode=='') //如果id为空而出错时，程序跳转到项目的Index/index页面。或可做其他处理。
		{
// 			$this->redirect(‘index’,'Index’,”,APP_NAME,”,1);
		}
		$file=D("File");//利用与表file对应的数据模型类FileModel来建立数据对象。
		$result= $file->where('file_askcode="'.$askcode.'"')->find();//根据id查询到文件信息
		if($result==false) //如果查询不到文件信息而出错时，程序跳转到项目的Index/index页面。或可做其他处理
		{
			//$this->redirect(‘index’,'Index’,”,APP_NAME,”,1);
		}
		$savename=$result['file_savename'];//文件保存名
		$showname=$result['file_name'];//文件原名
		$filename=$uploadpath.$savename;//完整文件名（路径加名字）
		import("ORG.Net.Http");
		Http::download($filename,$showname);

	}

	
}
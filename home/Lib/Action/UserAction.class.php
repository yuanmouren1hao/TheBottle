<?php
class UserAction extends Action
{
	/*
	 * 空操作
	*/
	public function _empty()
	{
		$this->error("亲爱的，没有您请求的操作哦~~");
	}
	
	
	/*
	 * loginPage用户登录主页面
	 */
	public function loginPage()
	{
// 		$user=M('User');
// 		$userlist=$user->select();
// 		dump($userlist[0]);
		
		$this->display();
	}
	
	
	/*
	 * dologin处理登录操作
	 */
	public function doLogin()
	{
		if($_SESSION['verify'] != md5($_POST['verify']))
		{
			$this->error('亲爱的，验证码错误了呢。。');
			return ;
		}
		//验证码输入正确，开始验证用户名和密码
		$username=$_POST['username'];
		$password=$_POST['password'];
		$user=M('User');
		//使用用户的Id，或者是用户的注册当做用户的登录名
		$userlist=$user->where('(Usr_cardid="'.$username.'" or Usr_email="'.$username.'") and Usr_password="'.$password.'"')->select();
		
		//如果用户不存在 或者 输入的账号密码错误的话
		if(sizeof($userlist)<1)
		{
			$this->error('亲爱的，您输入的密码错误，或者是您还没有账号哦~');
			return ;
		}
		
		//存在账号，并且登陆正确
		$_SESSION['user']=$userlist[0];
		//将用户的余额加密
		$_SESSION['user']['Usr_money']=md5($_SESSION['user']['Usr_money']);
//  		dump($_SESSION['user']);
		$this->success("恭喜您，登陆成功了~","__APP__/Index/index");
		
	}
	
	/*
	 * doLogout退出登陆操作
	 */
	public function doLogout()
	{
		$_SESSION['user']='';
		$this->success('退出成功！','__APP__/Index/index');
	}
	
	
	
	
	
	
	
	
	
}
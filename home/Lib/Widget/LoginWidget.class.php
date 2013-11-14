<?php
class LoginWidget extends Action 
{
	public function isLogin()
	{
		/*
		 * 若果没用登陆，
		 */
		if($_SESSION['user']!=NULL)
		{
			return $_SESSION['user']['Usr_name']." 您好 | <a href='#'>账户余额</a>  | <a href='__APP__/User/doLogout'>退出</a>";
		}
		 return "<a href='__APP__/User/loginPage'>登陆</a>|<a>注册</a>|<a>忘记密码</a>";
	}
}
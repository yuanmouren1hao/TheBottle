<?php
/*
 * 系统控制器
 */ 
class IndexAction extends Action
{
	/*
	 * 空操作
	 */
	public  function _empty()
	{
		$this->error("亲爱的，没有您请求的操作哦~~");
	}
	
	
	/*
	 * 主页文件
	 */
	public function index()
	{
		$_SESSION['id']='s';
		$_SESSION['username']='aoplee';
		$this->display();
	}
	
	/*
	 * 头部文件
	 */
	public function head()
	{
// 		$this->assign("username","lifuhao");

		$this->display();
	}
	
	/*
	 * foot
	 */
	public function foot()
	{
		$this->show("foot");
		$this->display();
	}
	
	
}
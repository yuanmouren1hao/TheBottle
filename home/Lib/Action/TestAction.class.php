<?php
class TestAction extends Action
{
	/*
	 * 空操作
	*/
	public function _empty()
	{
		$this->error("亲爱的，没有您请求的操作哦~~");
	}

	public function a()
	{
		$_SESSION['name']='lifhao';
		$this->show(aaaa_aop());
	}
}
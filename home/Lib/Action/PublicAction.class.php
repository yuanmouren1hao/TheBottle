<?php
class PublicAction extends Action
{
	/*
	 * 空操作
	*/
	public function _empty()
	{
		$this->error("亲爱的，没有您请求的操作哦~~");
	}
	
	/*
	 * 生成验证码
	 */
	public function checkCode()
	{
		import('ORG.Util.Image');
		Image::buildImageVerify();
	}
}
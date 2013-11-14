<?php
/*
 * 订单控制器
 */
class OrderAction extends Action
{
	
	/*
	 * 空操作
	*/
	public function _empty()
	{
		$this->error("亲爱的，没有您请求的操作哦~~");
	}
	
	/*
	 * 展示所有的打印店
	 */
	public function showAllPrintshop()
	{
		$printshop=M('Printshop');
		//打印第一步，选择打印店（不需要已经登陆）
		if($_SESSION['user']['Usr_id']==NULL)
		{
			//如果还没有登陆，页面显示所有的店铺
			
			$printshopList=$printshop->select();
			
		}
		else if($_SESSION['user']['Usr_id']!=NULL)
		{
			//如果已经登陆，页面只是显示和用户地址相关的shop
			//首先获取地址
			$unvId=$_SESSION['user']['Usr_unvId'];
			$printshopList=$printshop->where('Ps_unvId='.$unvId)->select();
		
			
		}
		$this->assign('shoplist',$printshopList);
		$this->display();
	}
	
	
	/*
	 * 选择打印店之后，选择上传文件页面
	 */
	public function afterChooseShop()
	{
		//当选择一个打印店之后需要上传文档
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
	 * 执行上传操作，完成文件上传后，填写参数的页面
	 */
	public function afterUploadFile()
	{
		//该操作需要用户首先登陆
		if(!isLogin())
		{
			//如果没有登录
			$this->error("您还没有登陆哦~","__APP__/User/loginPage");
			return ;
		}
		
		//首先要处理文件上传操作
		import('ORG.Net.UploadFile');
		$upload=new UploadFile();
		$upload->maxSize = 15*1024*1024;//文件限制大小为15M
		$upload->allowExts=array('jpg','gif','png','jpeg','doc','docx','xls','xlsx','ppt','pptx','rar','txt','pdf');
		
		$userid=$_SESSION['user']['Usr_id'];
		//将文件保存在服务器中的路径是根据
		$upload->savePath='../Public/file/'.$userid.'/';
		$upload->saveRule=$_SESSION['user']['Usr_email'].'_'.$_SESSION['user']['Usr_cardid'].'_'.time();
		if(!$upload->upload())
		{
			$this->error($upload->getErrorMsg());
		}
		else
		{
			//上传成功，需要在file表中添加一条数据
			$info=$upload->getUploadFileInfo()[0];
			//dump($info);
			
			$file=M('File');
			$data['file_usrId']=$_SESSION['user']['Usr_id'];
			$data['file_name']=$info['name'];
			$data['file_type']=$info['extension'];
			$data['file_path']=$info['savepath'];
			$data['file_size']=$info['size'];//单位是B
			$data['file_savename']=$info['savename'];
			$data['file_askcode']=md5($data['file_usrId']);//文件请求码，用于下载
			$data['file_uploadtime']=get_current_time_aop();
			$data['file_uploadip']=get_current_ip_aop();
			//$data['file_status']//文件状态（0表示未处理，1表示已经处理）
			//$data['file_delete']//文件是否删除（文件在服务器没有真正的删除）（0表示未删除，1表示已经删除）
			
			//如果文件的类型是pdf，则可以计算出文件的页数
			if($data['file_type']=='pdf')
			{
				$data['file_pagenum']=getPDFPageTotal($data['file_path'].$data['file_savename']);
			}

			$file->add($data);
// 			dump($data);
			//$this->success('upload success file');
		}
		
		//获取可用余额
		$userList=M('User')->where('Usr_id='.$_SESSION['user']['Usr_id'])->select();
		$data['Usr_money']=$userList[0]['Usr_money'];
		
		//将上传文件信息传到前台页面
		$this->assign("data",$data);
		dump($data[file_askcode]);
		
		$this->display("afterUploadFile");
	}
	
	/*
	 * 选择参数完成后，确认订单页面
	 */
	public  function comfirmOrderPage()
	{
		//首先获取所有的订单的信息
		
		$this->display();
		
	}
	
	/*
	 * doCreateOrder确认完成，生成订单
	 */
	public function doCreateOrder()
	{
		//生成订单信息
		//生成订单号，并展示
		$this->display("createOrderSuccessPage");
	}
	
	
	/*
	 * UserOrderInfoPage 用户订单记录页面
	 */
	public function UserOrderInfoPage()
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
	
	
	
	
	
	
}
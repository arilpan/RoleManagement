<?php

namespace Home\Common;

use Think\Controller;
use Think\Auth;

class AuthController extends Controller
{
	public function delResource($Table, $delMap, $url)
	{
		if ($Table->del ( $delMap ))
		{
			$this->success ( "删除成功", $url );
			return;
		}
		else
		{
			$this->error ( "删除失败", $url );
			return;
		}
	}
	public function existId($Table, $id, $url)
	{
		if ($Table->exist ( $id ))
		{
		}
		else
		{
			$this->error ( "不存在该资源id", $url );
			return;
		}
	}
	public function _initialize()
	{
		$auth = new Auth ();
		$uid = session ( "uid" );
		
		$uid = 3;
		if ($auth->check ( MODULE_NAME . "/" . CONTROLLER_NAME . "/" . ACTION_NAME, $uid ))
		{
			//echo "   有权限   ";
		}
		else
		{
			//echo "   无权限   ";
			$this->error("无权访问","/flow_manger/Home/Role/index");
		}
	}
}
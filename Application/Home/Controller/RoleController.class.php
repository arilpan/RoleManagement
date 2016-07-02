<?php

namespace Home\Controller;

use Home\Common\AuthController;
// use Common\Controller\AuthController;
// 第一，展示表
// 第二、修改单个的信息
class RoleController extends AuthController
{
	private $tableName = "AuthGroup";
	// private $url = CONTROLLER_NAME + "/index";
	private $url = "Home/Role/index";
	
	public function member()
	{
		echo "进来了";
	}
	/**
	 * 1. 能不能够看到某个管理的栏目
	 * 2. 能不能进行里面的操作
	 */
	public function action()
	{
		echo "进来了";
	}
	
	public function add()
	{
		// 向数据库添加信息，并跳回首页
		$Table = D ( $this->tableName );
		$map [title] = I ( "role_name" );
		$map [remark] = I ( "role_remark" );
		
		$res = $Table->addOne ( $map );
		if ($res > 0)
		{
			$this->success ( "添加成功", $url );
		}
		else
		{
			$this->success ( "添加失败", $url );
		}
	}
	public function edit()
	{
		$id = I ( "get.id" );
		$Table = D ( $this->tableName );
		
		// 如果id不存在，提示操作错误
		// $this->existId ( $this->tableName, $id, $this->url );
		if (! $Table->exist ( $id ))
		{
			$this->error ( "不存在该资源id", $url );
			return;
		}
		
		if (IS_POST)
		{
			// 将信息更新到数据库后，直接跳回首页
			$map [title] = I ( "role_name" );
			$map [remark] = I ( "role_remark" );
			$res = $Table->updateOne ( $id,$map );
			echo $res;
			if ($res > 0)
			{
				$this->success ( "更新成功", U ( 'Role/index' ) );
				return;
			}
			else
			{
				$this->error ( "更新失败", U ( 'Role/index' ) );
				return;
			}
		}
		if (IS_GET)
		{
			$result = $Table->get ( $id );
			$this->assign ( "info", $result );
		}
		// 回传信息到界面中显示
		$this->display ();
	}
	public function delete()
	{
		$id = I ( "get.id" );
		$Table = D ( $this->tableName );
		
		// 如果id不存在，提示操作错误
		// $this->existId ( $Table, $id, $this->url );
		if (! $Table->exist ( $id ))
		{
			$this->error ( "不存在该资源id", $url );
			return;
		}
		
		// 否则提示成功，跳回首页
		$delMap ['id'] = $id;
		//$this->delResource ( $Table, $delMap, $this->url );
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
	public function index()
	{
		$Table = D ( $this->tableName );
		$groups = $Table->getAll ();
		$this->assign ( "list", $groups );
		$this->display ( "Role_manager" );
	}
}
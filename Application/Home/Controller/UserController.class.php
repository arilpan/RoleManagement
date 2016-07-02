<?php
namespace Home\Controller;
use Home\Common\AuthController;
//use Common\Controller\AuthController;

class UserController extends AuthController {
	private $tableName = "User";
	// private $url = CONTROLLER_NAME + "/index";
	private $url = "Home/User/index";
	public function add()
	{
		// 向数据库添加信息，并跳回首页
		$Table = D ( $this->tableName );
		$map [username] = I ( "username" );
		$map [password] = I ( "password" );
		$map [nickname] = I ( "nickname" );
		$map [referee_id] = I ( "referee_id" );

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
			$map [username] = I ( "username" );
			$map [password] = I ( "password" );
			$map [nickname] = I ( "nickname" );
			$map [referee_id] = I ( "referee_id" );
			
			$res = $Table->updateOne ( $id,$map );
			echo $res;
			if ($res > 0)
			{
				$this->success ( "更新成功", U ( 'User/index' ) );
				return;
			}
			else
			{
				$this->error ( "更新失败", U ( 'User/index' ) );
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
	/**
	 * 注销登录
	 */
	public function logout()
	{
		
		
	}
	
	public function index(){
		//$Role_groups = D("AuthGroup");
		//dump($Role_groups->getAll());
		
		$Table = D ( $this->tableName );
		$groups = $Table->getAll ();
		$this->assign ( "list", $groups );
		
		$this->display();
	}
}
<?php

namespace Home\Controller;

use Home\Common\AuthController;
// use Common\Controller\AuthController;

/**
 * 1.查看所有用户对应的权限
 * 2.修改某类用户的权限
 * 3.查看某类操作所有有权用户
 * @author aril
 *        
 */
class ActionController extends AuthController
{
	public function index()
	{
		$Role_groups = D ( "AuthGroup" );
		// dump($Role_groups->getAll());
		
		$this->display ();
	}
}
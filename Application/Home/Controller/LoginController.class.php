<?php
namespace Home\Controller;
use Home\Common\AuthController;
//use Common\Controller\AuthController;
class LoginController extends AuthController {
    public function index(){
    	if(IS_POST)
    	{
    		echo "post";
    		session("uid",3);
    		$this->success("登录成功",U("Index/index"));
    	}
    	
        $this->display();
    }
}
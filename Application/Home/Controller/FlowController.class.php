<?php
namespace Home\Controller;
use Home\Common\AuthController;
//use Common\Controller\AuthController;

class FlowController extends AuthController {
	public function index(){
		$Role_groups = D("AuthGroup");
		//dump($Role_groups->getAll());
		
		$this->display();
	}
}
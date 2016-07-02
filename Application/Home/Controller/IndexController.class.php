<?php
namespace Home\Controller;
use Home\Common\AuthController;
//use Common\Controller\AuthController;
class IndexController extends AuthController {
    public function index(){
        echo "后台首页";
    }
}
<?php
// 系统回台的管理
class AdminAction extends Action {
    public function index(){
			$this->display();
    }
    public function login(){
    	$User = M('News');
    	$data['name'] = 'ThinkPHP';
			$User->add($data); // 根据条件保存修改的数据
			$this->display();
    }
    public function admin(){
			$this->display();
    }
    public function productShow(){
			$this->display();
    }
}
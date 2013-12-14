<?php
// 用于初始化管理员密码内容展示
class InitAdminAction extends Action {
    public function initAdminUser(){
			$User = M('adminuser');
			$data['realName'] = '小郝';
			$data['loginName'] = 'xiaohao';
			$data['password'] = 'xiaohao';
			$User->add($data); // 根据条件保存修改的数据
			$this->display();
    }
}
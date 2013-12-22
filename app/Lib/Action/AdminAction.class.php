<?php
// 系统回台的管理
class AdminAction extends Action {
    public function index(){
			$this->display();
    }
    public function login(){
			$username=$_POST['username'];
			$password=$_POST['password'];
			$m=M('adminuser');
			$where['loginName']=$username;
			$where['password']=$password;
			$i=$m->where($where)->count();
			if($i>0){
				$user =$m->where($where)->getField('realName');
				//$this->assign('realName',$user);
				session_start();
				// store session data
				$_SESSION['userName']=$user;
				//echo $user;
				$this->display('login');
				//$this->redirect('User/index');
			}else{
				$this->error('该用户不存在，或密码错误请重试');
			}
    }
    public function admin(){
			$this->display();
    }
    public function productShow(){
			$this->display();
    }
	public function qqAdmin(){
			$qq1=$_POST['qqNum1'];
			$qq2=$_POST['qqNum2'];
			$id='1';
			$where['id']=$id;
			$m=M('qinfo');
			$i=$m->where($where)->count();
			$data['qq1'] = $qq1;
			$data['qq2'] = $qq2;
			$data['id'] = $id;
			if($i>0){
				$m->save($data);
			}else{
				$m->add($data);
			}
			$this->assign('qq1',$qq1);
			$this->assign('qq2',$qq2);
			$this->display("qqAdmin");
    }
	public function linkManAdmin(){
			$this->display();
    }
	public function addNews(){
			$this->display();
    }
	public function newsList(){
			$this->display();
    }
	public function initQQAdmin(){
			$m=M('qinfo');
			$qq1 = $m->where('id=1')->getField('qq1');
			$qq2 = $m->where('id=1')->getField('qq2');
			$this->assign('qq1',$qq1);
			$this->assign('qq2',$qq2);
			$this->display("qqAdmin");
	}
}
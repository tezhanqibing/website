<?php
// 用于前台的内容展示
class IndexAction extends Action {
    public function index(){
			$m=M('qinfo');
			$qq1 = $m->where('id=1')->getField('qq1');
			$qq2 = $m->where('id=1')->getField('qq2');
			$this->assign('qq1',$qq1);
			$this->assign('qq2',$qq2);
			$this->display();
    }
    public function news(){
			$m=M('qinfo');
			$qq1 = $m->where('id=1')->getField('qq1');
			$qq2 = $m->where('id=1')->getField('qq2');
			$this->assign('qq1',$qq1);
			$this->assign('qq2',$qq2);
			import('ORG.Util.Page');
			$news = M('qnews');
			$count  = $news->count();    
			$Page   = new Page($count, 3);
			$list   = $news->limit($Page->firstRow. ',' . $Page->listRows)->order('id desc')->select();
			//$Page->setConfig('header', '');
			//$Page->setConfig('first', '');
			//$Page->setConfig('last', '');
			$page = $Page->show();
			$this->assign('list',$list);
			$this->assign('page',$page);
			$this->display();
    }
    public function downloads(){
			$this->display();
    }
    public function productShow(){
			$this->display();
    }
	public function contact(){
			$m=M('qinfo');
			$qq1 = $m->where('id=1')->getField('qq1');
			$qq2 = $m->where('id=1')->getField('qq2');
			$this->assign('qq1',$qq1);
			$this->assign('qq2',$qq2);
			$this->display();
    }
	public function download(){
			$m=M('qinfo');
			$qq1 = $m->where('id=1')->getField('qq1');
			$qq2 = $m->where('id=1')->getField('qq2');
			$this->assign('qq1',$qq1);
			$this->assign('qq2',$qq2);
			$this->display();
    }
	public function index_en(){
			$this->display();
    }
	public function index_old(){
			$this->display();
    }
	public function introduction(){
			$m=M('qinfo');
			$qq1 = $m->where('id=1')->getField('qq1');
			$qq2 = $m->where('id=1')->getField('qq2');
			$this->assign('qq1',$qq1);
			$this->assign('qq2',$qq2);
			$this->display();
    }
	public function showNews(){
			$this->display("news_allContent");
    }
}
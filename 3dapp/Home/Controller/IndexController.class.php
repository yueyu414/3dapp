<?php
namespace Home\Controller;
use Think\Controller;
use Think\Db;
use Home\Model\IndexModel;
class IndexController extends Controller {
	protected $p_ac;
	public function _initialize(){
		
		header("Content-Type:text/html; charset=utf-8");
        $this->p_ac = A('Public');
		$this->p_ac->head();
		$this->p_ac->foot();
	}
    public function index(){
		$dao=1;
		$this->assign('dao',$dao);
		
		$result=new IndexModel();
        $fanhui=$result->indexshow();
		
		$this->assign('list',$fanhui);
		$this->display();

	}
	
	public function StatementOfOriginality(){
		$dao=2;
		$this->assign('dao',$dao);
		
		$result=new IndexModel();
        $fanhui=$result->stateshow();
		
		$this->assign('list',$fanhui);
		
		$this->display();
	}
	
	
	
	public function createindex(){
		
		$result=new IndexModel();
        $fanhui=$result->createindex();
		
		if($fanhui>=0){
			
			$this->success('建表index成功','index');
		}else{
			$this->error('建表index失败');
		}
	   
	}
	
	public function addindex(){
		
		$result=new IndexModel();
        $fanhui=$result->addindex();
		
		if($fanhui>=0){
			
			$this->success('插入index成功','index');
		}else{
			$this->error('插入index失败');
		}
		
	}
	
	public function dropindex(){
		
		$result=new IndexModel();
        $fanhui=$result->dropindex();
		
		if($fanhui>=0){
			
			$this->success('删除index成功','index');
		}else{
			$this->error('删除index失败');
		}
		
	}
		
	
	
	public function createstate(){
		
		$result=new IndexModel();
        $fanhui=$result->createstate();
		
		if($fanhui>=0){
			
			$this->success('建表Statement Of Originality成功','index');
		}else{
			$this->error('建表Statement Of Originality失败');
		}
	}
	public function addstate(){
		
		$result=new IndexModel();
        $fanhui=$result->addstate();
		
		if($fanhui>=0){
			
			$this->success('插入Statement Of Originality成功','index');
		}else{
			$this->error('插入Statement Of Originality失败');
		}
	}
	
	public function dropstate(){
		
		$result=new IndexModel();
        $fanhui=$result->dropstate();
		
		if($fanhui>=0){
			
			$this->success('删除state成功','index');
		}else{
			$this->error('删除state失败');
		}
		
	}
	
	
	public function models(){
		$dao=3;
		$this->assign('dao',$dao);
		
		$result=new IndexModel();
        $fanhui=$result->modelshow();
		
		$this->assign('list',$fanhui);
		
		$this->display();
		
	}
	
	public function createmodels(){
		
		$result=new IndexModel();
        $fanhui=$result->createmodels();
		
		if($fanhui>=0){
			
			$this->success('建表models成功','index');
		}else{
			$this->error('建表moldes失败');
		}
		
	}
	public function addmodels(){
		
		$result=new IndexModel();
        $fanhui=$result->addmodels();
		
		if($fanhui>=0){
			
			$this->success('插入models成功','index');
		}else{
			$this->error('插入models失败');
		}
	}
	
	public function dropmodels(){
		
		$result=new IndexModel();
        $fanhui=$result->dropmodels();
		
		if($fanhui>=0){
			
			$this->success('删除models成功','index');
		}else{
			$this->error('删除modles失败');
		}
		
	}
	
	public function modelshow11(){
		$id=$_GET['id'];
		$result=new IndexModel();
        $fanhui=$result->modelshow1($id);
		
		return $this->ajaxReturn($fanhui,'JSON');
		
	}
}
<?php
namespace Home\Controller;
use Think\Controller;
class ManagerController extends Controller {
	public function managerLogin(){
		$this->display();
	}

	public function managerLoginTest(){
		$username = I('username');
		$password = I('password');

		if($username == 'admin2015' && $password == '2015..axcs'){
			session('manager','right');
			echo 1;
		}
		else{
			echo '输入帐号密码有误';
		}
	}


	public function havepass(){
		$session = session('manager');
    	if($session != NULL){
	  		$goods = M('goods');
	        $p = I('p',1,int);
	        $limit = 8;//每页数据
	        $list = $goods->distinct(true)->table(array('sduw_goods'=>'g','sduw_user'=>'u'))->field('g.goodsId,g.goodsTitle,g.goodsDes,g.goodsOwner,g.goodsSavename,u.username,u.phone')->where("g.goodsOwner=u.username and goodsCheck = '1'")->page("$p,$limit")->select();//表的连接查询
	        foreach($list as $key=>$val)
	        {
	            $list[$key]['goodsdes'] = htmlspecialchars_decode($val['goodsdes']);
	            $list[$key]['goodsdes'] = str_replace("\\\"", '"', $list[$key]['goodsdes']);
	            $list[$key]['goodsdes'] = str_replace("\\'", "'", $list[$key]['goodsdes']);
	        }
	        //$list = $goods->order('goodsTime')->where("goodsCheck = '0'")->page("$p,$limit")->select();
	        $count = $goods->where("goodsCheck = '0'")->count();
	        $Page = new \Think\Page($count,$limit);
	        $show = $Page->show();
	        $this->assign('page',$show);
	        $this->assign('list',$list);
	        $this->display();
    	}else{
    		$this->redirect('/Home/Manager/managerLogin','',3,'请先登陆!3秒自动跳转');
    	}
	}

    public function manager(){
    	$session = session('manager');
    	if($session != NULL){
	  		$goods = M('goods');
	        $p = I('p',1,int);
	        $limit = 8;//每页数据
	        $list = $goods->distinct(true)->table(array('sduw_goods'=>'g','sduw_user'=>'u'))->field('g.goodsId,g.goodsTitle,g.goodsDes,g.goodsOwner,g.goodsSavename,u.username,u.phone')->where("g.goodsOwner=u.username and goodsCheck = '0'")->page("$p,$limit")->select();//表的连接查询

	        foreach($list as $key=>$val)
	        {
	            $list[$key]['goodsdes'] = htmlspecialchars_decode($val['goodsdes']);
	            $list[$key]['goodsdes'] = str_replace("\\\"", '"', $list[$key]['goodsdes']);
	            $list[$key]['goodsdes'] = str_replace("\\'", "'", $list[$key]['goodsdes']);
	        }

	        //$list = $goods->order('goodsTime')->where("goodsCheck = '0'")->page("$p,$limit")->select();
	        $count = $goods->where("goodsCheck = '0'")->count();
	        $Page = new \Think\Page($count,$limit);
	        $show = $Page->show();
	        $this->assign('page',$show);
	        $this->assign('list',$list);
	        $this->display();
    	}else{
    		$this->redirect('/Home/Manager/managerLogin','',3,'请先登陆!3秒自动跳转');
    	}
    }

    public function pass(){
    	$goodsId = I('id');
    	$goodsPrice = I('goodsPrice');
    	$goods = M('goods');
    	$data['goodsCheck'] = 1;
    	$data['goodsPrice'] = $goodsPrice;
    	$goods -> where("goodsId ='$goodsId'")->save($data);
    	$this->redirect('Home/Manager/manager');
    }

    public function pass_delete(){
    	$goodsId = I('id');
    	$goods = M('goods');
    	$data = $goods -> where("goodsId ='$goodsId'")->find();
    	$goodsImgPath = $data['goodssavename'];
    	unlink('Public/GoodsImgs/'.$goodsImgPath);//删除图片
    	$goods -> where("goodsId ='$goodsId'")->delete();
    	$this->redirect('Home/Manager/havepass');
    }

    public function delete(){
    	$goodsId = I('id');
    	$goods = M('goods');
    	$data = $goods -> where("goodsId ='$goodsId'")->find();
    	$goodsImgPath = $data['goodssavename'];
    	unlink('Public/GoodsImgs/'.$goodsImgPath);//删除图片
    	$goods -> where("goodsId ='$goodsId'")->delete();
    	$this->redirect('Home/Manager/manager');
    	//$this->redirect('Home/Manager/manager');
    }

}
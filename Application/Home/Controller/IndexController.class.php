<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$cookie = cookie('username');
    	$session = session('username');
        $goods = M('goods');
        $list = $goods->distinct(true)->order('rand()')->limit(12)->where("goodsCheck = '1'")->select();
        foreach($list as $key=>$val)
        {
            $list[$key]['goodsdes'] = htmlspecialchars_decode($val['goodsdes']);
            $list[$key]['goodsdes'] = str_replace("\\\"", '"', $list[$key]['goodsdes']);
            $list[$key]['goodsdes'] = str_replace("\\'", "'", $list[$key]['goodsdes']);
        }

        $this->assign('list',$list);
    	if($cookie!=NULL){
    		$this->assign('username',$cookie);
    		$this->display('./Application/Home/View/Index/userIndex.html');
    	}else if($session != NULL){
    		$this->assign('username',$session);
    		$this->display('./Application/Home/View/Index/userIndex.html');
    	}else{
    		$this->display();
    	}
    }

    public function goodsList(){
        $cookie = cookie('username');
        $session = session('username');
        $goods = M('goods');
        $p = I('p',1,int);
        $limit = 8;//每页数据
        $list = $goods->order('goodsTime')->where("goodsCheck = '1'")->page("$p,$limit")->select();
        foreach($list as $key=>$val)
        {
            $list[$key]['goodsdes'] = htmlspecialchars_decode($val['goodsdes']);
            $list[$key]['goodsdes'] = str_replace("\\\"", '"', $list[$key]['goodsdes']);
            $list[$key]['goodsdes'] = str_replace("\\'", "'", $list[$key]['goodsdes']);
        }

        $count = $goods->where("goodsCheck = '1'")->count();
        $Page = new \Think\Page($count,$limit);
        $show = $Page->show();
        $this->assign('page',$show);
        $this->assign('list',$list);
        if($cookie!=NULL){
            $this->assign('username',$cookie);
            $this->display('./Application/Home/View/Index/userGoodsList.html');
        }else if($session != NULL){
            $this->assign('username',$session);
            $this->display('./Application/Home/View/Index/userGoodsList.html');
        }else{
            $this->display();
        }

    }

}
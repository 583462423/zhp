<?php
namespace Home\Controller;
use Think\Controller;
class DesController extends Controller {
    public function des(){
    	$id = I('id');
        $goods = M('goods');
    
        $list = $goods->distinct(true)->table(array('sduw_goods'=>'g','sduw_user'=>'u'))->field('g.goodsId,g.goodsTitle,g.goodsDes,g.goodsOwner,g.goodsSavename,u.username,u.phone')->where("g.goodsOwner=u.username and goodsId= {$id}")->find();

    	$list['goodsdes'] = htmlspecialchars_decode($list['goodsdes']);
    	$list['goodsdes'] = str_replace("\\\"", '"', $list['goodsdes']);
    	$list['goodsdes'] = str_replace("\\'", "'", $list['goodsdes']);

        $this->assign('list',$list);
        $this->display();
    }
}

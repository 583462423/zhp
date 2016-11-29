<?php
namespace Home\Controller;
use Think\Controller;
class DonateController extends Controller {
    public function donate(){
        $cookie = cookie('username');
        $session = session('username');
        if($session != NULL){
            $this->assign('username',$session);
            $this->display();
        }else if($cookie != NULL){
            $this->assign('username',$cookie);
            $this->display();	
        }else{
            $this->redirect('/Home/Login/login','',3,'请先登陆!3秒自动跳转');
        }
    }
    public function upload(){
    	$cookie = cookie('username');
        $session = session('username');
    	$upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     3145728 ;// 设置附件上传大小
	    $upload->exts      =     array('jpg', 'png', 'jpeg', 'gif');// 设置附件上传类型
	    $upload->rootPath  =     'Public/GoodsImgs/'; // 设置附件上传根目录
	    $upload->savePath  =     ''; // 设置附件上传（子）目录
	    $upload->autoSub = false;	//自动使用子目录保存上传文件 默认为true
	    $upload->hash = false;   //是否生成文件的hash编码 默认为true
	    // 上传文件
	    $info   =   $upload->uploadOne($_FILES['goodsImg']);
	    if(!$info) {// 上传错误提示错误信息
	        $this->error($upload->getError());
	    }else{// 上传成功
	        
	       	$goods = M('goods');
	       	$data['goodsTitle'] = I('goodsTitle');
	       	$data['goodsDes'] = I('goodsDes');
	       	$data['goodsSavename'] = $info['savename'];
	       	$data['goodsCheck'] = 0;
	       	$data['goodsTime'] = date('Y-m-d H:i:s');
	       	if($session != NULL){
	       		$data['goodsOwner'] = $session;
	       	}else if($cookie != NULL){
	       		$data['goodsOwner'] = $cookie;
	       	}
	       	$goods -> add($data);
	       	$this->success('上传成功！');
    	}
    }
}
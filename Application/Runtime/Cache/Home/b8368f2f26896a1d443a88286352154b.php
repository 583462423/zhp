<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	<title></title>
	<link href="/Public/Css/bootstrap.min.css" rel="stylesheet">
 	<link href="/Public/Css/base.css" rel="stylesheet">
	<link href="/Public/Css/bootstrapValidator.css" rel="stylesheet">







	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>


<div class="modal fade" id="mydialog">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
			<h4 class="modal-title'">关于杂货铺</h4>
		</div>
		<div class="modal-body">
			<p>
			杂货铺是山东大学（威海）大二的一个科研团队为方便学生们二手购物所创建的一个免费平台，希望大家多多支持。
			</p>
		</div>
		<div class="modal-footer">
			<button class="btn btn-primary">保存</button>
			<button class="btn btn-primary" data-dismiss="modal">关闭</button>
		</div>
		</div>
	</div>
</div>
<!--MODAL end-->



<!--导航栏-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-nav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">杂货铺</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="header-nav">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo U('/');?>">主页 <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">浏览 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">标题1</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">标题二</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">标题三</a></li>
          </ul>
        </li>
        <li><a href="<?php echo U('Home/Donate/donate');?>">物品上传</a></li>
        <li><a href="#" data-toggle="modal" data-target="#mydialog">简介</a></li>
      </ul>

       <ul class="nav navbar-nav right-nav">
        <li><a href="#"><?php echo ($username); ?></a></li>
        <li><a href="<?php echo U('Home/Login/quit');?>">退出</a></li>
        <li ><a class="loginimg-par" href="#"><img class="img-circle login-img" src="/Public/Img/img2.jpg"/></a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>








	<div class="container" style="margin-top:50px;">
		<div class="row">
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3" style="text-align: center;margin-top:20px;">
					<div style="border:1px solid #ccc;padding:10px 0">
							<img class="img-thumbnail" src="/Public/GoodsImgs/<?php echo ($vo["goodssavename"]); ?>" style="width:200px;height:200px">
							<h2 style="height:60px"><?php echo ($vo["goodstitle"]); ?></h2>
							<div style="height:100px;border:1px solid #ccc;border-right: none;border-left: none;overflow: hidden"><?php echo ($vo["goodsdes"]); ?></div>
							<div class="input-group cost col-xs-offset-1 col-xs-10">
							  <span class="input-group-addon">价格</span>
							  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="<?php echo ($vo["goodsprice"]); ?>" readonly>
							  <span class="input-group-addon">￥</span>
							</div>

							<div class="input-group cost col-xs-offset-1 col-xs-10" style="margin-top:10px">
								<a class="btn btn-primary col-xs-3" href="<?php echo U('Home/Des/des');?>?id=<?php echo ($vo["goodsid"]); ?>">详情</a>
								<a class="btn btn-success col-xs-offset-6 col-xs-3">购买</a>
							</div>
					</div>
				</div><?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
			<div style="clear:both;text-align: center;position: relative;top:30px"><?php echo ($page); ?></div>
		</div>
	</div>


<footer class="container footer">
	<hr>
	<p class="pull-right"><a href="#top">回到顶部</a></p>
	<p >©2015杂货铺| 山东大学(威海) | <a href="<?php echo U('Home/Manager/managerLogin');?>" style="color:#333333">管理员入口</a></p>
	<br><br>
</footer>


	<script type="text/javascript" src="/Public/Js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/Js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/Public/Js/base.js"></script>
	<script type="text/javascript" src="/Public/Js/bootstrapValidator.js"></script>
	<script src="/Public/Js/bstraplang/zh_CN.js"></script>

	<!-- <script src="assets/js/jquery-1.8.2.min.js"></script> -->
	
</body>
</html>
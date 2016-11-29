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

	<!--MODAL-->
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


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


				<form class="form-horizontal login_form" id="loginForm" role="form" action="<?php echo U('Home/Manager/managerLoginTest');?>" style="margin-top:50px">

							  <div class="form-group">
							    <label for="inputEmail3" class="col-xs-2 control-label">帐号</label>
							    <div class="col-xs-9">
							      <input type="text" class="form-control " placeholder="请输入管理员帐号" name="username" />
							    </div>
							  </div>

							  <div class="form-group">
							    <label for="inputPassword3" class="col-xs-2 control-label">密码</label>
							    <div class="col-xs-9">
							      <input type="password" class="form-control password" placeholder="请输入管理员密码" name="password" />
							    </div>
							  </div>


							  <div class="form-group">
							    <div class="col-xs-offset-2	 col-xs-9 loginbtn">
							      <button type="submit" class="btn btn-default">登陆</button>
							    </div>
							  </div>

							</form>

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
	
	<script type="text/javascript">
			$(document).ready(function() {
			    $('#loginForm')
			        .bootstrapValidator({
                        live:'disabled',  
			            message: 'This value is not valid',
			            feedbackIcons: {
			                valid: 'glyphicon glyphicon-ok',
			                invalid: 'glyphicon glyphicon-remove',
			                validating: 'glyphicon glyphicon-refresh'
			            },
			            fields: {
			                username: {
			                    message: 'The username is not valid',
                                threshold: 6,
			                    validators: {
			                        notEmpty: {
			                            message: '帐号不能为空'
			                        },
			                        stringLength: {
			                            min: 6,
			                            max: 16,
			                            message: '请输入正确帐号'
			                        },
			                        /*remote: {
			                            url: 'remote.php',
			                            message: 'The username is not available'
			                        },*/
			                        regexp: {
			                            regexp: /^[a-zA-Z0-9_]+$/,
			                            message: '请输入正确帐号'
			                        }
			                    }
			                },
			                password: {
			                    validators: {
			                        notEmpty: {
			                            message: '密码不能为空'
			                        }
			                    }
			                }

			            }
			        })
                    .on('success.form.bv', function(e) {
                        // Prevent form submission
                        e.preventDefault();

                        // Get the form instance
                        var $form = $(e.target);
                        // Get the BootstrapValidator instance
                        var bv = $form.data('bootstrapValidator');
                        // Use Ajax to submit form data

                        $.post($form.attr('action'), $form.serialize(), function(result) {
                            if(result == 1){
                                window.location.href="/Home/Manager/manager";
                            }
                            else{
                                alert(result);
                                $('.password').val('');
                            }
                        });
                    });


			});
	</script>

</body>
</html>
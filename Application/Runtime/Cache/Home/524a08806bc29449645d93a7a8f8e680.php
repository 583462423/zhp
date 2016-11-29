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
			<h4 class="modal-title'">关于爱心超市</h4>
		</div>
		<div class="modal-body">
			<p>
			爱心超市是2014年，山东大学（威海）学生会所创办的用于爱心捐助的慈善....编不下去了。
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
      <a class="navbar-brand" href="#">爱心超市</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="header-nav">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo U('/');?>">主页 <span class="sr-only">(current)</span></a></li>
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
        <li><a href="<?php echo U('Home/Donate/donate');?>">爱心捐助</a></li>
        <li><a href="#" data-toggle="modal" data-target="#mydialog">简介</a></li>
      </ul>

       <ul class="nav navbar-nav right-nav">
        <li><a href="<?php echo U('Home/Login/login');?>">登陆</a></li>
        <li class="active"><a href="<?php echo U('Home/Login/register');?>">注册</a></li>
        <li ><a class="loginimg-par" href="#"><img class="img-circle login-img" src="/Public/Img/img2.jpg"/></a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>





	
		<div class="mainbody row">

			<div class="register_box img-rounded col-md-offset-4 col-md-4">
				<form class="form-horizontal register_form" id="registerForm" role="form" action="<?php echo U('Home/Login/subRegister');?>">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-xs-3 control-label" >帐号</label>
				    <div class="col-xs-7">
				      <input type="text" class="form-control" id="inputEmail3" placeholder="请输入您的帐号" name="username" />
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-xs-3 control-label">密码</label>
				    <div class="col-xs-7">
				      <input type="password" class="form-control" id="inputPassword3" placeholder="请输入您的密码" name="password" />
				    </div>
				  </div>

				   <div class="form-group">
				    <label for="inputPassword3" class="col-xs-3 control-label" >再输一遍</label>
				    <div class="col-xs-7">
				      <input type="password" class="form-control" id="inputPassword3" placeholder="请输入您的密码" name="password2" />
				    </div>
				  </div>
					
				  <div class="form-group">
				    <label for="inputPassword3" class="col-xs-3 control-label" >手机号</label>
				    <div class="col-xs-7">
				      <input type="text" class="form-control" id="inputPassword3" placeholder="请输入您的手机号" name="phoneNumber">
				    </div>
				  </div>


				  <div class="form-group">
				    <div class="col-xs-offset-3 col-xs-7 loginbtn">
				      <button type="submit" class="btn btn-default">注册</button>
				      <a href="<?php echo U('Home/Login/login');?>"class="btn btn-link">已有帐号?登陆</a>
				    </div>
				  </div>
				</form>
			</div>




	</div>




<footer class="container footer">
	<hr>
	<p class="pull-right"><a href="#top">回到顶部</a></p>
	<p >©2015爱心超市 | <a href="<?php echo U('Home/Manager/managerLogin');?>" style="color:#333333">管理员入口</a></p>
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
	      $('#registerForm')
	        .bootstrapValidator({
	        	live:'disabled', 
	            message: 'message',
	            feedbackIcons: {
	                valid: 'glyphicon glyphicon-ok',
	                invalid: 'glyphicon glyphicon-remove',
	                validating: 'glyphicon glyphicon-refresh'
	            },
	            fields: {
	                username: {
	                    message: 'usernamemessage',
	                    validators: {
	                        notEmpty: {
	                            message: '帐号不能为空'
	                        },
	                        stringLength: {
	                            min: 6,
	                            max: 16,
	                            message: '帐号长度必须为6~16位'
	                        },
	                        /*remote: {
	                            url: 'remote.php',
	                            message: 'The username is not available'
	                        },*/
	                        regexp: {
	                            regexp: /^[a-zA-Z0-9_]+$/,
	                            message: '帐号必须为字母数字或下划线'
	                        }
	                    }
	                },
	                password: {

	                    validators: {
	                        notEmpty: {
	                            message: '密码不能为空'
	                        },
	                        identical: {
		                        field: 'password2',
		                        message: '两次密码不一致'
	                    	},
	                    }
	                },
	                password2:{
	                	validators:{
	                		notEmpty:{},
	                		identical: {
		                        field: 'password',
		                        message: '两次密码不一致'
	                    		},
	                	}
	                },
	                phoneNumber: {
		                validators: {
		                    notEmpty: {},
		                    digits: {},
		                    regexp:{
		                    	regexp: /^[0-9]{11}$/,
		                    	message:'手机号必须为11位'
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
                        alert(result);
                    });
            });

	    });
    </script>

</body>
</html>
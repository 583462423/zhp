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
	
    <link rel="stylesheet" href="/Public/Editor/themes/default/default.css" />
    <link rel="stylesheet" href="/Public/Editor/plugins/code/prettify.css" />







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
        <li ><a href="<?php echo U('/');?>">主页 <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">浏览 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">商品</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">所有商品</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">待测模块</a></li>
          </ul>
        </li>
        <li class="active"><a href="<?php echo U('Home/Donate/donate');?>">物品上传</a></li>
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









 
    <div class="row donate_mainbody" >

        <div class="login_box img-rounded col-md-offset-4 col-md-4 ">
          <form class="form-horizontal login_form" id="donateForm" enctype="multipart/form-data" role="form" method="post" action="<?php echo U('Home/Donate/upload');?>">
            <div class="form-group">
              <label  class="col-xs-2 control-label">图片上传</label>
              <input id="lefile" class="col-xs-2" type="file" name="goodsImg" style="display:none">
              <div class="input-append col-xs-10">
                <input id="photoCover" class="input-large" type="text" style="height:33px;border-radius:3px;margin-right: -10px;" placeholder="   仅支持JPG格式"  readonly>
                <a class="btn btn-default" style="margin-left:0px;"onclick="$('input[id=lefile]').click();">选择文件</a>
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword3" class="col-xs-2 control-label">商品名称</label>
              <div class="col-xs-6">
                <input type="text" class="form-control password" placeholder="12个字以内" name="goodsTitle" style="padding-left:11px"/>
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword3" class="col-xs-2 control-label">商品简述</label>
              <div class="col-xs-10">
                <textarea id="editor_id" class="form-control gooddes" rows="3" placeholder="1000字以内,友情提示：请在word或者txt文档中编写好的复制到此处~" name="goodsDes" style=""></textarea>
              </div>
            </div>


            <div class="form-group">
              <div class="col-xs-offset-2 col-xs-10 loginbtn">
                <button type="submit" class="btn btn-default" >上传</button>
              </div>
            </div>
          </form>
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
	
<script charset="utf-8" src="/Public/Editor/kindeditor.js"></script>
<script charset="utf-8" src="/Public/Editor/lang/zh_CN.js"></script>
<script charset="utf-8" src="/Public/Editor/plugins/code/prettify.js"></script>

<script type="text/javascript">  

 KindEditor.ready(function(K) {
                var editor = K.create('#editor_id',{
                  cssPath : '/Public/Editor/plugins/code/prettify.css',
                  width:"100%",
                  height:'200px',
                  items:[
                      'preview', 
                      'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
                      'justifyfull',   'indent', 'outdent', 
                      '|', 'fullscreen', 'image', 'multiimage','/',
                      'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
                      'italic', 'underline',  'lineheight',  '|',  
                     'hr', 'emoticons', 'baidumap'
                      ]
                });
                prettyPrint();
        });
  $(document).ready(function(){
     //begin
     $('input[id=lefile]').change(function() {  
        $('#photoCover').val($(this).val()); 
      });  
    $('#donateForm').bootstrapValidator({
            live:'disabled',  
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                      goodsTitle: {
                          message: '非法名称',
                          validators: {
                              notEmpty: {
                                  message: '商品名称不能为空'
                              },
                              stringLength: {
                                  max: 12,
                                  message:'名称限制在12字之内'
                              }
                          }
                      },
                      goodsDes: {
                          validators: {
                              notEmpty: {
                                  message: '不能为空'
                              },
                              stringLength:{
                                max:1000,
                                message:'亲,您已经超过了1000字~稍微留点情吧^_^'
                              }
                          }
                      }

                  }
    });


      //end
  });
  
</script>  

</body>
</html>
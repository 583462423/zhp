<?php

include_once("Config.php");

/*
*====================================================================
*
*			Www.YunQiPay.Com
 *
 *     		本页面为支付完成后获取返回的参数及处理......
 *
 *====================================================================
*/

//开始接收参数 (请注意区分大小写)trim($_GET[tradeno]);
//-----------------------------------------------------------------
$tradeno	    =	trim($_GET[tradeno]);                 //支付宝交易号
$price		    =	trim($_GET[price]);	              //付款金额
$boby		    =	trim(urldecode($_GET[boby]));	              //付款说明，一般是网站订单号或者充值用户名
$memo		    =	trim(urldecode($_GET[memo]));		      //备注
$seller             =   trim($_GET[seller]);		      //收款支付宝账号
$kuid               =   trim($_GET[kuid]);		      //收款支付宝账号
$keys               =   trim($_GET[key]);		      //收款支付宝账号
//-----------------------------------------------------------------

if (strtoupper($UserKey) != strtoupper($keys)){
		echo "Fail";
	}else{


			
			//验证成功，在此处写入自动发货代码
			
			echo "Success";				//此处返回值（Success）不能修改，当检测到此字符串时，就表示充值成功
			
			

		
		
				

	}
?>

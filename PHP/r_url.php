<?php

include_once("Config.php");

/*
*====================================================================
*
*			Www.YunQiPay.Com
 *
 *     		��ҳ��Ϊ֧����ɺ��ȡ���صĲ���������......
 *
 *====================================================================
*/

//��ʼ���ղ��� (��ע�����ִ�Сд)trim($_GET[tradeno]);
//-----------------------------------------------------------------
$tradeno	    =	trim($_GET[tradeno]);                 //֧�������׺�
$price		    =	trim($_GET[price]);	              //������
$boby		    =	trim(urldecode($_GET[boby]));	              //����˵����һ������վ�����Ż��߳�ֵ�û���
$memo		    =	trim(urldecode($_GET[memo]));		      //��ע
$seller             =   trim($_GET[seller]);		      //�տ�֧�����˺�
$kuid               =   trim($_GET[kuid]);		      //�տ�֧�����˺�
$keys               =   trim($_GET[key]);		      //�տ�֧�����˺�
//-----------------------------------------------------------------

if (strtoupper($UserKey) != strtoupper($keys)){
		echo "Fail";
	}else{


			
			//��֤�ɹ����ڴ˴�д���Զ���������
			
			echo "Success";				//�˴�����ֵ��Success�������޸ģ�����⵽���ַ���ʱ���ͱ�ʾ��ֵ�ɹ�
			
			

		
		
				

	}
?>
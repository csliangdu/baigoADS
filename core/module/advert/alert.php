<?php
/*-----------------------------------------------------------------
！！！！警告！！！！
以下为系统文件，请勿修改
-----------------------------------------------------------------*/

//不能非法包含或直接执行
if(!defined("IN_BAIGO")) {
	exit("Access Denied");
}

include_once(BG_PATH_FUNC . "include.func.php");
fn_include(true);

include_once(BG_PATH_CONTROL . "advert/alert.class.php"); //载入应用控制器

$ctl_alert = new CONTROL_ALERT(); //初始化应用

switch ($GLOBALS["act_get"]) {
	default:
		$ctl_alert->ctl_show();
	break;
}
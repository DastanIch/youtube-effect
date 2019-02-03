<?php
include_once "emaqs.php"; 
if($_GET['test'] == 1){
	echo '<pre>';
	print_r($_SESSION['token']);
	echo '</pre>';
}
if(isset($_REQUEST['sended_post']) && !empty($_REQUEST['sended_post'])){
    $return = array();
	$arError = array();
	$needed = array('name','email','subject','message');
	$arRequest = array(); 
	$saveFolder = '/var/www/landing.aiscan.live/form-data/';
	$log = '/var/www/landing.aiscan.live/form-data/log.txt';
	foreach ($needed as $key => $value) {
		if(empty($_REQUEST[$value])){
			$arError[$value] = 'empty';
		}
		else{
			if($value == 'email'){
				if(!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
				    $arError[$value] = 'not_valid';
				}
			}
			$arRequest[$value] = $_REQUEST[$value];
		}
	}
	if(empty($arError)){
		Emaqs::generate(126, 'Запрос с airscan.live');
		Emaqs::addEmails('denis@aviasoft.us; im@denni.me; dstnsmail@gmail.com; info@adexpert.kz');
		// Emaqs::addEmails('dstnsmail@gmail.com');
		Emaqs::addReplace(
			array(
				'{%airscan_theme%}' => $arRequest['subject'],
				'{%airscan_text%}' => $arRequest['message'],
				'{%airscan_author%}' => $arRequest['name'],
				'{%airscan_email%}' => $arRequest['email']
			)
		);
		Emaqs::send();
		// save message
		$nameFile = $saveFolder.$arRequest['email'].'_'.date('Y-m-d H:i:s').'.json';
		$fp = fopen($nameFile, 'w');
		fwrite($fp, json_encode($arRequest));
		fclose($fp);
		//log
		$dataLog = iconv("utf-8", "windows-1251", date('Y-m-d H:i:s').': отправлено с почты '.$arRequest['email']);
        file_put_contents($log, $dataLog."\n", FILE_APPEND | LOCK_EX);
		$return['message'] = 'success';	
	} 
	else{
		$return['message'] = 'false';		
	}
	echo json_encode($return);
}
if(empty($_REQUEST)){
	header('Location: //');
}
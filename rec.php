<?php require_once($_SERVER["DOCUMENT_ROOT"].'/bitrix/modules/main/include/prolog_before.php');

$CUser = new CUser();
$email = 'Адрес почты';
$login = 'ЛОГИН';
$pass = 'ПАРОЛЬ';

$save = array(
	'LOGIN'=>$login,
	'PASSWORD'=>$pass,
	'CONFIRM_PASSWORD'=>$pass,
	'EMAIL'=>$email,
	'GROUP_ID'=>array(1),
	'ACTIVE' => 'Y'
);

$result = $CUser->Update(1, $save);

if(!$result){
	echo $CUser->LAST_ERROR;
} else {
	echo 'OK';
}

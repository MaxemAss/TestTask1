<?php
	$name=htmlspecialchars($_POST['name']);
	$subname=htmlspecialchars($_POST['subname']);
	$email=htmlspecialchars($_POST['email']);
	$password=htmlspecialchars($_POST['password']);

	$user_log="Имя: $name\nФамилия: $subname\nE-mail: $email\nПароль: $password\n";
	$subject="Новый пользователь";
	$headers="From: $email\r\nReply-to: $email\r\nContent-type: text\html; charset=utf-8\r\n";
	$users_base = array(
		array('name' => 'name1','subname'=>'subname1','email'=>'email1@mail.ru' ,'password'=>'123'),
		array('name' => 'name2','subname'=>'subname2','email'=>'email2@mail.ru' ,'password'=>'123'),
		array('name' => 'name3','subname'=>'subname3','email'=>'email3@mail.ru' ,'password'=>'123'),
		array('name' => 'name4','subname'=>'subname4','email'=>'email4@mail.ru' ,'password'=>'123'),
		array('name' => 'name5','subname'=>'subname5','email'=>'email5@mail.ru' ,'password'=>'123'), 
		);
	for ($i=0; $i <count($users_base) ; $i++) { 
		if($users_base[$i]['email']==$email){
			$user_exist=1;
		} else{
			$user_exist=0;
		}
	}
	$file = 'C:\OpenServer\OSPanel\domains\Site\test_results.txt';
	$fOpen = fopen($file,'a');
	if($user_exist==1)
			fwrite($fOpen, "Пользователь с e-mail:$email уже существует\n");
		else
			fwrite($fOpen, "Новый пользователь с e-mail:$email\n");
	fclose($fOpen);
	if($user_exist==0)
		if (mail("vakakak20@gmail.com",$subject,$user_log,$headers))
			echo "Форма успешно отправлена";
		else 
			echo "Форма не отправлена";
	else echo "Пользователь с таким e-mail уже существует";

?>
<meta charset="utf-8">
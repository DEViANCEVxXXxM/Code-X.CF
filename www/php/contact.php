<?php 
// Проверка введения данных 
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['email'])&&$_POST['email']!="")&&(isset($_POST['subject'])&&$_POST['subject']!="")&&(isset($_POST['message'])&&$_POST['message']!="")){
        $name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
        $message =  $_POST['message'];
        // $to - кому отправляем 
        $to = 'admin@code-x.cf'; 
        // $from - от кого 
        $from = 'admin@code-x.cf'; 
		// $msg - Текcт сообщения
		$msg ='
            Name: '.$_POST['name'].'
            E-mail: '.$_POST['email'].'
			Message: '.$_POST['message'].'
			';
			mail($to, $subject, $msg, 'From:'.$from); 
			echo "Cообщение успешно отправлено.";
} else echo 'Error';
?>
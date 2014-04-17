
<?php

define('TO','andrapo04@gmail.com');
$referer=trim($_SERVER['HTTP_REFERER']);
header('Content-Type: text/html; charset=utf8');
/*header("Location:$referer");*/
define('SUBJECT', $_POST['subject']);
/*echo 'Su mensaje ha sido enviado';*/
$title="Formulario";
function sendEmail($to, $from, $subj, $body, $title)
{
	$date = date( 'r' );
	$phpversion = phpversion();
	$boundary = md5( time() );
	$headers = "From: $from\n"."Date: $date\n"."Content-Type: text/html; charset=\"UTF-8\"\n";
	mail(trim($to), trim($subj), $body, $header, $title );
}
sendEmail(TO, trim($_POST['email']), SUBJECT, $_POST['nombre'].'E-Mail de: '.$_POST['correo'].' Mensaje: '.nl2br($_POST['mensaje']));




?>


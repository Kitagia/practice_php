<?php
//session_start();
$name = htmlspecialchars(trim($_POST['name']));
$nickname = htmlspecialchars(trim($_POST['nickname']));
$email = htmlspecialchars(trim($_POST['email']));
$date_of_birth = $_POST['date_of_birth'];
$password = htmlspecialchars(trim($_POST['password']));


setcookie('name', $name, time() + 10, "/");
setcookie('nickname', $nickname, time() + 10, "/");
setcookie('email', $email, time() + 10, "/");
setcookie('date_of_birth', $date_of_birth, time() + 10, "/");
setcookie('password', $password, time() + 10, "/");

function redirect()
{
  header('Location: ../sign_up.php ');
  exit();
}


require "../blocks/connect.php";

$valid_nick = $mysql->query("SELECT * FROM `users` WHERE `nickname` = '$nickname'");
$check_nick = $valid_nick->fetch_assoc();
$valid_email = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
$check_email = $valid_email->fetch_assoc();


if ( strlen($name) < 2 ) {
  $error_message =  "Enter your name";
  setcookie('error_name', $error_message, time() + 10, "/");
  redirect();
} else {
  setcookie('error_name', $error_message, time() - 10, "/");
}
if ( strlen($nickname) < 2 ){
  $error_message = "Enter your nickname";
  setcookie('error_nickname', $error_message, time() + 10, "/");
  redirect();
} else if($check_nick!=0){
  $error_message = "Nickname must be unique";
  setcookie('error_nickname', $error_message, time() + 10, "/");
  redirect();
}else {
  setcookie('error_nickname', $error_message, time() - 10, "/");
}
if (strlen($email) < 5 || strpos($email, "@") == false) {
  $error_message = "Enter your email";
  setcookie('error_email', $error_message, time() + 10, "/");
  redirect();
} else if($check_email!=0){
  $error_message = "A user with this email address already exists";
  setcookie('error_email', $error_message, time() + 10, "/");
  redirect();
}else {
 setcookie('error_email', $error_message, time() - 10, "/");
}
if (strlen($date_of_birth) == "") {
  $error_message = "Enter your date of birth";
  setcookie('error_date_of_birth', $error_message, time() + 10, "/");
  redirect();
} else {
  setcookie('error_date_of_birth', $error_message, time() - 10, "/");
}
  if (strlen($password) < 5){
  $error_message = "Enter password";
  setcookie('error_password', $error_message, time() + 10, "/");
  redirect();
}else {
 setcookie('error_password', $error_message, time() - 10, "/");
}
$password = md5($password."qwerty1245");


// if ($mysql->connect_error) {
//   echo 'Error Number'.$mysql->connect_errno.'<br>';
//   echo 'Error '.$mysql->connect_error;
// } else {
//   echo "Connetion sucsses";
// }
$mysql->query(" INSERT INTO `users`(`name`, `nickname`, `email`, `password`, `date_of_birth`)
VALUES('$name', '$nickname', '$email', '$password', '$date_of_birth')");

$mysql->close();
setcookie('user', $nickname, time() + 3600*24, "/");

header('Location: ../index.php ');

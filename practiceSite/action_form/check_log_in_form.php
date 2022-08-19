<?php
$email = htmlspecialchars(trim($_POST['email']));
$password = htmlspecialchars(trim($_POST['password']));

setcookie('email', $email, time() + 5, "/");
setcookie('password', $password, time() + 5, "/");


$password = md5($password."qwerty1245");


require "../blocks/connect.php";

// if ($mysql->connect_error) {
//   echo 'Error Number'.$mysql->connect_errno.'<br>';
//   echo 'Error '.$mysql->connect_error;
// } else {
//   echo "Connetion sucsses";
// }

$valid = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
$user = $valid->fetch_assoc();
if(count($user) == 0){
  $error_message = "Wrong email or password";
  setcookie('error_messege', $error_message, time() + 5, "/");
  header('Location: ../log_in.php ');
  exit();
}else {
  setcookie('error_messege', $error_message, time() - 5, "/");
  setcookie('user', $user['nickname'], time() + 3600*24, "/");
}

$mysql->close();

header('Location: ../index.php');

<?php
require "../blocks/connect.php";
function relocated(){
header('Location: ../index.php');
exit();
}
function update($val){
  setcookie('update', $val, time() + 60, "/");
}
function set_message($val){
  setcookie('message', $val, time() + 5, "/");
}
function error_message($val){
  setcookie('error_message', $val, time() + 5, "/");
  relocated();
}
$button = htmlspecialchars(trim($_POST['button']));
if ($button == "Edit") {
  update(true);
  $id = htmlspecialchars(trim($_POST['m_id']));
  setcookie('id', $id, time() + 60, "/");
  $result = $mysql->query("SELECT * FROM `messages` WHERE `id` = '$id'");
    if(count($result)==1){
      $value = $result->fetch_assoc();
      $message = $value['message'];
      set_message($message);
      relocated();
  }
} else if ($button == "Update") {
  update(true);
  $message = htmlspecialchars(trim($_POST['message']));
  set_message($message);
} else if ($button == "Send") {
  update(false);
  $message = htmlspecialchars(trim($_POST['message']));
  set_message($message);
}



if($_COOKIE['user']==''){
  $error_message =  "login plese";
  error_message($error_message);
}else if ( strlen($message) < 15 ||  strlen($message) > 300) {
  $error_message =  "the length of the text should be at least 15 characters and not more than 300";
  error_message($error_message);
} else if ($button == "Send") {
  $data  = date("y.m.d");
  $nickname =$_COOKIE['user'];
  $sql = " INSERT INTO `messages`(`nickname`, `message`, `date`)
  VALUES('$nickname', '$message', '$data')";
  if (!mysqli_query($mysql, $sql)) {
    setcookie('error_message', "query_error: ".mysqli_error($mysql), time() + 5, "/");
    relocated();
  } else{
    setcookie('message', $message, time() - 5, "/");
  }
} else if ($button == "Update"){
  $id = htmlspecialchars(trim($_POST['id']));
  $sql = "UPDATE `messages` SET `message` = '$message' WHERE `id`='$id'";
  if (!mysqli_query($mysql, $sql)) {
  setcookie('error_message', "query_error: ".mysqli_error($mysql), time() + 5, "/");
  relocated();
  }else{
  update(false);
  setcookie('message', "", time() + 5, "/");
  relocated(); }


}



//  if ($mysql->connect_error) {
//   echo 'Error Number'.$mysql->connect_errno.'<br>';
//   echo 'Error '.$mysql->connect_error;
// } else {
//   echo "Connetion sucsses";
// }



$mysql->close();

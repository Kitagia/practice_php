<?php
require "blocks/connect.php";

$sql ='SELECT * FROM `messages`';
$result = mysqli_query($mysql, $sql);

$messages = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

$messages = array_reverse( $messages,true);


$mysql->close();
 ?>

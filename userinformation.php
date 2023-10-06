<?php

$connection = mysqli_connect('localhost','root');

/*if($connection){
    echo "Connection OK";
} else{
    echo "No Connetion";
}*/

mysqli_select_db($connection,"youtubedata");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinformation`(`user`,`email`,`message`) VALUES ('$user','$email','$message') ";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>
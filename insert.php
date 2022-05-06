<?php

//grab form data
print_r($_POST);

$username = $_POST['username'];
$email = $_POST['email'];
$psswrd = $_POST['psswrd'];

//login to sql
$connect = mysqli_connect('localhost:8889', 'root', 'root', 'app1users');


//insert data
$query = "INSERT INTO `userinfo`(`username`, `email`, `psswrd`) VALUES ('$username', '$email', '$psswrd')";

mysqli_query($connect, $query);


//logoff
mysqli_close($connect);

?>
<?php
$name=$_POST['name'];
$email=$_POST['email'];

$queryUser=mysqli_query($con,"SELECT * FROM `Users`");
$queryUserInfo= mysqli_fetch_all($queryUser);

?>
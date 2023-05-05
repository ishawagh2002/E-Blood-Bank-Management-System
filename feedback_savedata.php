<?php

$db_port = 3306;
$name=$_POST['fullname'];
$number=$_POST['mobileno'];
$email=$_POST['emailid'];
$like=$_POST['like'];
$improve=$_POST['improve'];
$feedback=$_POST['feedback'];


$conn=mysqli_connect("localhost","root","","blood_donation",$db_port) or die("Connection error");

$sql= "INSERT INTO feedback(feed_name,feed_number,feed_mail,feed_like,feed_improve,feed_feedback) values('{$name}','{$number}','{$email}','{$like}','{$improve}','{$feedback}')";

$result=mysqli_query($conn,$sql) or die("query unsuccessful.");

header("Location:feedback.php");

mysqli_close($conn);
 ?>

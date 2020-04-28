<?php
$con = mysqli_connect("localhost:3308", "root"); 
if($con)
{echo "Thank you. We will get back to you within 24 hours";}
else{ echo "No connection";}
mysqli_select_db($con, 'youtubeuserdata');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];
$query = "insert into userinfodata (user, email,mobile,comment)
values('$user', '$email', '$mobile', '$comment')";
mysqli_query($con,$query);
?>
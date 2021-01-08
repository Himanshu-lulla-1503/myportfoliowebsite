<?php
$con=mysqli_connect('localhost','root','','ajax');
$name=$_POST['name'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$comments=$_POST['comments'];
$q="insert into portfolio(name,email,phoneno,comments)values('$name','$email','$phoneno','$comments')";
mysqli_query($con,$q);

?>
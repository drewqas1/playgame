<?php 	
header('location:http://testgeorge/46/index.php');
$connect=mysqli_connect('127.0.0.1','root','','georgi_pn_17');
 $insert=mysqli_query($connect,"INSERT INTO plays (name,image,dolor) VALUES ('".$_POST['name']."','". $_FILES['image']['name'] ."','".$_POST['dolor']."')");
 echo "";
 move_uploaded_file($_FILES['image']['tmp_name'],$_FILES['image']['name'])

 ?>
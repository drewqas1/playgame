<?php header('location:http://testGeorge/46/index.php');
    $connect = mysqli_connect('127.0.0.1','root','','georgi_pn_17');
    $result = mysqli_query($connect, "DELETE FROM plays WHERE id = ".$_POST['george']."");

 ?>
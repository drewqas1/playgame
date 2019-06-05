<? $con = mysqli_connect('127.0.0.1', 'root', '', 'georgi_pn_17');
	
	
	if($_FILES['image']['name'] == null){
		$query = mysqli_query($con, "UPDATE plays SET name='" . $_POST['name'] . "', dolor='" . $_POST['dolor'] . "' WHERE id='" . $_POST['id'] . "'");
		header("Location: http://testgeorge/46/index.php"); 
	} else {
		$query = mysqli_query($con, "UPDATE plays SET name='" . $_POST['name'] . "', dolor='" . $_POST['dolor'] . "', image='image/" . $_FILES['image']['name'] . "' WHERE id='" . $_POST['id'] . "'");
		header("Location: http://testgeorge/46/index.php"); 
	 	move_uploaded_file($_FILES['image']['tmp_name'], 'image/' . $_FILES['image']['name']);

	}
	
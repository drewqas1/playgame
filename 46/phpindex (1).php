<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title></title>
</head>
<body>
	<? 
		$con = mysqli_connect('127.0.0.1', 'root', '', 'danya_pn_11');
		$query = mysqli_query($con, "SELECT * FROM ps4danya_games ORDER BY id DESC ");

		for($i = 0; $i < $query->num_rows; $i++){
			$result = $query->fetch_assoc(); ?>
				<div class="row">
					<p> <? echo $result['name']; ?> </p> 
					<p> <? echo $result['price']; ?> </p>
				</div>	
				<? echo '<img class="w-100 round-cicle" src="' . $result['img'] . '">'; ?>
				<form method="POST" action="delete.php">
					<? echo '<input type="hidden" name="id" value="' . $result['id'] . '">'; ?>
					<button>Удалить</button> 
				</form>	
					
				<form method="POST" action="page_update.php">
					<? echo '<input type="hidden" name="id" value="' . $result['id'] . '">'; ?>
					<? echo '<input type="hidden" name="name" value="' . $result['name'] . '">'; ?>
					<? echo '<input type="hidden" name="price" value="' . $result['price'] . '">';?>
					<button>Редактировать</button>
				</form>
					

		<? } ?>
 			
		
			
		
		
		

</body>
</html>
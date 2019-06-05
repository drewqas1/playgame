<meta charset="utf-8">
<form method="post" action="update.php" enctype="multipart/form-data">
     <? echo '<input type="hidden" name="id" value="' . $_POST['id'] . '">'; ?>
		<? echo '<input  name="name" value="' . $_POST['name'] . '">'; ?>
		<? echo '<input  name="dolor" value="' . $_POST['dolor'] . '">'; ?>
		<? echo '<input  type="file" name="image">'; ?> 
           <button type="submit">сохронить</button>
</form>
  
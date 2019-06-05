  <!DOCTYPE html>
  <html>
  <head>
      <title></title>
      <meta charset="utf-8">
  </head>
  <body>
  <div class="col-12">
        <h1>play story</h1>

 <form method="post" action="insert.php" enctype="multipart/form-data">
        <input type="" name="name">
        <input type="file" name="image">
        <input type="" name="dolor">

        <button>твитнуть</button>
      </form>
         <?php
        $connect=mysqli_connect('127.0.0.1','root','','georgi_pn_17');
        $result=mysqli_query($connect, "SELECT * FROM plays");
      
            
  for($i=0; $i<$result->num_rows;$i++){
       $res=$result->fetch_assoc();
          ?>
      
          <?php echo '<h5>'.$res["name"].'</h5>'?>
          <?php echo '<img src="'. $res["image"].'"class="w-100" >'; ?> 
          <?php echo '<h5>'.$res["dolor"].'</h5>'?>
      <form method="post" action="dellit.php">
            <?php echo '<input style = "opacity:0" name="george" value="'.$res["id"] .'">';?>
            <button>УДАЛИТЬ</button>  
      </form>
        <form method="post" action="daddadadd.php">
         <? echo '<input type="hidden" name="id" value="' . $res['id'] . '">'; ?>
          <? echo '<input type="hidden" name="name" value="' . $res['name'] . '">'; ?>
          <? echo '<input type="hidden" name="dolor" value="' . $res['dolor'] . '">';?>
          <? echo '<input  type="hidden" name="image">'; ?> 
            <button>редоктировать</button>  
      </form>
       
            <?php

        }
         ?> 
     </div>
  </body>
  </html>
  
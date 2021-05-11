<?php
include "connect.php";
 ?>
<!DOCTYPE html>


<html>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link rel="stylesheet" href="header.css">
</html>
<body>
  <?php
  include 'header.php';
  $i = $_GET['info'];
  $sql = "SELECT * FROM produse WHERE semi_nume ='$i'";
  $result = mysqli_query($connect,$sql);
  $row = $result -> fetch_assoc();
  echo '<h1 style="text-align:center;">'.$row['nume_produs'].'</h1>';
  echo '<hr>';
  echo '<img src="imagini/'.$row['nume_imagine'].'"';
?>
</body>

</html>

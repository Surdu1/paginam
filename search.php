<?php
include "connect.php";
$v1=1;
$v2=2;
$v3=3;
$v4=4;
$v5=5;
$p=0;

?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <div class="i">
  <br>
  <div class="a" id="i1" style="margin-top:12vh "><a href="electrocasnice">Electrocasnice</a></div>
  <br>
  <div class="a" id="i2"style="margin-top:12vh"><a href="echipamente_sportive">Echipamente sportive</a></div>
  <br>
  <div class="a" id="i3" style="margin-top:12vh"><a href="it">IT</a></div>
  <br>
  <div class="a" id="i4" style="margin-top:12vh"><a href="unelte">Unelte pentru constructi</a></div>
  </div>
  <?php
  include 'header.php';
   ?>
   <div class="o">
   <?php
   if(isset($_POST["cautare"])&& $_POST['cautare'] != null){
   $search = mysqli_real_escape_string($connect, $_POST["cautare"]);
   $sql = "SELECT * FROM produse WHERE nume_produs LIKE '%$search%' OR descriere LIKE '%$search%' OR semi_nume LIKE '%$search%'OR link LIKE '%$search%' OR categorie LIKE '%$search%' ";
   $result = mysqli_query($connect, $sql);
   while($row = $result->fetch_assoc()){

     $stele = $row["stele"];
   echo '<div class="card"">
     <img  src="imagini/'.$row["nume_imagine"].'" class="card-img-top" alt="...">
     <div class="card-body">
       <h5 class="card-title">'.$row["nume_produs"].'</h5>
       <i class="fas fa-star checked'.$v1.'"></i>
       <i class="fas fa-star checked'.$v2.'"></i>
       <i class="fas fa-star checked'.$v3.'"></i>
       <i class="fas fa-star checked'.$v4.'"></i>
       <i class="fas fa-star checked'.$v5.'"></i>
   '; echo '<h3 style="float:right;">'.$row["pret"].'lei</h3>';
   echo'
       <p class="card-text"></p>
       <a href="#" class="btn btn-primary">Adauga in cos</a>
       <a href="'.$row['link'].'" class="btn btn-primary">Priveste</a>
     </div>
     </div>';
     if($stele >= ($v1 - $p) ){
    echo '<style>
    .checked'.$v1.' {
      color: orange;
    }
   </style>';
   }
     if($stele >= ($v2 - $p) ){
    echo '<style>
    .checked'.$v2.' {
      color: orange;
    }
    </style>';
   }
   if($stele >= ($v3 - $p)){
    echo '<style>
    .checked'.$v3.' {
      color: orange;
    }
    </style>';
   }
   if($stele >= ($v4 - $p) ){
    echo '<style>
    .checked'.$v4.' {
      color: orange;
    }
    </style>';
   }
   if($stele >= ($v5 - $p) ){
    echo '<style>
    .checked'.$v5.' {
      color: orange;
    }
    </style>';
   }
     $v1=$v1+5;
     $v2=$v2+5;
     $v3=$v3+5;
     $v4=$v4+5;
     $v5=$v5+5;
     $p = $p+5;
   }
}
else{
  header('Location: index.php');
}
    ?>
  </div>
</body>
</html>

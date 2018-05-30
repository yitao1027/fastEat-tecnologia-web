<?php
session_start();
$content = file_get_contents("php://input");
$obj=json_decode($content,false);

if($obj[0]->{'POST'}=="ordine"){
  if(isset($_SESSION['ordine'])){
    echo json_encode($_SESSION['ordine']);
  }else {
     echo json_encode(["first"]);
  }
}else if($obj[0]->{'POST'}=="listaCarrello"){
<<<<<<< HEAD
=======
  echo "ok";
>>>>>>> 8bd1830957a199a7426e34b615fb1a3033f3e589
  $_SESSION["ordine"]=$obj;
}

?>

<?php
session_start();
$content = file_get_contents("php://input");
$obj=json_decode($content,false);

if($obj[0]->{'POST'}=="ordine"){
  if(isset($_SESSION['ordine'])){
    echo json_encode($_SESSION['ordine']);
  }else {
    echo "first";
  }
}else if($obj[0]->{'POST'}=="listaCarrello"){
  echo "ok";
  $_SESSION["ordine"]=$obj;
}

?>

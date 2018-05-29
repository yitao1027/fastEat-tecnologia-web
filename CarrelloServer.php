
<?php
session_start();
$content = file_get_contents("php://input");
$obj=json_decode($content,false);

if(isset($_GET["ordine"])){
  if(isset($_SESSION['ordine'])){
    echo json_encode($_SESSION['ordine']);
  }else {
     echo json_encode(["first"]);
  }
}else if($obj[0]->{'POST'}=="listaCarrello"){
  $_SESSION["ordine"]=$obj;
}

?>

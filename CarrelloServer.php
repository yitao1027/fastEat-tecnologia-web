
<?php
$content = file_get_contents("php://input");
$obj=json_decode($content,false);

if(isset($_GET["ordine"])){
  if(isset($_SESSION['ordine'])){
    echo json_encod($_SESSION['ordine']);
  }else {
    echo "first";
  }
}else if($obj->{'POST'}=="listaCarrello"){
  echo "ok";
  $_SESSION["ordine"]=$obj;
}

?>

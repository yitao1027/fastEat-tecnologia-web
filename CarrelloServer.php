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
  $_SESSION["ordine"]=$obj;
}else if($obj[0]->{'POST'}=="rimuovi"){
  $arr= $_SESSION["ordine"];
  $order=array_slice($arr, 1, count($arr));;

  foreach($order as $item) {
    if($item->{"piattoName"}==$obj[1]->{"piattoName"}){
      echo "articolo rimosso";
      $arr[0]->{"totale"}-=$arr[$x]->{"quantità"};
      unset($arr[$x]);
      break;
    }

  }
  $_SESSION["ordine"]=$arr;
  print_r ($_SESSION["ordine"]);
}




?>

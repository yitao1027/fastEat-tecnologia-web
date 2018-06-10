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

  $arr=$_SESSION["ordine"];
  $order=array();
  for($x=0;$x<count($arr);){
    array_push($order,$arr[$x]);
    $x++;
    if($x<count($arr) && $arr[$x]->{"piattoName"}==$obj[1]->{"piattoName"}){
      echo "articolo rimosso";
      $order[0]->{"totale"}-=$arr[$x]->{"quantità"};
      $x++;
    }
  }
  $_SESSION["ordine"]=$order;
  print_r ($_SESSION["ordine"]);
}else if($obj[0]->{'POST'}=="incrementa"){

  $arr=$_SESSION["ordine"];
  $order=array();
  for($x=0;$x<count($arr);){
    array_push($order,$arr[$x]);
    $x++;
    if($x<count($arr) && $arr[$x]->{"piattoName"}==$obj[1]->{"piattoName"}){
      $arr[$x]->{"quantità"}+=1;
      $order[0]->{"totale"}+=1;
      $x++;
    }
  }

}else if($obj[0]->{'POST'}=="decrementa"){

  $arr=$_SESSION["ordine"];
  $order=array();
  for($x=0;$x<count($arr);){
    array_push($order,$arr[$x]);
    $x++;
    if($x<count($arr) && $arr[$x]->{"piattoName"}==$obj[1]->{"piattoName"}){
      $arr[$x]->{"quantità"}-=1;
      $order[0]->{"totale"}-=1;
      if($arr[$x]->{"quantità"}==0){
      echo "rimuovi";
      $x++;
    }
  }

}

}




?>

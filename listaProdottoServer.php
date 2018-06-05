<?php
session_start();
include("db_con.php");
$content = file_get_contents("php://input");
$obj=json_decode($content,false);


if(isset($_POST["piattoName"])){
  $query ="SELECT Categoria FROM listaprodotto WHERE Categoria='".$_POST["categoria"]."'";
  $res=$conn->query($query);
  if($res->num_rows>0){
    $result = $conn->query("INSERT INTO listaprodotto (PiattoN,PiattoName,Categoria,Prezzo) VALUES ('".$_POST["piattoId"]."','".$_POST["piattoName"]."','".$_POST["categoria"]."','".$_POST["prezzo"]."')");
    if($result){
      echo "ok";
    }
  }else{
    $result = $conn->query("INSERT INTO listaprodotto (PiattoN,PiattoName,Categoria,Prezzo) VALUES ('".$_POST["piattoId"]."','".$_POST["piattoName"]."','".$_POST["categoria"]."','".$_POST["prezzo"]."')");
    if($result){
      echo "ok new categoria";
    }
  }
}else if(isset($obj->{'POST'}) && $obj->{'POST'}=="elimina"){
  $query ="DELETE FROM `listaprodotto` WHERE `PiattoN`=".$obj->{'ID'};
  $result=$conn->query($query);
  if($result){
    echo "ok";
  }else {
    echo "errore";
  }

}else if(isset($obj->{'POST'}) && $obj->{'POST'}=="upload"){

  $prezzo=str_replace("€", "", $obj->{'prezzo'});
  $query ="UPDATE `listaprodotto` SET `PiattoN`='".$obj->{'piattoId'}."',`PiattoName`='".$obj->{'piattoName'}."',`Categoria`='".$obj->{'categoria'}."',`Prezzo`='".$prezzo."' WHERE `PiattoN`='".$obj->{'piattoId'}."'";
  $result=$conn->query($query);
  if($result){
    echo "ok";
  }else {
    echo "errore";
  }

}else{
  $query ="SELECT DISTINCT (Categoria) FROM listaprodotto";
  $category= $conn->query($query);

  if ($category->num_rows > 0) {
    while($cat = $category->fetch_assoc()) {

      $query = "SELECT * FROM listaprodotto WHERE Categoria='".$cat["Categoria"]."'";
      $result = $conn->query($query);

      echo "<li class='list-group-item'>
      <p class='category-caption' data-toggle='collapse' href='#".$cat["Categoria"]."' role='button' aria-expanded='false' aria-controls='".$cat["Categoria"]."Controll'>".$cat["Categoria"]."
      <i class='fas fa-angle-double-down'></i></p>
      <div class='category-item collapse' id='".$cat["Categoria"]."'>";

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<div class='row'>
          <div class='col-8'>
          <p id=".$row["PiattoN"]."name >".$row["PiattoName"]."</p>
          <p id=".$row["PiattoN"]."prezzo >€ ".$row["Prezzo"]."</p></div>
          <div class='col-4 divIcon '>
          <button class='btn   ordini'style='color:orange;' value=".$row["PiattoN"].">
          <i class='fa fa-plus' aria-hidden='true'></i>
          </button>
          </div>
          </div>";
        }
      }
      echo "</li>";
    }
  }
}
?>

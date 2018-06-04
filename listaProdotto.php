<?php
session_start();
include("db_con.php");

$query ="SELECT DISTINCT (categoria) FROM listaprodotto";
$category= $conn->query($query);

if ($category->num_rows > 0) {
  while($cat = $category->fetch_assoc()) {

    $query = "SELECT * FROM listaprodotto WHERE categoria='".$cat["categoria"]."'";
    $result = $conn->query($query);

    echo "<li class='list-group-item'>
        <p class='category-caption' data-toggle='collapse' href='#".$cat["categoria"]."' role='button' aria-expanded='false' aria-controls='".$cat["categoria"]."Controll'>".$cat["categoria"]."
        <i class='fas fa-angle-double-down'></i></p>
        <div class='category-item collapse' id='".$cat["categoria"]."'>";

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<div class='row'>
        <div class='col-8'>
        <p id=".$row["PiattoN"]."name >".$row["piattoName"]."</p>
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

?>

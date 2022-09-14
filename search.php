<?php


$con = mysqli_connect("localhost" , "id17908963_sql_" , " /%1ziJ%zq%\}bg?* ");
$db = mysqli_select_db("id17908963_sql");

if($con){
  echo "successfully connected!!!";
}else{
  die("error.");
}
 if ($db){
   echo "succesfully found the database.";

 }else {
   die("error, database not found.");
 }


  ?>

  <?php
  $query = mysql_query("SELECT * FROM data");

  while ($row = mysql_fetch_array($query)){
    $id = $row ['id'];
    $city = $row ['city'];
    $name = $row['name'];
    $quantity = $row["quantity"];
    $price = $row ['price'];

  }


   ?>

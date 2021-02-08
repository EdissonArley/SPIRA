<?php
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

  include_once("../database.php");

  $sql = "SELECT * FROM GRADE";
  $rows = array();
  if($result = mysqli_query($mysqli,$sql))
  {  
  while($row = mysqli_fetch_assoc($result))
  {
  $rows[] = $row;
  }
  echo json_encode($rows);
  }
  else {
    echo json_encode($rows);
    }

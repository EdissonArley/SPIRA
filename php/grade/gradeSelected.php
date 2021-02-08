<?php
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

  include_once("../database.php");

  $registros = $sql="SELECT * FROM GRADE WHERE id=$_GET[id]";

  if ($resultado = mysqli_fetch_array($registros))
  {
    $datos[] = $resultado;
  }
  $json = json_encode($datos);
  
  echo $json;

  header('Content-Type: application/json');
?>

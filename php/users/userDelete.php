<?php

  include_once("../database.php");

  $sql = "DELETE FROM USERS WHERE id=$_GET[id]";  
  $result = mysqli_query($mysqli,$sql);

  class Result {}

  $response = new Result();
  $response->resultado = 'OK';
  $response->mensaje = 'Usuario eliminado '.$result;

  header('Content-Type: application/json');

  echo json_encode($response);
?>

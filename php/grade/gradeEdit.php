<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);

include_once("../database.php");


$sql = "UPDATE GRADE SET name='$params->name', hourlyIntensity='$params->hourlyIntensity'
   WHERE id=$params->id";
if (mysqli_query($mysqli, $sql)) {
  class Result
  {
  }
  $response = new Result();
  $response->resultado = 'OK';
  $response->mensaje = '¡Curso editado! ';

  header('Content-Type: application/json');

  echo json_encode($response);
} else {
  echo "Error updating record: " . mysqli_error($mysqli);
}

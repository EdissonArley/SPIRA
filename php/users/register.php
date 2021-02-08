<?php
include_once("../database.php");
$postdata = file_get_contents("php://input");
if(isset($postdata) && !empty($postdata))
{
$request = json_decode($postdata);
$name = trim($request->name);
$password = mysqli_real_escape_string($mysqli, trim($request->password));
$email = mysqli_real_escape_string($mysqli, trim($request->email));
$cellphone = mysqli_real_escape_string($mysqli, trim($request->cellphone));
$sql = "INSERT INTO USERS(name,password,email,cellphone,idRol,idGrade) VALUES ('$name','$password','$email',
'$cellphone',2,NULL)";
if ($mysqli->query($sql) === TRUE) {
$authdata = [
'name' => $name,
'password' => '',
'email' => $email,
'Id' => mysqli_insert_id($mysqli),
'cellphone' => $cellphone
];
echo json_encode($authdata);
}
}
?>

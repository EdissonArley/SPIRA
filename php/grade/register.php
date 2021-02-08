<?php
include_once("../database.php");
$postdata = file_get_contents("php://input");
if(isset($postdata) && !empty($postdata))
{
$request = json_decode($postdata);
$name = trim($request->name);
$hourlyIntensity = mysqli_real_escape_string($mysqli, trim($request->hourlyIntensity));
$sql = "INSERT INTO GRADE(name,hourlyIntensity) VALUES ('$name','$hourlyIntensity')";
if ($mysqli->query($sql) === TRUE) {
$authdata = [
'name' => $name,
'Id' => mysqli_insert_id($mysqli),
'hourlyIntensity' => $hourlyIntensity
];
echo json_encode($authdata);
}
}
?>

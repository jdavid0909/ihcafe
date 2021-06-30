<?php

// $mysqli = new mysqli("localhost", "root", "", "ihcafefichas");
// if ($mysqli->connect_errno) {
//     echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
// }
// echo $mysqli->host_info . "\n";



// echo $mysqli->host_info . "\n";

// $sentencia = "CALL insert_prueba(?)";
// $valor = 'hola';
// $sentencia->bindParam(1, $valor, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 4000); 

// // llamar al procedimiento almacenado
// $sentencia->execute();

function insertNombre($nombre,$apellido){

$servername = "localhost";
$database = "ihcafefichas";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}


echo "Connected successfully";
$sql = "CALL insert_prueba('$nombre','$apellido')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>

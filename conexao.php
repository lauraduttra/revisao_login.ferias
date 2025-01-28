<?php
// conexão com o banco de dados
$severname = "localhost:3306";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($severname, $username, $password, $dbname);

if ($conn->connect_error){
    die("Falha na conexão:" . $conn->connect_error);
}
<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'clientes';

$conn = new mysqli($server, $username, $password, $database);

// if ($conn->connect_error) {
//   die ('[ERROR] A conexão falhou, tente novamente:' . $conn->connect_error);
// } echo '[SUCCESS] Conexão bem sucedida <br><br>';
?>
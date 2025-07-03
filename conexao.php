<?php
$conn = new mysqli("localhost", "root", "", "proturismo");
if ($conn->connect_error) {
    die("Erro ao conectar ao banco: " . $conn->connect_error);
}
?>
<?php
$conn = new mysqli("localhost", "root", "", "site");
if ($conn->connect_error) {
    die("Erro ao conectar com o banco de dados.");
}
?>
<?php
session_start();
include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $usuario = $result->fetch_assoc();
    if (password_verify($senha, $usuario['senha'])) {
        session_regenerate_id(true);
        $_SESSION['usuario'] = $usuario['email'];
        header("Location: painel.php");
        exit;
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Email não encontrado.";
}

$stmt->close();
$conn->close();
?>
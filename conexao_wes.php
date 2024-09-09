<?php

// Configurações de conexão com o banco de dados
$servidor = "localhost";
$banco = "ponto";
$usuario = "root";
$senha = "";

try {
    // Cria a conexão usando PDO
    $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    // Define o modo de erro do PDO como exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem sucedida";
} catch(PDOException $e) {
    echo "Conexão falhou: " . $e->getMessage();
}

// Fechar conexão
$conn = null;
?>

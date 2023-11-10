<?php
$servername = "18.170.107.18";
$username = "ac";
$password = "camenha199";
$database = "login";

// Estabelece a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Executa uma consulta de teste
$sql = "SELECT * FROM sua_tabela LIMIT 5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . "<br>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

// Fecha a conexão
$conn->close();
?>

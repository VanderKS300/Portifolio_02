<?php
$ip = $_SERVER['REMOTE_ADDR'];

// DADOS DO BANCO (Lendo das variáveis de ambiente do Render)
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$dbname = getenv('DB_NAME');

// Conecta ao banco
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    // Exibe erro na tela apenas para debug, remova em produção
    echo "<p>Erro na conexão com o banco de dados. Configure as variáveis de ambiente corretamente no Render.</p>";
    error_log("Erro na conexão com o banco de dados: " . $conn->connect_error);
    exit();
}

// ============================
// CONTADOR DE VISITANTES ÚNICOS
// ============================
$sql = "SELECT id FROM visitas WHERE ip = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $ip);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows == 0) {
    $sql_insert = "INSERT INTO visitas (ip) VALUES (?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("s", $ip);
    $stmt_insert->execute();
}

// Conta total de visitantes únicos
$result = $conn->query("SELECT COUNT(*) as total FROM visitas");
$row = $result->fetch_assoc();
$visitantes_unicos = $row['total'];

// Mostra o contador
echo "<p>👤 Visitantes únicos: <strong>$visitantes_unicos</strong></p>";

$conn->close();

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
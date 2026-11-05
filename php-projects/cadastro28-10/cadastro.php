
<?php


// Conexão com o banco de dados
$host = "localhost";
$username = "root";
$password = "";
$database = "banco";

$conn = new mysqli($host, $username, $password, $database);
// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
// Consulta SQL para selecionar todos os registros da tabela
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
// Verifica se há registros retornados
if ($result->num_rows > 0) {
    // Exibe os dados de cada registro
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Nome: " . $row["nome"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Mensagem: " . $row["mensagem"] . "<br><br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}
// Fecha a conexão com o banco de dados
$conn->close();



?>
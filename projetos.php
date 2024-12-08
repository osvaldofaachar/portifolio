<?php

// Variáveis de conexão
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'portifolio-api';
// Conectar ao banco de dados
$conn = new mysqli($host, $user, $password, $db);

$query = "SELECT * FROM projetos ORDER BY data_criacao DESC";
$result = $conn->query($query);

$projetos = [];
while ($row = $result->fetch_assoc()) {
    $projetos[] = $row;
}



class Projeto
{
    private mysqli $conn; // Declaração explícita da propriedade

    public function __construct($host, $user, $password, $database) {
        $this->conn = new mysqli($host, $user, $password, $database);

        if ($this->conn->connect_error) {
            die("Conexão falhou: " . $this->conn->connect_error);
        }
    }

    public function listarProjetos() {
        $sql = "SELECT * FROM projetos";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}



?>

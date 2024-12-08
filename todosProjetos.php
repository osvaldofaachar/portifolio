<?php
require_once 'projetos.php'; // Certifique-se de que este caminho está correto

// Configuração da conexão
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'portifolio-api';

// Instância da classe Projeto
$projetoObj = new Projeto($host, $user, $password, $database);

// Obtendo os projetos
$projetos = $projetoObj->listarProjetos();

// Retornando os dados em JSON
header('Content-Type: application/json');
echo json_encode($projetos);
?>

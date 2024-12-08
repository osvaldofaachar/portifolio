<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit;
}

$conn = new mysqli('localhost', 'root', '', 'portifolio-api');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $url_projeto = $_POST['url_projeto'];
    $link_codigo_fonte = $_POST['link_codigo_fonte'];

    // Tratamento da imagem
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === 0) {
        $diretorioUploads = 'uploads/'; // Pasta para salvar imagens
        $nomeArquivo = basename($_FILES['imagem']['name']);
        $caminhoCompleto = $diretorioUploads . uniqid() . '_' . $nomeArquivo;

        // Cria o diretório, se não existir
        if (!is_dir($diretorioUploads)) {
            mkdir($diretorioUploads, 0777, true);
        }

        // Move o arquivo para o diretório
        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoCompleto)) {
            $url_imagem = $caminhoCompleto; // Caminho a ser salvo no banco
        } else {
            echo "Erro ao fazer upload da imagem!";
            exit;
        }
    } else {
        echo "Imagem inválida!";
        exit;
    }

    // Inserir os dados no banco
    $stmt = $conn->prepare("INSERT INTO projetos (titulo, descricao, url_imagem, url_projeto, link_do_codigo_fonte) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $titulo, $descricao, $url_imagem, $url_projeto, $link_codigo_fonte);

    if ($stmt->execute()) {
        echo "Projeto inserido com sucesso!";
        header('Location: inserir_projeto.php');
    } else {
        echo "Erro ao salvar projeto!";
    }
}
?>

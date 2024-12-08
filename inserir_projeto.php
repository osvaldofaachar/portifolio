<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Projeto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="salvar_projeto.php" method="POST" enctype="multipart/form-data">
        <h2>Adicionar Novo Projeto</h2>
        <input type="text" name="titulo" placeholder="Título do Projeto" required>
        <textarea name="descricao" placeholder="Descrição" required></textarea>
        <input type="file" name="imagem" accept="image/*" required>
        <input type="text" name="url_projeto" placeholder="URL do Projeto">
        <input type="text" name="link_codigo_fonte" placeholder="Link do Código Fonte">
        <button type="submit">Salvar Projeto</button>
    </form>
</body>
</html>

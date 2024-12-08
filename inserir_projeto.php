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

<style>
body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
}
.main{
	width: 350px;
	height: 500px;
	background: red;
	overflow: hidden;
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}

label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 60px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input, textarea{
	width: 60%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
textarea{
	height: 50px;

}
button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #6d44b8;
}
.login{
	height: 530px;
	background: #eee;
	border-radius: 60% / 10%;
	
}
.login label{
	color: #573b8a;
	transform: scale(.6);
}
.login h2{
	color: #573b8a;
	font-size:2rem;
    padding: .5rem 2rem;
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
}

</style>


</head>
<body>
<div class="login">
    <form action="salvar_projeto.php" method="POST" enctype="multipart/form-data">
        <h2>Adicionar Novo Projeto</h2>
        <input type="text" name="titulo" placeholder="Título do Projeto" required>
        <textarea name="descricao" placeholder="Descrição" required></textarea>
        <input type="file" name="imagem" accept="image/*" required>
        <input type="text" name="url_projeto" placeholder="URL do Projeto">
        <input type="text" name="link_codigo_fonte" placeholder="Link do Código Fonte">
        <button type="submit">Salvar Projeto</button>
    </form>
    </div>
</body>
</html>

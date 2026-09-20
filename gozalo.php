<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>

<body>

<?php
	
	$nome = $_POST["nome"];
	$telefone = $_POST["telefone"];
	$email = $_POST["email"];
	$mensagem = $_POST["mensagem"];
	$novidades = $_POST["novidades"];
	
	$servidor ="localhost";
	$usuario = "root";
	$senha = "";
	$database = "loja";
	
	$conexao = mysqli_connect($servidor, $usuario, $senha, $database);
	
	$sql = "insert into formulario (nome, telefone, email, novidade, mensagem) values ('$nome', '$telefone', '$email','$novidades', '$mensagem')";
	
	if(mysqli_query($conexao, $sql)) { // efetua a instrução sql
        echo "Sucesso";
    }else{
        echo "Erro";
    }; 

?>

</body>
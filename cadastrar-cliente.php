<?php

	if($_POST){
	require_once "conexao.php";
    
        $nomeCliente = $_POST['nome'];
        $emailCliente = $_POST['email'];
    
		$sql = "INSERT INTO cliente VALUES 
            (default,'{$nomeCliente}','{$emailCliente}')";
		
		if($nomeCliente==""){
			$erro = "Preencha o nome";
		}else if(!filter_var($emailCliente, FILTER_VALIDATE_EMAIL)){
			$erro = "Email inválido";
		}else if ($conn->query($sql) === TRUE) {
			$m = "Cadastrado com sucesso";
		} else {
			$erro = "Erro ao cadastrar!";
		}
	
	$conn->close();
	}
?>

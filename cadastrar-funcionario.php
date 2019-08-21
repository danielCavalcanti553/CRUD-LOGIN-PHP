<?php
    include "conexao.php";
    
        $nome = $_POST['nome'];
        $cargo = $_POST['cargo'];
        $salario = $_POST['salario'];
    
		$sql = "INSERT INTO funcionario VALUES 
            (default,'{$nome}','{$cargo}','{$salario}')";
		
		if ($conn->query($sql) === TRUE) {
			echo "Cadastrado com sucesso";
		} else {
			echo "Error: " . $conn->error;
		}

	
	$conn->close();
?>
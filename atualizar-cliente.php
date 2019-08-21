<?php

   include "conexao.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

	$sql = "UPDATE cliente SET 
            nome='{$nome}', email='{$email}' WHERE id={$id}";
		
	if ($conn->query($sql) === TRUE) {
		echo "Atualizado com sucesso";
	}else {
		echo "Error: " . $conn->error;
	}

	
	$conn->close();
?>

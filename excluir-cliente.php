<?php
if(isset($_GET['idcliente'])){
    $id = $_GET['idcliente'];
}

if(isset($_POST['idcliente'])){
    include "conexao.php";

    $id = $_POST['idcliente'];
    $sql = "DELETE FROM cliente WHERE id={$id}";
		
	if ($conn->query($sql) === TRUE) {
		header("location: lista-clientes.php");
	}else {
		echo "Error: " . $conn->error;
    }
    
 $conn->close();
}
?>

    <?php include "includes/head.php"; ?>
    <?php include "includes/menu.php"; ?>

    <form method="POST" action="excluir-cliente.php">
    <label>Deseja Realmente Excluir?</label>
<input type="hidden" name="idcliente" value="<?php echo $id; ?>">
        <input type="submit" value="Sim">
    </form>

    <?php include "includes/footer.php"; ?>

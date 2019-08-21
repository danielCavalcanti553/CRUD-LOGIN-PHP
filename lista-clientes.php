<?php
    session_start();
    include 'bloqueio-login.php';

	include "conexao.php";
	$sql = "SELECT * FROM cliente";
	$clientes = $conn->query($sql);

	$conn->close();
?>

    <?php include "includes/head.php"; ?>
    <?php include "includes/menu.php"; ?>
    
    <h1>Lista de Clientes</h1>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">NOME</th>
        <th scope="col">E-MAIL</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    <?php
        if ($clientes->num_rows > 0) { // verificando se há clientes
            // $clientes->fetch_assoc() -> transformar dados em matriz
            while($row = $clientes->fetch_assoc()) {
                echo '<tr scope="row">';
                echo "<td>{$row['nome']}</td>";
                //echo "<td>".$row['nome']."</td>";

                echo "<td>{$row['email']}</td>";

                echo '<td><a class="btn btn-warning" href="edita-cliente.php?idcliente='.$row['id'].'">
                            editar</a></td>';

                echo '<td><a  class="btn btn-danger" href="excluir-cliente.php?idcliente='.$row['id'].'">
                                        excluir</a></td>';
                echo "</tr>";
            }
        } 
	?>	

    </tbody>
    </table>

    <div class="btn btn-primary">
    Total Registros: <span class="badge badge-light">
        <?php echo $clientes->num_rows; ?></span>
    </div>

    <?php include "includes/footer.php"; ?>
<?php
    session_start();
    include 'bloqueio-login.php';
    // Inicialmente cliente não possui dados
    $clientes = null;
    if(isset($_GET['nome'])){
        include "conexao.php";
        $nome = $_GET['nome'];
        // Selecione clientes como nome que contenham $nome
        $sql = "SELECT * FROM cliente WHERE nome LIKE '%{$nome}%'";
        // Agora clientes não é nulo
        $clientes = $conn->query($sql);
        $conn->close();
    }

?>

    <?php include "includes/head.php"; ?>
    <?php include "includes/menu.php"; ?>
    
    <h1>Busca de Clientes</h1>
        <!-- FORM NO DONTPAD -->
        <form class="row" action="busca-cliente.php" method="GET">
            <div class="col">
                <div class="form-group">
                    <input type="text" name="nome" class="form-control" 
                    id="email" placeholder="Digite o nome do cliente">
                </div>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <!-- FIM NO DONTPAD -->

    <?php if ($clientes!==null){ ?>

    <!-- TABELA LISTA CLIENTE -->
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
    <!-- FIM TABELA LISTA CLIENTE -->
    
    <!-- LISTA CLIENTE -->
    <div class="btn btn-primary">
    Total Registros: <span class="badge badge-light">
        <?php echo $clientes->num_rows; ?></span>
    </div>
    <!-- LISTA CLIENTE -->
    
    <?php } ?>
    <?php include "includes/footer.php"; ?>



    <?php
        session_start();
        include "conexao.php";
        $id = $_GET['idcliente'];
        $sql = "SELECT * FROM cliente WHERE id={$id}";
        $cliente = $conn->query($sql);
        //print_r($cliente->fetch_assoc());  
        $dados = $cliente->fetch_assoc();
        //echo $dados['email'];
         $conn->close();
    ?>

        <?php include "includes/head.php"; ?>
        <?php include "includes/menu.php"; ?>

        <h1>Edita Cliente</h1>
        <form method="post" action="atualizar-cliente.php" >

        <input type="hidden" name="id" size="15" 
                value="<?php echo $dados['id'];?>" /> 

            <label>Nome</label>
            <input type="text" name="nome" size="15" 
                value="<?php echo $dados['nome'];?>" /> 
            <br/>

            <label>E-mail</label>
            <input type="text" name="email" size="15"  
                value="<?php echo $dados['email'];?>" />
            <br/>
            <input type="submit" value="Atualizar" />
        </form>

        <?php include "includes/footer.php"; ?>


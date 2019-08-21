    <?php session_start(); ?>
    <?php include 'bloqueio-login.php'; ?>
    <?php
        if($_POST){
            include 'cadastrar-cliente.php';
        }
    ?>
    <?php include "includes/head.php"; ?>
    <?php include "includes/menu.php"; ?>

    <h1>Cadastro de Clientes</h1>
    <form method="post" action="form-cliente.php" >
    <div class="form-group">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" size="15" />
    </div>
    <div class="form-group">
        <label>E-mail</label>
        <input type="text" class="form-control" name="email" size="15" />
    </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar" />
    </form>
    <?php include "includes/message.php"; ?>
    <?php include "includes/footer.php"; ?>

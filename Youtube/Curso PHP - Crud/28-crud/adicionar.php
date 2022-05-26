<?php
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo cliente</h3>
        <table class="striped">
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name = "nome">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name = "sobrenome">
                <label for="nome">Sobrenome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name = "email">
                <label for="nome">E-mail</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name = "idade">
                <label for="nome">Idade</label>
            </div>

            <button type="submit" class="btn" name="btn-cadastrar"> Cadastrar </button>&nbsp;
            <a href="index.php" type="submit" class="btn green"> Lista de clientes </a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php'
?>
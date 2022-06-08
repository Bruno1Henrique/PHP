<?php
require('db/conexao.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserindo dados</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th,td{
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }
        .oculto{
            display: none;
        }
    </style>
</head>
<body>
    <h1>Aula inserindo dados</h1>
    <form id="form_salva" method="POST">
        <input type="text" name="nome" placeholder="Digite seu nome" required>
        <input type="email" name="email" placeholder="Digite seu email" required>
        <button type="submit" name="salvar">Salvar</button>
    </form>

    <form class="oculto" id="form_atualiza" method="POST">
    <input type="hidden" id="id_editado" name="id_editado" placeholder="ID" required>
        <input type="text" id="nome_editado" name="nome_editado" placeholder="Editar Nome" required>
        <input type="email" id="email_editado" name="email_editado" placeholder="Editar Email" required>
        <button type="submit" name="atualizar">Atualizar</button>
        <button type="submit" id="cancelar" name="cancelar">Cancelar</button>
        
    </form>

    <?php
    //INSERIR UM DADO NO BANCO
//$sql = $pdo->prepare("INSERT INTO clientes VALUES (null,'Henrique','henrique@c4.com','18-09-2021')");
//$sql->execute();

// //MODO CORRETO ANTI SQL INJECTION

if(isset($_POST['salvar']) && isset($_POST['nome'])&& isset($_POST['email'])){

    $nome = limparPost($_POST['nome']);
    $email = limparPost($_POST['email']);
    $data = date('d-m-Y');


    //VALIDACOES DE CAMPO VAZIO
    if($nome=="" or $nome==null){
        echo "Nome não pode ser vazio";
        exit();
    }

    if($email=="" or $email==null){
        echo "Nome não pode ser vazio";
        exit();
    }

    //VALIDACOES DE NOME E EMAIL

    //VERIFICAR SE NOME ESTÁ CORRETO
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
        echo "Somente permitido letras e espaços em branco para o nome";
        exit();
    }

    //VERIFICAR SE É UM EMAIL VÁLIDO
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Formato de email inválido";
    }

   
    $sql = $pdo->prepare("INSERT INTO clientes VALUES (null,?,?,?)");
    $sql->execute(array($nome, $email,$data));

    echo "Cliente inserido com sucesso";
}
    ?>

    <?php
    //PROCESSO DE ATUALIZACAO
    if(isset($_POST['atualizar']) && ($_POST['id_editado']) && ($_POST['nome_editado']) && ($_POST['email_editado'])){
        $id=limparPost($_POST['id_editado']);
        $nome=limparPost($_POST['nome_editado']);
        $email=limparPost($_POST['email_editado']);

            //VALIDACOES DE CAMPO VAZIO
        if($nome=="" or $nome==null){
            echo "Nome não pode ser vazio";
            exit();
        }

        if($email=="" or $email==null){
            echo "Nome não pode ser vazio";
            exit();
        }

        //VALIDACOES DE NOME E EMAIL

        //VERIFICAR SE NOME ESTÁ CORRETO
        if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
            echo "Somente permitido letras e espaços em branco para o nome";
            exit();
        }

        //VERIFICAR SE É UM EMAIL VÁLIDO
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Formato de email inválido";
        }

            //COMANDO PARA ATUALIZAR DADOS
            $sql = $pdo->prepare("UPDATE clientes set NOME =?, EMAIL =? WHERE uid=?");
            $sql->execute(array($nome,$email,$id));

            echo "Atualizado ".$sql->rowCount()." registros!";
    }
    ?>

    <?php

        //SELECIONAR DADOS DA TABELA
        $sql = $pdo->prepare("SELECT * FROM clientes");
        $sql->execute();
        $dados = $sql->fetchAll();

        // echo "<pre>";
        // print_r($dados);
        // echo "</pre>";
    ?>

    <?php
        if(count($dados) >0){
            echo "<table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>";

            foreach($dados as $chave => $valor){
                echo "<tr>
                        <td>".$valor['uid']."</td>
                        <td>".$valor['nome']."</td>
                        <td>".$valor['email']."</td>
                        <td><a href='#' class='btn-atualizar' data-id='".$valor['uid']."' data-nome='".$valor['nome']."' data-email='".$valor['email']."'>Atualizar</a></td>
                     </tr>";
            }

            echo "</table>";
        }else{
            echo "<p>Nenhum cliente cadastrado</p>";
        }



    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(".btn-atualizar").click(function(){
            var uid = $(this).attr('data-id'); 
            var nome = $(this).attr('data-nome'); 
            var email = $(this).attr('data-email'); 

            $('#form_salva').addClass('oculto');
            $('#form_atualiza').removeClass('oculto');

            $("#id_editado").val(uid);
            $("#nome_editado").val(nome);
            $("#email_editado").val(email);

            //alert('O ID é: '+uid+" | nome é: "+nome+" | email é: "+email);
        });

        $('#cancelar').click(function(){
            $('#form_salva').removeClass('oculto');
            $('#form_atualiza').addClass('oculto');
        });
    </script>

</body>
</html>
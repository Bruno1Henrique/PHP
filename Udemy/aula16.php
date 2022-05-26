<?php
   /* $nome = $_GET["nome"];
    $email = $_GET["email"];
    echo $nome;
    echo "<br>" . $email;*/
?>


<?php
    $arrayNome = ["Valetina","Fernanda","Pedro","Abraão","Lucas","Marcos","Joana"];
    $nome = filter_input(INPUT_GET,"txtNome",FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_GET,"txtEmail",FILTER_SANITIZE_STRING);
    $funcionarioCod = filter_input(INPUT_GET,"slFuncionario",FILTER_SANITIZE_NUMBER_INT);
    $funcionario = "";

    if ($funcionarioCod){
        $funcionario = $arrayNome[$funcionarioCod];
    }
    

    /*if (isset($_POST["txtNome"])){
        $nome = $_POST["txtNome"];
    }

    if (isset($_POST["txtEmail"])){
        $email = $_POST["txtEmail"];
    }

    if (isset($_POST["slFuncionario"])){
        $funcionario = $arrayNome[$_POST["slFuncionario"]];
    }*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul{
            list-style: none;
        }

        input, select{
            padding: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form method="GET">
        <ul>
            <li>Nome: <input type="text" name="txtNome"></li>
            <li>E-mail: <input type="text" name="txtEmail"></li>
            <li>Funcionário: 
                <select name="slFuncionario">
                    <?php
                    for ($i = 0; $i < count($arrayNome); $i++){
                        ?>
                        <option value="<?= $i; ?>"><?= $arrayNome[$i];?></option>
                        <?php
                    }
                    ?>
                </select>
            </li>
            <li><input type="submit" name="btnSubmit" value="Cadastrar"></li>
        </ul>
    </form>
    <br><hr><br />
    <p>Nome: <?= $nome;?></p>
    <p>Email: <?= $email;?></p>
    <p>Funcionario: <?= $funcionario;?></p>
</body>
</html>
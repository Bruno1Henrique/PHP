<?php
    $arrayNome = array("Valetina","Fernanda","Maria","Cassandra","Julia","Pedro");
    
    //for($i = 0; $i < count($arrayNome); $i++){
    //    echo $arrayNome[$i] . "<br />";
  //  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select id="slProfessores" name="slProfessores">
            <?php
                for ($i = 0; $i < count($arrayNome); $i++){
            ?>
            <option value="<?= $i; ?>"><?= $arrayNome[$i]; ?></option>
            <?php
                }
            ?>
        </select>
        <button onclick="alert(document.getElementById('slProfessores').value);">Selecionar</button>
</body>
</html>
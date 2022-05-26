<?php
    //$arraynome = array("Maça","Uva","Pera","Banana","Melancia","Laranja");
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
    <select name="idfrutas" id="idfrutas">
    <?php
        for($i =0; $i < count($arraynome);$i++){
    ?>
    <option value="<?=$i; ?>"><?= $arraynome[$i];?></option>
    <?php
        }
    ?>
    </select>
</body>
</html>
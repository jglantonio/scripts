<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trabajo con cadenas</title>
    <link rel="stylesheet" href= "../css/styles.css">
</head>
<body>
<div class="container">
    <ul>
        <li><code>strlen</code></li>
    </ul>

    <?php
        $variable = "hola que tal";
        $caracteres = strlen($variable);
        echo "La variable '".$variable."' contiene ".$caracteres." caracteres";
    ?>



    <ul>
        <li><code>strpos</code></li>
    </ul>

    <?php
    $variable = "hola que tal";
    $existe = strpos($variable , "hola");
    $existe2 = strpos("hola hola hola","hola",5);
    ?>

    El string "<?php echo $variable ; ?>" contiene  "hola" <?php if($existe !== false){echo"en la posicion ".$existe;}else{echo": No";} ?> <br>
    El string "<?php echo $variable ; ?>" contiene  "adios" <?php if($existe2 !== false){echo"en la posicion ".$existe2;}else{echo": No";} ?><br>

    http://php.net/manual/es/function.strrpos.php
    <ul>
        <li><code>strrpos</code></li>
    </ul>

    <?php
        $var = '5';
        $variable = (string)md5(mt_rand(03012,312321));
        $encontrado = strrpos("$variable",$var);
    ?>

    La variable <?php echo $variable ; ?> <br>
    Contiene la última aparición de este valor (<?php echo $var;?>) en la posición <?php echo $encontrado ?>.

</div>
</body>
</html>
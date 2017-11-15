<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trabajar con fechas</title>
    <link rel="stylesheet" href= "../css/styles.css">
</head>
<body>
<div class="container">
    <ul>
        <li><code>time</code></li>
    </ul>
    <p>Fecha actual Unix time</p><br>
    <?php
        $time = time();
        echo $time."<br>"; // 1234567890
    ?>
    <ul>
        <li><code>date</code></li>
    </ul>
    <p>Fecha actual formato normal</p>
    <?php
    $date = date("d/m/Y G:i:s",1234567890);
    echo $date; // 09/04/40986 3:11:30:000:000000
    ?>
    <p>Fecha actual</p>
    <br>
    <?php
    $date = date("d/m/Y G:i:s",time());
    echo $date; // 09/04/40986 3:11:30:000:000000
    ?>
    <br>
    <?php
    $date = date("d/m/Y G:i:s");
    echo $date; // 09/04/40986 3:11:30:000:000000
    ?>
</div>
</body>
</html>
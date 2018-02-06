<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scripts</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="../js/jquery.min.js"></script>
</head>
<body>
    <div>DNI :</div>
    <div><input type="text" id="dni" value=""><button id="validarDNI">Validate</button></div>
    <div class="respuesta">

    </div>
</body>
<script type="text/javascript">

    function validar(e){

        var correcto = "Correcto";
        var incorrecto = "Incorrecto";

        console.log(e);
        console.log(e.length);
        if(e.length == 9){
            console.log(e[8]);
            var dni = /^([0-9]{8}[A-ZñÑa-z]{1})|([A-ZñÑa-z]{1}[0-9]{8})$/;

            if (dni.test(e)) {
                $(".respuesta").empty();
                $(".respuesta").append(correcto);
                console.log("yeah!");
            }else{
                $(".respuesta").empty();
                $(".respuesta").append(incorrecto);
                console.log("ouch!");
            }
        }else{
            $(".respuesta").empty();
            $(".respuesta").append(incorrecto);
        }

    }
    $('#validarDNI').on('click',function(){
        validar($("#dni").val());
    });
</script>
</html>
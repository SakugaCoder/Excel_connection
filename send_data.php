<?php

    $conectar = new mysqli("localhost","root","","excel_connection");
    $status = "0";
    $data_1 = $_POST['data_1'];
    $data_2 = $_POST['data_2'];
    $data_3 = $_POST['data_3'];
    $data_4 = $_POST['data_4'];

    $update_data = mysqli_query($conectar, "UPDATE excel_data 
    SET estado = '$status', data_1 = '$data_1', data_2 = '$data_2', data_3 = '$data_3',
    data_4 = '$data_4' WHERE id = 1");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/send_data_style.css">
    <link rel="stylesheet" href="css/fontello.css">
    <title>Send Data</title>
</head>
<body>
    <?php
        if($update_data){
            ?>
            <div class="container">
                <div class="msg_container">
                    <p><b>Informaci&oacute;n modificada correctamente <span class="icon-check" style="color: #55E6C1"></span></b></p>
                    <button onclick="location.href='main.html'"><span class="icon-left-big"></span> Regresar</button>
                </div>
            </div>
            <?php
        }

        else{
            echo mysql_error();
        }
    ?>
</body>
</html>
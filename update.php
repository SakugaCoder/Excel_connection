<?php

    $conectar = new mysqli("localhost","root","","excel_connection");
    $status = "1";


    $update_data = mysqli_query($conectar, "UPDATE excel_data 
    SET estado = '$status' WHERE id = 1");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/update_style.css">
    <link rel="stylesheet" href="css/fontello.css">
    <title>Send Data</title>
</head>
<body>
    <?php
        if($update_data){
            ?>
            <div class="container">
                <div class="msg_container">
                    <p><b>Informaci&oacute;n actualizada <span class="icon-check" style="color: #55E6C1"></span></b></p>
                    <button onclick="location.href='status.php'"><span class="icon-left-big"></span> Regresar</button>
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
<?php
    $conexion = new mysqli("localhost","root","","excel_connection");
    if (mysqli_connect_errno()) {
        printf("Falló la conexión failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $consulta = "SELECT estado FROM excel_data WHERE id = 1";
    $resultado = $conexion->query($consulta);

    $row = $resultado->fetch_array(MYSQLI_NUM);
    $status = $row[0];
    //echo $status;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estado_style.css">
    <link rel="stylesheet" href="css/fontello.css">
    <meta http-equiv="Refresh" content="5">

    <title>Estado</title>
</head>
<body>
    <div class="main_title">
        <h2>Estado</h2>
    </div>

    <div class="container-fluid">
            <div class="row">
                    <div class="col-md-4 col-sm-4"></div>

                    <div class="col-md-4 col-sm-4 data_1 status_container">
                        <?php
                            switch($status){
                                case 1:{
                                    ?>
                                        <div class="state_content-<?php echo $status;?>">
                                            <h3>¡Actualizado! <span class="icon-check"></span></h3>
                                            <hr>
                                        </div>

                                    <?PHP
                                    break;
                                }

                                case 0:{
                                    ?>
                                        <audio src="alert.wav" autoplay="true"></audio>
                                        <div class="state_content-<?php echo $status;?>">
                                            <h3>¡Desactualizado! <span class="icon-cancel"></span></h3>
                                            <hr>
                                        </div>

                                    <?php
                                    break;
                                }
                            }
                        ?>
                    </div>

                    <div class="col-md-4 col-sm-4"></div>
            </div>
        </div>
    <form action="update.php" method="post" id="form"><input type="hidden" name="status" value="1"></form>
    <div class="bottom_content">
        <button <?php if($status == 1){echo "disabled";}else{}?> onclick="document.getElementById('form').submit();">
           ¿Ya lo actualizaste? <span class="icon-spin3"></span>
        </button>x|
    </div>
</body>
</html>

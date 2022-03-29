<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilos.css">
    <title>Vista Usuarios</title>


</head>

<body>

    <div class="container">
        <h1>Vista Usuarios</h1>
        <?php
        include 'conexion_bbdd.php';

        foreach ($users as $user) {
        ?>
            <div class="tb_he">
                <div>
                    <div>
                        <h2>Nombre:  <?= $user['user_name'] ?></h2>
                        <p>Edad: <?= $user['age'] ?></p>
                    </div>
                    <hr>
                    <ul>
                        <li>Email:  <?= $user['email'] ?></li>
                        <li>Password:  <?= $user['passwd'] ?></li>
                    </ul>
                </div>
            </div>
        <?php } ?>

    </div>
</body>

</html>
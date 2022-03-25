<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vista Usuarios</title>
</head>

<body>

    <div>

        <?php
        include 'conexion_bbdd.php';

        foreach ($users as $user) {
        ?>
            <div>
                <div>
                    <div>
                        <h2><?= $user['user_name'] ?></h2>
                        <p><?= $user['age'] ?></p>
                    </div>
                    <ul>
                        <li><?= $user['email'] ?></li>
                        <li><?= $user['passwd'] ?></li>
                    </ul>
                </div>
            </div>
        <?php } ?>

    </div>
</body>

</html>
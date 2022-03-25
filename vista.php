<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vista Usuarios</title>
</head>

<body>
    <table>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Email</th>
            <th>Password</th>
        </tr>

        <?php
        include 'conexion_bbdd.php';

        foreach ($users as $user) {
        ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['user_name'] ?></td>
                <td><?= $user['age'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['passwd'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>
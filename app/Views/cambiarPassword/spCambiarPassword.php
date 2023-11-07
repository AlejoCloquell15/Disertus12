<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Gabarito:wght@500&family=Nunito+Sans:opsz@6..12&family=Raleway:ital,wght@0,100;1,100;1,300&family=Ubuntu:ital,wght@1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,300;1,400&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Cambiar Contraseña</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #193b4a, #30675e);
            font-family: Arial, sans-serif;
            color: #3A3A3A;
            overflow: hidden;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-box {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
        }

        .form-box p {
            margin-bottom: 15px;
        }

        .form-box input[type="password"] {
            width: 90%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-box input[type="submit"] {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 5px;
            background-color: #156b6b;
            color: #ffffff;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .form-box input[type="submit"]:hover {
            background-color: #134e4e;
        }

        .form-box .message {
            margin-top: 15px;
            color: #f39c12;
        }

        .container1 {
            max-width: 800px;
            padding: 20px;
            margin-left: 782px;
        }

        header {
            color: #ffffff;
            padding: 10px 0;
            font-family: 'Poppins', sans-serif;
            position: absolute;
        }

        .header-icons a {
            color: #ffffff;
            text-decoration: none;
            margin-right: 20px;
            font-size: 18px;
            transition: color 0.3s ease-in-out;
        }

        .header-icons a:hover {
            color: #ff9900;
        }

        .header-icons {
            margin-left: 80px;
        }

        .a {
            animation: fadeInRight;
            animation-duration: 1.5s;
        }
    </style>
</head>

<body>
    <header>
        <div class="container1 a">
            <div class="header-icons">
                <a href="<?php echo base_url(); ?>cargarLogin">Iniciar Sesión</a>
                <a href="<?php echo base_url(); ?>registrar">Registrarse</a>
                <a href="<?php echo base_url(); ?>manual">Manual</a>
                <a href="<?php echo base_url(); ?>">Inicio</a>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="form-box">
            <h2>Cambiar Contraseña</h2>
            <p>Introduce una nueva contraseña.</p>
            <form action="<?php echo base_url(); ?>cambiarPassword" method="post">
                <input type="password" name="password" placeholder="Nueva Contraseña">
                <input type="hidden" value="<?php echo $IdUsuario; ?>" name="IdUsuario" readonly>
                <input type="submit" value="Cambiar">
            </form>
            <?php if (isset($validar)): ?>
                <?php foreach ($validar as $val): ?>
                    <p>
                        <?php echo $val; ?>
                    </p>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>
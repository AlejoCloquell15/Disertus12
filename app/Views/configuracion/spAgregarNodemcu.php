<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
form {
    display: flex;
    flex-direction: column;
    width: 200px;
}

.cont-form {
    margin-left: 100px;
    margin-top: 30px;
    width: fit-content;
    padding-left: 35px;
    padding-right: 35px;
    padding-top: 10px;
    padding-bottom: 25px;
    border-radius: 5px;
    margin-bottom: 60px;
    box-shadow: 0px 8px 16px 5px rgba(0, 0, 0, 0.25);
    -webkit-box-shadow: 0px 8px 16px 5px rgba(0, 0, 0, 0.25);
    -moz-box-shadow: 0px 8px 16px 5px rgba(0, 0, 0, 0.25);
}

button {
    margin-top: 20px;
    background-color: white;
    height: 30px;
    border-radius: 4px;
    box-shadow: 0px 8px 16px 5px rgba(0, 0, 0, 0.25);
    -webkit-box-shadow: 0px 8px 16px 5px rgba(0, 0, 0, 0.25);
    -moz-box-shadow: 0px 8px 16px 5px rgba(0, 0, 0, 0.25);
    border: none;
    transition: transform 0.9s;
}

button:hover {
    cursor: pointer;
    background-color: rgb(0, 75, 73);
    color: white;
}

.p-form {
    font-weight: 600;
}
</style>

<body>
    <?php echo $vista ?>
    <div class="cont-form">
        <p class="p-form">Vincular nuevo dispositivo</p>
        <form action="<?php echo base_url(); ?>agregarNodemcu" method="post">
            <p>Aqui va la identificación de la nodemcu</p>
            <input type="text" name="idNodemcu" required>
            <p>Añade el tiempo de ducha</p>
            <input type="number" name="tiempoDucha" required>
            <p>Añade el tiempo de espera</p>
            <input type="number" name="tiempoEspera" required>
            <p>Añade el tiempo de espera</p>
            <input type="number" name="tiempoTolerancia" required>
            <p>Agregale un nombre a tu dispositivo</p>
            <input type="text" name="nombre" required>
            <button>Agregar</button>
        </form>
        <?php if(isset($mensaje)){
        echo "<p>".$mensaje."</p>";
    }?>
    </div>
</body>

</html>
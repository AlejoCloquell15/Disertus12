<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,300;1,400&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <style>
    /* Estilos generales */

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #EBEBEB;
      margin: 0;
      padding: 0;
      color: #333;
      overflow-x: hidden;
    }

    .container1 {
      max-width: 800px;
      padding: 20px;
      margin-left: 782px;
    }

    .container {
      max-width: 800px;
      margin: auto;
      padding: 20px;
      height: 100px;
    }

    .container2 {
      width: fit-content;
      display: flex;
      margin: 0 auto;
      margin-top: 40px;
      padding: 40px 70px;
      background-color: #ffffff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      text-align: center;
      margin-bottom: 30px;
      /* Alineación central del contenido */
    }

    .img1 {
      width: 80%;
      height: auto;
      object-fit: contain;
    }

    .container-img {
      width: 40%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .text-cont2 {
      max-width: 65ch;
    }

    .text-cont2>ul {
      display: flex;
      flex-direction: column;
      gap: 8px
    }

    .container2 h2 {
      font-size: 2em;
      color: #004B49;
      /* Color verde oscuro */
      margin-bottom: 20px;
    }

    .container2 p {
      font-size: 16px;
      color: #333;
      /* Color de texto principal */
      margin-bottom: 30px;
    }

    .container2 ul,
    .container2 ol {
      font-size: 14px;
      text-align: left;
      margin-bottom: 30px;
    }

    .container2 ol li::before {
      counter-increment: my-awesome-counter;
      /* Usa el contador como número */
      color: #097679;
      /* Color verde más oscuro */
      font-weight: bold;
    }

    /*   Contenedor 3* / ////////////////////////////////////////////////777*/

    .container3 {
      width: fit-content;
      display: flex;
      margin: 0 auto;
      margin-top: 40px;
      padding: 40px 70px;
      background-color: #ffffff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      text-align: center;
      margin-bottom: 90px;
      /* Alineación central del contenido */
    }

    .img2 {
      width: 80%;
      height: auto;
      object-fit: contain;
    }

    .container-img2 {
      width: 40%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .text-cont3 {
      max-width: 65ch;
    }

    .text-cont3>ol {
      display: flex;
      flex-direction: column;
      gap: 8px
    }

    .container3 h2 {
      font-size: 2em;
      color: #004B49;
      /* Color verde oscuro */
      margin-bottom: 20px;
    }

    .container3 p {
      font-size: 16px;
      color: #333;
      /* Color de texto principal */
      margin-bottom: 30px;
    }

    .container3 ul,
    .container3 ol {
      font-size: 14px;
      text-align: left;
      margin-bottom: 30px;
    }

    .container3 ol li::before {
      counter-increment: my-awesome-counter;
      /* Usa el contador como número */
      color: #097679;
      /* Color verde más oscuro */
      font-weight: bold;
    }

    /*//////////////////////////////////////////////////////////////

    /* Estilos del encabezado */
    header {
      background: linear-gradient(86deg, #004B49 11%, #097679 58%, #00B195 100%);
      color: #ffffff;
      padding: 10px 0;
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

    /* Estilos de la sección de héroe */
    .hero-section {
      background: linear-gradient(86deg, #004B49 11%, #097679 58%, #00B195 100%);
      color: #ffffff;
      padding: 100px 0;
      text-align: center;
    }

    .hero-section h1 {
      font-size: 3em;
      margin-bottom: 20px;
    }

    .hero-section p {
      font-size: 1.2em;
      margin-bottom: 40px;
    }

    .cta-button {
      display: inline-block;
      padding: 10px 30px;
      background-color: #ffffff;
      color: #333;
      font-size: 1em;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease-in-out;
    }

    .cta-button:hover {
      background-color: #ff9900;
      color: #ffffff;
    }

    .bienvenido {
      margin-top: -220px;
      animation: fadeInDown;
      animation-duration: 1.5s;
    }

    .a {
      animation: fadeInRight;
      animation-duration: 1.5s;
    }


    /*//////////////////////////////////////////////////////77*/
  </style>
</head>

<body>
  <header>
    <div class="container1 a">
      <div class="header-icons">
        <a href="<?php echo base_url(); ?>cargarLogin">Iniciar Sesión</a>
        <a href="<?php echo base_url(); ?>registrar">Registrarse</a>
        <a href="<?php echo base_url(); ?>manual">Manual</a>
        <a href="<?php echo base_url(); ?>sobreNosotros">Sobre Nosotros</a>
      </div>
    </div>
  </header>

  <div class="hero-section">
    <div class="container"></div>
    <div class="bienvenido">
      <h1 class="animate__animated animate__fadeIn">Bienvenido a Disertus</h1>
      <p>Transforma tu experiencia de ducha con nuestra innovadora solución de ahorro de agua.</p>
      <a href="<?php echo base_url(); ?>cargarLogin" class="cta-button">¡Empieza Ahora!</a>
    </div>
  </div>
  </div>

  <div class="container2">
    <div class="text-cont2">
      <h2 style="text-align: center;">Descubre las Características</h2>
      <p style="text-align: center;">Aquí tienes algunas de las características destacadas de nuestro innovador
        sistema
        de
        ducha automática:</p>
      <ul>
        <li>Ahorro de Agua: Nuestra ducha automática está diseñada para reducir significativamente el consumo de
          agua,
          ayudando a conservar este valioso recurso.</li>
        <li>Control de Tiempo: Los usuarios pueden configurar la duración de su ducha y el tiempo de espera para
          una
          experiencia personalizada.</li>
        <li>Caudalímetro Integrado: Registramos el volumen de agua utilizado, brindándote información útil para
          controlar
          tu consumo y ahorrar dinero.</li>
        <li>Conciencia Ambiental: Fomentamos la responsabilidad ambiental al reducir el desperdicio de agua y
          ayudamos a
          preservar el planeta para las generaciones futuras.</li>
      </ul>
    </div>
    <div class="container-img">
      <img src="<?= base_url('DescubreCarac.png') ?>" alt="Mi Imagen" class="img1">
    </div>
  </div>
  <div class="container3">
    <div class="container-img2">
      <img src="<?= base_url('ComoFuncionPP.png') ?>" alt="Mi Imagen" class="img2">
    </div>
    <div class="text-cont3">
      <h2 style="text-align: center;">¿Cómo Funciona?</h2>
      <p style="text-align: center;">El funcionamiento de nuestra ducha automática es sencillo y efectivo. Aquí
        tienes
        una
        descripción paso a paso:</p>
      <ol>
        <li>Detección de Movimiento: Nuestro sistema utiliza un sensor PIR para detectar el movimiento del
          usuario en la
          ducha.</li>
        <li>Configuración Personalizada: Los usuarios pueden configurar la duración de la ducha y los tiempos de
          espera
          a
          través de nuestro sitio web.</li>
        <li>Registro de Caudal: Durante la ducha, un caudalímetro mide el volumen de agua utilizado,
          proporcionando
          datos
          precisos.</li>
        <li>Envío de Datos: Al finalizar la ducha, los datos se envían a nuestro servidor para su registro y
          análisis.
        </li>
        <li>Ahorro de Agua: El sistema apaga la ducha según la configuración, lo que reduce el consumo
          innecesario de
          agua.</li>
      </ol>
    </div>
  </div>

  <footer>
    <footer style="background-color: #464646; color: #ffffff; padding: 20px; text-align: center;">
      <p>&copy; 2023 Disrtus | Todos los derechos reservados</p>
      <p>Contacto: info@disertus.com</p>
    </footer>
  </footer>

  </footer>
</body>

</html>
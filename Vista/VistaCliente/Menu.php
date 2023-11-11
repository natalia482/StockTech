<?php
session_start();
ob_start();
if (!isset($_SESSION['UserCli']) or !isset($_SESSION['pasClie'])){
    header("Location: ../Vista/VistaCliente/IngresoCliente.php");
}
ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="../diseño/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../diseño/css/bootstrap.min.css">
    <link rel="stylesheet" href="../diseño/css/magnific-popup.css">
    <link rel="stylesheet" href="../diseño/css/jquery-ui.css">
    <link rel="stylesheet" href="../diseño/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../diseño/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../diseño/css/aos.css">
    <link rel="stylesheet" href="../diseño/css/style.css">
    <link rel="stylesheet" href="../diseño/css/aos.css">
    <link rel="stylesheet" href="../diseño/css/style.css">

    <style type="text/css">
      body
      {
        background-image: url(../diseño/images/4.png);
        background-repeat: none;
        background-attachment: scroll;
        
      }

      .contenido{
          margin-top:150px;
          display: flex;
          justify-content: center;
       }


       .TITULO{        
          color:white;
          font-family: "Homer Simpson UI";
          font-size: 70px;
          margin-left: -250px;
          margin-top: 100px;
          
        }

        .TITULO2{
                
          color:white;
          font-family: "Homer Simpson UI";
          font-size: 70px;
          margin-top:-350px;
          margin-left: 1000px;
        }

         .SUBTITULO2{
            color: white;
            font-family: 'Segoe UI';
            font-size: 35px;
            text-align: left;
            line-height: 100%;
            margin-left: -250px;
            margin-top: 0px;
         }

         .button1 {
          background-color: #006400; /* Color de fondo del botón */
          color: white; /* Color del texto del botón */
          border: none; /* Sin borde */
          text-align: center;
          text-decoration: none;
          display: block; /* Cambia el display a "block" para que los botones estén uno debajo del otro */
          font-size: 16px;
          cursor: pointer; /* Cambia el cursor al pasar por encima */
          height:60px;
          width:350px;
          font-family: 'Segoe UI';
          font-size: 30px;
          text-align: right;
          margin-left: 1070px;
          margin-top: -55px;

        
        }
          .button2 {
            background-color: #006400; /* Color de fondo del botón */
          color: white; /* Color del texto del botón */
          border: none; /* Sin borde */
          text-align: center;
          text-decoration: none;
          display: block; /* Cambia el display a "block" para que los botones estén uno debajo del otro */
          font-size: 16px;
          cursor: pointer; /* Cambia el cursor al pasar por encima */
          height:60px;
          width:350px;
          font-family: 'Segoe UI';
          font-size: 30px;
          text-align: right;
          margin-left: 1070px;
          margin-top: -165px;}
          .button3 {
          background-color: #006400; /* Color de fondo del botón */
          color: white; /* Color del texto del botón */
          border: none; /* Sin borde */
          text-align: center;
          text-decoration: none;
          display: block; /* Cambia el display a "block" para que los botones estén uno debajo del otro */
          font-size: 16px;
          cursor: pointer; /* Cambia el cursor al pasar por encima */
          height:60px;
          width:300px;
          font-family: 'Segoe UI';
          font-size: 30px;
          text-align: right;
          margin-left: 1070px;
          margin-top: -255px;}

      h2{
        color:white;
        font-family: "Homer Simpson UI";
          ont-size: 50px;
            text-align: center;
      }

      p{
        text-transform: uppercase;
      }
</style>
<body> 
  <div class="site-wrap">
    <?php include("../../Vista/diseño/layouts/header.php"); ?> 
    <div class="site-section text-center ">
      <div class="container ">
        <div class="row">
          <h1 class="TITULO">GESTIÓN DEL INVENTARIO </h1>
          <p class= "SUBTITULO2">
              STOCK TECH esta diseñado para proporcionar  una <br> 
              solución completa de gestión de inventarios para <br> 
              controlar tus existencias y mejorar la eficiencia<br> 
              de tu empresa. Las cantidades se actualizan <br>
              automáticamente a medida que trabajas. <br>
              Cada vez que completes una tarea de producción, el <br>
              inventario se actualiza para facilitar su mantenimiento. <br> </p>
          <h1 class="TITULO2">OPCIONES </h1> 
          <button class="custom-button button1">Contactanos</button>
          <button class="custom-button button2"><a href="RegistrarInventario.php">Agregar</a></button>
          <button class="custom-button button3"><a href="ListaMaterial.php">Inventario</a></button>
       </div>
      </div>
    </div>
    </div>
    
    
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
</body>
</html>   
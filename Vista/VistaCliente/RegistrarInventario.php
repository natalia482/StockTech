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
    <title>Registro Producto </title>
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
    .site-section{
        background-color: #ffff;
      }
      .row{
        opacity: 2;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
         
      }
      .Registro{
        background-color: green;
        color:white;
        font-family: "Homer Simpson UI";
        font-size: 40px;
        text-align: center;
        margin-top: -80px;
      }

      p{
        text-transform: uppercase;
      }
  </style>
</head>
<body>
<div class="site-wrap">
    <?php include("../../Vista/diseño/layouts/header.php"); ?> 
    <div class="site-section text-center">
        <div class="container ">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                <br>
                <br>
                <form action="../../Controlador/ControladorCliente/ControladorProducto.php" method="POST" enctype="multipart/form-data">

                    <h2 class="h3 mb-4 text-black text-center">SUBIDA IMAGEN</h2>
                    <div class="p-3 p-lg-5 border">
                        <div class="form-group">
                            <label for="c_country" class="text-black">Tipo de planta <span class="text-danger">*</span></label>
                            <select id="tipo" name="tipo" class="form-control">
                                <option name="tipo">Seleccione el tipo de planta</option>    
                                <option name="tipo">Ornamental</option>    
                                <option name="tipo">Bonsai</option>    
                                <option name="tipo">Flor</option>    
                                <option name="tipo">Abonos</option>    
                                <option name="tipo">Cactus</option>    
                                <option name="tipo">Suculentas</option>    
   
                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_fname" class="text-black" >Nombre Planta <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nameproduc" name="nameproduc">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_companyname" class="text-black">Numero bolsa </label>
                                <input type="text" class="form-control" id="numbol" name="numbol">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_address" class="text-black">Valor unitario <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="vuni" name="vuni" min="" value="0" step="1" >
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_state_country" class="text-black">Cantidad <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="cantidad" name="cantidad">
                            </div>
                            <br>
                            <br>
                             <br>
                          
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_address" class="text-black">ESTADO <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="estado" name="estado" value="EN VENTA">
                            </div>
                        </div>
                            <div class="form-group">
                            <button class="btn btn-primary btn-lg py-3 btn-block" name="insertar" id="insertar" style="background-color: green;">Ingresar Producto</button>                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
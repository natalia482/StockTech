
<!DOCTYPE html>
<html lang="en">
 <head>
    <title>INGRESO CLIENTE  </title>
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


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        body{
            background-image:url(../diseño/images/4.png);
            background-repeat: none;
            background-attachment: scroll;
            background-size: auto;
        }

        div.row{
            margin-top:200px;
            display: flex;
            justify-content: center;
            }
        .h2{
            color:white;
            font-family: "Homer Simpson UI";
            font-size: 50px;
            text-align: center;
        }
        .label{
            font-family: "Homer Simpson UI";
            font-size: 20px;
            text-align: center;
            color: white
        }
        .Registro{
            font-family: "Homer Simpson UI";
            font-size: 30px;
            text-align: center;
            color: white;
            margin-top:10px;
        }
        .btn-group .ingresar:hover {
            background-color: #8FBC8F;
            color: white;
        }
        .ingresar{
           margin-left: 100px;
            margin-top:10px;
            background-color:#006400;
            opacity: 0.8;
            color: white;
            font-family:'Segoe UI';
            font-size: 25px;
            padding: 16px 100px;
            border: none;
            cursor: pointer;
            border-radius: 12px;
            text-align: center;
     }
        

</style>
</head>
<body>
    <form action="../../Controlador/Controladorcliente/ControladorLogin.php" method="post">
    <div class="site-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 mb-5 mb-md-0">      
                    <div class="p-1 p-lg-5 border">  
                    <h2 class="h2">INGRESO CLIENTE</h2>     
                            <div class="form-group ">
                                <div class="col-md-12">
                                <strong><label class="label">USUARIO <span class="text-danger">*</span></label></strong> 
                                    <input type="text" class="form-control" id="usuario" name="usuario" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <strong><label  class="label">CONTRASEÑA<span class="text-danger">*</span></label></strong>
                                <input type="password" class="form-control" id="pas" name="pas">
                            </div>
                            <div class="col-md-12">
                                <strong><p class="Registro"><a href="Registrocliente.php">REGISTRARSE</a></p></strong>
                            </div>
                        </div>         
                         <div class="btn-group">
                            <button class="ingresar" name="entrar">INGRESAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>

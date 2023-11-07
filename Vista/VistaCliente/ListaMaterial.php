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
  <title>LISTA MATERIAL</title>
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
    
    th{

      text-transform: uppercase;

    }
    .btn{
    color: white;
    font-family: "Homer Simpson UI";
    background-color: #57C93F;
    border: 2px solid green;
    text-shadow: 2px 2px 5px black;
    }
  </style>

  </head>
  <body>
  
  <div class="site-wrap">
  <?php include("../../Vista/diseño/layouts/header.php"); ?> 
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">LISTA MATERIAL</h2></div>

              </div>
            </div>

              <table class="table">

  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">PRODUCTO</th>
      <th scope="col">NUMERO BOLSA</th>
      <th scope="col">VALOR UNITARIO</th>
      <th scope="col">CANTIDAD</th>
      <th scope="col">EDITAR</th>

    </tr>
  </thead>
   <?php
        include('../../Modelo/Conexion/conexion.php');
        $db=Db::conectar();
        $resultado = ('SELECT * FROM producto ') ;
        $sql = $db->prepare($resultado);
        $sql->execute();
        while ($fila = $sql->fetch()) {
                          
 ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $fila['IDPRODUCTO']; ?></th>
      <th scope="row"><?php echo $fila['NOMPRODUC']; ?></th>
      <th scope="row"><?php echo $fila['NUMBOLSA']; ?></th>
      <th scope="row"><?php echo  number_format($fila['VUNITARIO'],0,'.',',') ; ?></th>
      <th>
        <div class="form-group">
          <a href="Cantidadproducto.php?id=<?php echo $fila['IDPRODUCTO'];?>">
          </a>
        </div>      
      </th>
      <th>
      <form action="../../CONTROLADOR/CONTROLADORVENDEDOR/AgotarProducto.php?id=<?php echo $fila['IDPRODUCTO'];?>" method="post">
        <div class="form-group">
        <a href="Editarproducto.php?id=<?php echo $fila['IDPRODUCTO'];?>">
            <button class="btn btn-primary " name="editar">EDITAR</button>
          </a>
        </div> 
      </FORM>     
      </th>      
    </tr>
    <?php
      }
     ?>
  </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<?php include("../../Vista/diseño/layouts/footer.php"); ?> 
</div>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>

  <script src="../js/main.js"></script>
    
  </body>
</html>
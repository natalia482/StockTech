<style type="text/css">
      
      .Logo{
        width: 150px;
        height:150px;
        margin-left:10px;
      }
      a.js-logo-clone{
        font-family: "Homer Simpson UI";
        font-size: 40px;
        text-align: center;
        color: white;
        margin-right: 1px;
        color: #006400;
      }
      nav{
        margin-top:-100px;
        margin-left: 30px;
        font-family: "Homer Simpson UI";
        text-shadow: 0.2px 0.2px 1px black;
        font-size: 60px;
        text-align: center;
        color: white;
      }
      .site-search-icon{
        font-family: "Segoe UI";
        font-size: 60px;
        text-align: center;
        color: black;
      }
      
      
    </style>  

<header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <img class="Logo" src="../diseño/images/logo2.png">
                <a href="menu.php" class="js-logo-clone">StockTech</a>
              </div>
              
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="ListaMaterial.php"><span class="icon icon-view_list"></span></a></li>
                  <form action="../../Controlador/ControladorCliente/ControladorSalir.php" method="post">
                 <div class="form-group">
                            <button class="btn btn-primary " name="salir">SALIR</button>
                            </div>
                  </form>
                </ul>
              </div> 
            </div>
          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li><a href="Menu.php">Inicio</a></li>
            <li><a href="ListaMaterial.php">Inventario</a></li>
            <li><a href="RegistrarInventario.php">Agregar</a></li>
          </ul>
        </div>
      </nav>
    </header>
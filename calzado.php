<?php
// Array de productos con su información
$productos = array(
  array(
      "imagen" => "https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fENBTFpBRE8lMjBIT01CUkV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60",
      "nombre" => "TENIS - TERRACOTA",
      "precio" => "$430.000"
  ),
  array(
      "imagen" => "https://images.unsplash.com/photo-1637437757614-6491c8e915b5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDExfHx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=60",
      "nombre" => "TENIS - GRIS",
      "precio" => "$340.000"
  ),
  array(
      "imagen" => "https://images.unsplash.com/photo-1512374382149-233c42b6a83b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=435&q=80",
      "nombre" => "TENIS - BLANCOS",
      "precio" => "$560.000"
  ),
  array(
      "imagen" => "https://images.unsplash.com/photo-1539874202413-c1f47b33169f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDN8fHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=500&q=60",
      "nombre" => "TENIS - VERDE OLIVA",
      "precio" => "$580.000"
  ),
  array(
      "imagen" => "https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80",
      "nombre" => "TENIS - ROJOS",
      "precio" => "$580.000"
  ),
  array(
      "imagen" => "https://images.unsplash.com/photo-1612387049695-637b743f80ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDEyfHx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=60",
      "nombre" => "TENIS - BLANCOS ",
      "precio" => "$510.000"
  ),
  
 
  // Agrega más productos aquí
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/17552d8682.js" crossorigin="anonymous"></script>
</head>

<body>
<header class="header">
          <nav class="nav">
              <a href="general.php" class="logo nav-like">BEAR FASHION</a>  
      
                <div class="Buscar">
                  <input type="text" placeholder="Buscar">
                </div>
                
              
                <button class="nav-toggle" aria-label="abrir menu"> <i class="fa-solid fa-bars"> </i> </button>
      
                
      
      
              <ul class="nav-menu nav-menu_visible">

                <!--Este es el principio del carrito-->
                <div class="container-icon">
                  <div class="container-cart-icon">
                      <button class="cart-shopping"> <i class="fa-solid fa-cart-shopping"></i> </button>
                  <div class="count-product">
                      <span id="contador-productos">0</span>
                  </div>
                  </div>
                  <div class="container-cart-product hidden-cart">
                      <div class="row-product">
                          <div class="cart-product">
                              <div class="info-cart-product">
                                  <span class="cantidad-producto-carrito"></span>
                                  <p class="titulo-producto-carrito"></p>
                                  <span class="precio-producto-carrito"></span>
                                  <button class="icon-close"><i class=" fa-solid fa-xmark"></i></button>
          
                              </div>
                              
                          </div>
                      </div>
                      <div class="cart-total hidden"> 
                          <h3>TOTAL</h3>
                          <SPAN class="total-pagar">$0</SPAN>
      
                      </div>
                      <p class="cart-empty"></p>
                  </div>
              </div>
              <!--Esto es el final del carrito-->
                  <li class="nav-menu-item"><a href="general.php" class="nav-menu-link nav-like">Inicio</a></li>
                  <li class="nav-menu-item"><a href="index.php" class="nav-menu-link nav-like">Cuenta</a></li>
                  <li class="nav-menu-item"><a href="Envio.html" class="nav-menu-link nav-like">Envio</a></li>
                  <li class="nav-menu-item"><a href="Contacto.html" class="nav-menu-link nav-like">Contacto</a></li>
            </ul>
              </nav> 
              
        </header>

    <div class="video"> <video src="Imagen/videoCALZADO.MP4" loop autoplay muted></video> </div>

    <div class="container-img">
        <?php foreach ($productos as $producto): ?>
            <div class="items">
                <figure><img src="<?php echo $producto['imagen']; ?>" alt="Dama"></figure>
                <div class="info-product">
                    <h2><?php echo $producto['nombre']; ?></h2>
                    <p class="price"><?php echo $producto['precio']; ?></p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <script src="carrito.js"></script>
</body>
</html>
</html>
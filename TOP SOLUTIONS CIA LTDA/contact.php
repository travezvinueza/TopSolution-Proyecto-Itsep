<?php
$conn = mysqli_connect('localhost','id20045573_root','[N?Pmg09%Z)owI*5','id20045573_itsep') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];
   
   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'holahola';
   }else{
      $message[] = 'Error al registrar';
   }
}
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Contactanos</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <span>
              Contacto
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.php">HOME</a>
                <a href="about.php">ACERCA DE NOTROS</a>
                <a href="feature.php">RASGO</a>
                <a href="contact.php">CONTACTANOS</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="d-flex ">
        <h2>
          Contacta con Nosotros
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
            <div class="contact_form-container">
              <div>
                <div>
                <input type="text" name="name" placeholder="Nombre" class="box" required>
                </div>
                <div>
                <input type="email" name="email" placeholder="Email" class="box" required>
                </div>
                <div>
                <input type="number" name="number" placeholder="Numero" class="box" required>
                </div>
                <div>
                <input type="datetime-local" name="date" class="box" required>
                </div>
                <!-- <div class="mt-5">
                  <input type="mensaje" name="mensaje" placeholder="Mensaje" class="box" required>
                </div> -->
                <div class="mt-5">
                  <button type="submit" name="submit"> Enviar </button>
                </div>
              </div>
            </div>
          </form>
          
        </div>
        <div class="col-md-6">
          <div class="contact_img-box">
            <img src="images/1.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->
  <!-- info section -->
  <section class="info_section layout_padding-top">
    <div class="info_logo-box">
      <h2>
        TOP SOLUTION
      </h2>
    </div>
    <div class="container layout_padding2">
      <div class="row">
        <div class="col-md-3">
          <h5>
            Sobre nosotros
          </h5>
          <p>
            Somos una empresa joven, la innovación es nuestra mejor estrategia del mercado y convertimos a nuestros clientes como nuestros aliados estratégicos para contribuir a un crecimiento mutuo. 
          </p>
        </div>
        <div class="col-md-3">
          <h5>
            Servicios
          </h5>
          <ul>
            <li>
              <a href="">
                Desarrollo Web
              </a>
            </li>
            <li>
              <a href="">
                Desarrollo Móvil
              </a>
            </li>
            <li>
              <a href="">
                Seguridad Informática
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>
            Contactanos
          </h5>
          <p>davidmiranda@gmail.com</p>
            <p></p>
            <p>+593983797759</p>
            <p></p>
            <p>Ecuador</p>
        </div>
        <div class="col-md-3">

          <div class="subscribe_container">
            <h5>
              Boletin informativo
            </h5>
            <div class="form_container">
              <form action="">
                <input type="email" placeholder="Introduce tu correo electrónico">
                <button type="submit">
                  Registrarse
                </button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="container">
      <div class="social_container">

        <div class="social-box">
          <a href="">
            <img src="images/fb.png" alt="">
          </a>
          <a href="">
            <img src="images/linkedin.png" alt="">
          </a>
          <a href="">
            <img src="images/instagram.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->
  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2019 All Rights Reserved. Design by
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
   
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   
   <title>AAHDD</title>
   <meta name="keywords" content="AAHD ,Association ait hammou pour le developpement durable">
   <meta name="description" content="Suite à la décision de l'assemblée générale fondatrice tenue le 28 octobre 2020 au douar Ait Hammou, l'Association Ait Hammou pour le Développement Durable a été créée conformément aux....">
   <meta name="author" content="Abdelbasset">
   
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/responsive.css">
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">

</head>

<body class="main-layout">
   <header>
      <?php 
      include 'header2.php'?>
   </header>

   <section class="slider_section ">
      <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">


         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="first-slide" width="100%" src="images\Image1.jpg" alt="First slide">
               <div class="container">
                  <div class="carousel-caption relative">
                    
                     <h1>Préserver<br> <strong class="black_bold">le&nbsp;patrimoine</strong><br>
                        <strong class="yellow_bold">local</strong>
                     </h1>
                     <p id="Nom-assoc">Association Ait Hammou  <br>
                     pour le developpement durable </p>
                     <a id="Voir-Objectifs" href="#Objectifs">Voir nous Objectifs</a>                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <img class="second-slide" width="100%"  src="images/Image2.jpg" alt="Second slide">
               <div class="container">
                  <div class="carousel-caption relative">
                     <h1>Coopérer <br> <strong class="black_bold">en terme </strong><br>
                        <strong class="yellow_bold">constructif </strong>
                     </h1>
                     <p>Association Ait Hammou  <br>
                     pour le developpement durable </p>
                     <a id="Voir-Objectifs" href="#Objectifs">Voir tous les Objectifs</a>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <img class="third-slide" width="100%" src="images/Image3.jpg" alt="Third slide">
               <div class="container">
                  <div class="carousel-caption relative">
                  <h1> Réaliser
                        <br> <strong class="black_bold">les Projets&nbsp;de</strong><br>
                        <strong class="yellow_bold"> développement</strong>
                  </h1>
                  <p>Association Ait Hammou  <br>
                  pour le developpement durable </p>
                  <a id="Voir-Objectifs" href="#Objectifs">Voir nous Objectifs</a>
                  </div>
               </div>
            </div>

         </div>


         <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class='fa fa-angle-right prevnext'></i>
         </a>
         <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class='fa fa-angle-left prevnext'></i>
         </a>

      </div>

   </section>
   <section>
   <?php
   include 'Objectif.php'?>
   
   </section>

   <footer>
   <?php
   include 'map.php'?>
  <?php include 'footer.php'?> 
   </footer>
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script>
      $(document).ready(function () {
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
         });

         $(".zoom").hover(function () {

            $(this).addClass('transition');
         }, function () {

            $(this).removeClass('transition');
         });
      });

   </script>
</body>

</html>
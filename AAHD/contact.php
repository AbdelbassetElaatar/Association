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
      <meta name="author" content="">
      
      <link rel="stylesheet" href="css/bootstrap.min.css">
      
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      
   </head>
   <body class="main-layout">
     
   <header>
      <?php 
            include 'header2.php'?>
   </header>
   <section id="contact">
       <div class="container">
           <h3 class="text-center text-uppercase">contactez-nous</h3>
           <div class="row">
             <div class="col-sm-12 col-md-4 col-lg-4 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Appelez-nous</h4>
                    <p>+212 660‑560579</p>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-4 col-lg-4 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Notre localisation</h4>
                   <address>Douar Ait Hammou, Tribu Tsiwant, Commune Ouled Ali Youssef, Cercle Outat El Haj, Province de Boulmane. </address>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-4 col-lg-4 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">email</h4>
                    <p>yoratech.ahba@gmail.com</p>
                  </div>
                </div>
             </div>
           </div>
       </div>
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
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>
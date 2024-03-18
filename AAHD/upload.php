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

  
<?php
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}

// Handle logout button click
if(isset($_POST['logout'])){
    header("Location: logout.php");
    exit;
}

// Check if file is being uploaded
if(isset($_FILES["fileToUpload"])) {
    // File upload logic
    $target_dir = "pdf/"; // specify the target directory
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // get the filename
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // get the file extension

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "<div class='alert alert-danger' role='alert'>
        Désolé, le fichier existe déjà.</div><br>";
        $uploadOk = 0;
    }

    // Check file size if needed
    // Limiting to 5MB in this example
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Désolé, votre fichier est trop volumineux.<br>";
        $uploadOk = 0;
    }

    // Allow only PDF files
    if ($fileType != "pdf") {
        echo "<div class='alert alert-warning' role='alert'>
        Désolé, seuls les fichiers PDF sont autorisés.</div><br>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<div class='alert alert-danger' role='alert'>
        Désolé, votre fichier n'a pas été téléchargé.</div><br>";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

            echo " <div class='alert alert-success' role='alert'>
            Le fichier " . basename($_FILES["fileToUpload"]["name"]) . "a été téléchargé.<br></div>";
            // Set session variable for upload success
            $_SESSION['upload_success'] = "Fichier téléchargé avec succès.";
        } else {
            echo "<div class='alert alert-warning' role='alert'>
            Désolé, une erreur s'est produite lors du téléchargement de votre fichier.</div><br>";
        }
    }
} else {
    // Display message if file is not being uploaded
    echo "<div class='alert alert-danger' role='alert'>
    Aucun fichier téléchargé.</div><br>";
}?>

<div style='display: flex;'>
<form action="Logout.php" style='padding:10px 10px' method="post">
    <input type="submit" class="btn" value="Déconnexion" name="logout">
</form>
<br>
<form action="Pdf_edit.php" style='padding:10px 10px' method="post">
    <input type="submit" class="btn"  value="Upload New File">
</form>
</div>
<br>
<footer>
  
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
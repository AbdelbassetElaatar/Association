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
<body>


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

// Function to list PDF files in the directory
function listPDFFiles($dir) {
    $pdfFiles = glob($dir . "*.pdf");
    return $pdfFiles;
}

// Function to delete a file
function deleteFile($file) {
    if (file_exists($file)) {
        unlink($file);
        return true;
    } else {
        return false;
    }
}

// Delete file if delete button is clicked
if(isset($_POST['delete'])) {
    $fileToDelete = $_POST['fileToDelete'];
    if(deleteFile($fileToDelete)) {
        echo "<div class='alert alert-warning' role='alert'>
        File deleted successfully.</div><br>";
    } else {
        echo "<div class='alert alert-info' role='alert'>
        Error deleting file.</div><br>";
    }
}

// List PDF files in the pdf folder
$pdfFiles = listPDFFiles("pdf/");
?>
<!-- File upload form -->
<form action="upload.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
    <label ><h3>Ajouter un fichier</h3></label><br>
    <input type="file" name="fileToUpload" id="fileToUpload" >
    <input type="submit" value="Ajouter PDF" name="submit">
</form>
<br><br>
<table class="table">
    <tr>
        <th>Nom du fichier</th>
        <th>Action</th>
    </tr>
    <?php foreach ($pdfFiles as $pdfFile): ?>
    <tr>
        <td><?php echo basename($pdfFile); ?></td>
        <td>
            <form action="" method="post">
                <input type="hidden" name="fileToDelete" value="<?php echo $pdfFile; ?>">
                <input type="submit"  class="btn btn-danger" value="Supprimer" name="delete">
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<!-- Logout button -->
<form action="Logout.php"  method="post">
    <input type="submit"  class="btn" value="Déconnexion" name="logout">
</form>
<br>

  <footer>
  
  <?php include 'footer.php'?> 
   </footer>
   <script>
    function validateForm() {
        console.log('validateForm function is called.');
        var fileInput = document.getElementById('fileToUpload');
        if (!fileInput || !fileInput.files || fileInput.files.length === 0) {
            alert('Please choose a file before submitting.');
            return false;
        }
        return true;
    }
</script>
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
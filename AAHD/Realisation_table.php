<?php
$pdfFolder = "pdf/"; // specify the folder where PDFs are stored
$pdfFiles = glob($pdfFolder . "*.pdf"); // get all PDF files in the folder
?>

<table class='table'>
    <thead class='thead-dark'>
        <tr>
            <th scope='col'>Nom</th>
            <th scope='col'>Telecharger</th>
            <th scope='col' style='text-align: right;'><a href='Login.php'><i class='fa fa-user-circle' style='color: white;'></i></a></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($pdfFiles as $pdfFile): ?>
        <tr scope='row'>
            <td><?php echo basename($pdfFile); ?></td>
            <td><a href='<?php echo $pdfFile; ?>' download>Enregistrer</a></td>
            
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>



<?php 
require_once 'lesclasses.php';
$stg=new Stagiaire("fouad","Achraf",2005,"Dev",16);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Information sur le stagaire</h1>
    <?php echo $stg; ?>
</body>
</html>
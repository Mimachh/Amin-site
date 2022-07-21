<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/bootstrap.min.css">
  

<body  data-bs-spy="scroll" data-bs-target="#nav_bar" class="py-5">
<?php
require_once 'Back/languages.php';
loadLanguage('en');
?>
    
    <header class=>
        <?php include 'Front/header.php';
        ?>
    </header>

    

      <?php
      include 'Front/carousel.html';?>
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
   
</body>

</html>
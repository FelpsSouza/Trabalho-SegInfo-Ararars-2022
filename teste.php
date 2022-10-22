<?php

  $paginas = ['home' =>'Minha página home aqui!','sobre','contato'];

  $paginas['contato'] = '<form><input type="text" placeholder="Seu nome..." /></form>';

?>

<!DOCTYPE html>
<html>
<head>
  <title>Site PHP</title>
</head>
<body>
  <?php
    echo $paginas['contato'];
  ?>
</body>
</html>
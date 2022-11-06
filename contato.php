<?php

  $paginas = ['home'=>'Minha página home aqui!','sobre'=>'Estou na página sobre','contato'=>'Definir um texto para contato'];

  $Felipe = ['Nome' => 'Felipe de Souza Silva<br>',
  'Funcao' => 'Programador.<br>Estudante na FHO|Uniararas.<br>',
  'Contato'=>'(19) 99701-6325'];

  function php_func(){
    echo "Stay Safe";
  }

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Trabalho Seg. Info.</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
  <script src='main.js'></script>
</head>

<body>
  
  <header>

  <?php

      foreach ($paginas as $key => $value) {
        echo '<a href="'.$key.'.php">'.ucfirst($key).'</a>';
      }

    ?>
  </header>
    
  <h1>My Curriculum</h1>
  <h2>CONTATO</h2>
  
  <div class="bloco">

  <div class="titulo">
    <b><h3 class="page" id="titulo">Contato</h3></b>
  </div>

    <p><b>Felipe S. Silva: </b> Email: felipe.ssilva804@alunos / Cel: (19) 99701-6325<br>
    <b>Guilherme Meyer: </b> Email: *****.fho.edu.br / Cel: (**) *****-****<br>
    <b>Paola Borsone: </b> Email: *****.fho.edu.br / Cel: (**) *****-****<br>
    <b>Guilherme Galvani: </b> Email: *****.fho.edu.br / Cel: (**) *****-****<br>
    <b>Ricardo Andrade: </b> Email: *****.fho.edu.br / Cel: (**) *****-****<br>
    <b>Hiago Chinaglia: </b> Email: *****.fho.edu.br / Cel: (**) *****-****</p>
    
  </div>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="./script.js"></script>
</body>

</html>

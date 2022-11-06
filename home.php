<?php

  $paginas = ['home'=>'Minha página home aqui!','sobre'=>'Estou na página sobre','contato'=>'Definir um texto para contato'];

  $User = ['Nome' => 'User Name<br>',
           'Funcao' => 'User Function.<br>Estudante na FHO|Uniararas.<br>',
           'Contato'=>'<br>User Cel. Number | User e-mail | User GitHub'];

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
  <h2>HOME</h2>

  <?php
      $pagina = (isset($_GET['page']) ? $_GET['page'] : 'home');

      if (!array_key_exists($pagina, $paginas)){
        $pagina = 'home.';
      }
  ?>

  <div class="bloco">
    
    <div class="titulo">
      <b><h3 class="page" id="titulo">Curriculo de <?php echo $User['Nome'];?></h3></b>
    </div>

    <p><?php
      foreach ($User as $info => $i){
        echo '<b>'.$info.':</b> '.$i;
      }
    ?></p>

  </div>

  <div class="container">

    <ul id="Felipe">
      <li style="--i: #4b0082; --j:#9932cc" action="www.google.com"  onclick="substituirNome('Felipe de Souza Silva')">
        <span class="icon">
          <ion-icon name="person-outline"></ion-icon>
        </span>
        <span class="text" onclick="substituirNome('Felipe')">
          Felipe
        </span>
      </li>


      <li style="--i: #e0e094; --j:#99e599">
        <span class="icon">
          <ion-icon name="person-outline"></ion-icon>
        </span>
        <span class="text" onclick="substituirNome('Guilherme Meyer')">
          Guilherme
        </span>
      </li>

      <li style="--i: #f0f8ff; --j:#ff1111" onclick="substituirNome('Ricardo Andrade')">
        <span class="icon">
          <ion-icon name="person-outline"></ion-icon>
        </span>
        <span class="text" onclick="substituirNome('Ricardo')">
          Ricardo
        </span>
      </li>

      <li style="--i: #1755ba; --j:#00bfff" onclick="substituirNome('Paola Oliveira')">
        <span class="icon">
          <ion-icon name="person-outline"></ion-icon>
        </span>
        <span class="text" onclick="substituirNome('Paola')">
          Paola
        </span>
      </li>

      <li style="--i: #ffa9c6; --j:#f434e2" onclick="substituirNome('Guilherme Galvani')">
        <span class="icon">
          <ion-icon name="person-outline"></ion-icon>
        </span>
        <span class="text" onclick="substituirNome('Galvani')">
          Galvani
        </span>
      </li>

      <li style="--i: #ffb6b6; --j:#ff0000" onclick="substituirNome('Hiago Chinaglia')">
        <span class="icon">
          <ion-icon name="person-outline"></ion-icon>
        </span>
        <span class="text" onclick="substituirNome('Hiago')">
          Hiago
        </span>
      </li>

    </ul>
  </div>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="./script.js"></script>

</body>

</html>

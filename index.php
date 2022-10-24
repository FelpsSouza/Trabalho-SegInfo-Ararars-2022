<?php

  $paginas = ['home'=>'Minha página home aqui!','sobre'=>'Estou na página sobre','contato'=>'Definir um texto para contato'];
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
        echo '<a href="?page='.$key.'">'.ucfirst($key).'</a>';
      }
    ?>
  </header>
    
  <h1>My Curriculum</h1>
  <h2><?php
      $pagina = (isset($_GET['page']) ? $_GET['page'] : 'home');

      if (!array_key_exists($pagina, $paginas)){
        $pagina = 'home';
      }

      echo ucfirst($pagina);

?></h2>

  <div class="bloco">
    <b><p class="page" id="titulo"><?php echo $paginas[$pagina];?><p></b>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the 
        1500s, when an unknown printer took a galley of type and scrambled it to
        make a type specimen book. It has survived not only five centuries, but
        also the leap into electronic typesetting, remaining essentially
        unchanged. It was popularised in the 1960s with the release of Letraset
        sheets containing Lorem Ipsum passages, and more recently with desktop
        publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>

  <div class="container">
    <ul id="Felipe">
    <li style="--i: #4b0082; --j:#9932cc" action="www.google.com"  onclick="substituirNome('Felipe')">
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
        <span class="text" onclick="substituirNome('Guilherme')">
          Guilherme
        </span>
      </li>
      <li style="--i: #f0f8ff; --j:#ff1111" onclick="substituirNome('Ricardo')">
        <span class="icon">
          <ion-icon name="person-outline"></ion-icon>
        </span>
        <span class="text" onclick="substituirNome('Ricardo')">
          Ricardo
        </span>
      </li>
      <li style="--i: #1755ba; --j:#00bfff" onclick="substituirNome('Paola')">
        <span class="icon">
          <ion-icon name="person-outline"></ion-icon>
        </span>
        <span class="text" onclick="substituirNome('Paola')">
          Paola
        </span>
      </li>
      <li style="--i: #ffa9c6; --j:#f434e2" onclick="substituirNome('Galvani')">
        <span class="icon">
          <ion-icon name="person-outline"></ion-icon>
        </span>
        <span class="text" onclick="substituirNome('Galvani')">
          Galvani
        </span>
      </li>
      <li style="--i: #ffb6b6; --j:#ff0000" onclick="substituirNome('Hiago')">
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

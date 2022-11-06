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
  <h2>SOBRE</h2>
  
  <div class="bloco">

  <div class="titulo">
    <b><h3 class="page" id="titulo">Sobre o trabalho</h3></b>
  </div>

    <p>Este trabalho consiste em um site que apresenta um resumo dos curriculos dos membros do grupo.<br>
       Para o teste de segurança deste site será realizado uma invasão através do SQL Injection, buscando 
       vulnerabilidades no site e tentar obter algum tipo de dado sigiloso ou que está mantido somente no
       banco de dados.
    </p>
    
  </div>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="./script.js"></script>
</body>

</html>

<?php
  // header.php
?>

  <head>
    <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>InfoJogos</title>
      <link rel="icon" href="imagens/infojogosicon.png" type="image/x-icon">
      <link rel="stylesheet" href="style.css" />
    </head>
    <body>
      <!-- Header -->
      <header class="header">
        <nav class="nav">
          <a href="#" class="nav_logo"><img src="imagens/infojogos.png"></a>
    
          <ul class="nav_items">
            <li class="nav_item">
              <a href="index.php" class="nav_link active" >Home</a>
              <a href="#" class="nav_link">Produtos</a>
              <a href="#" class="nav_link">Contactos</a>
            </li>
          </ul>
    
          <button class="button" id="form-open">Iniciar sessão</button>
          
          <?php   if (isset($_SESSION['login'])) { echo $_SESSION['loginMsg']; }  ?>
    
        </nav>
      </header>

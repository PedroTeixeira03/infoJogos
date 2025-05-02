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
          <a class="nav_logo"><img src="imagens/infojogos.png"></a>
    
          <ul class="nav_items">
            <li class="nav_item">
              <a href="index.php" class="nav_link active" >Home</a>
              <a href="produtos.php" class="nav_link">Produtos</a>
              <a href="contactos.php" class="nav_link">Contactos</a>
            </li>
          </ul>
    
          <button class="button" id="form-open">Iniciar sessão</button>
          
          <?php   if (isset($_SESSION['login'])) { echo $_SESSION['loginMsg']; }  ?>
    
        </nav>
      </header>
      <!-- Home -->
    <section class="home">
      <div class="form_container">
        <!-- <i class="uil uil-times form_close"></i> -->
        <span class="form_close">×</span>

        <!-- Login From -->
        <div class="form login_form">
          <form action="registar.php" method="post">
            <h2>Iniciar Sessão</h2>
            <div class="input_box">
              <input type="email" placeholder="Email" name="usermail" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Password" name="pwd" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <div class="option_field">
              <span class="checkbox">
                <input type="checkbox" id="check" />
                <label for="check">Lembrar-me</label>
              </span>
              <a href="#" class="forgot_pw">Esqueceu a sua password?</a>
            </div>

            <button class="button" name= "login">Entrar agora</button>

            <div class="login_signup">Não tem uma conta?<a href="" id="signup">Criar</a></div>
          </form>
        </div>

        <!-- Signup From -->
        <div class="form signup_form">
          <form action="registar.php" method="POST">
            <h2>Criar</h2>
            <div class="input_box">
              <input type="email" id="email" placeholder="Email" name="email" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" id="pass1" placeholder="Password" name="pass1" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <div class="input_box">
              <input type="password"  id="pass2" placeholder="Confirmar password" name="pass2" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <button class="button" name="registar">Criar</button>

            <div class="login_signup">Já tem uma conta? <a href="" id="loginlink">Entrar</a></div>
          </form>
        </div>
      </div>
    </section>

    <script src="script.js"></script>

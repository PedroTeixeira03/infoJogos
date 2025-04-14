<?php
session_start();
if (!(isset($_SESSION['login']))) { // ##### utilizador não autenticado ###### 

}
include ('header.php');
?>


        <button class="button" id="form-open">Iniciar sessão</button>
        
        <?php   if (isset($_SESSION['login'])) { echo $_SESSION['loginMsg']; }  ?>

      </nav>
    </header>

    <!-- Home -->
    <section class="home">
      <div class="form_container">
        <i class="uil uil-times form_close"></i>
        <!-- Login From -->
        <div class="form login_form">
          <form action="autenticar.php" method="post">
            <h2>Iniciar Sessão</h2>
            <div class="input_box">
              <input type="text" placeholder="login" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="email" placeholder="Email" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Password" required />
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

            <button class="button">Entrar agora</button>

            <div class="login_signup">Não tem uma conta?<a href="registar.php" id="signup">Criar</a></div>
          </form>
        </div>

        <!-- Signup From -->
        <div class="form signup_form">
          <form action="registar.php"  method="POST">
            <h2>Criar</h2>
            <div class="input_box">
              <input type="text" id="loginput" placeholder="login" name="user" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="email" id="email" placeholder="Email" name="email" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" id="pass1" placeholder="Password" mñame="pass1" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <div class="input_box">
              <input type="password"  id="pass2" placeholder="Confirmar password" name="pass2"required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <button class="button">Criar</button>

            <div class="login_signup">Já tem uma conta? <a href="#" id="loginlink">Entrar</a></div>
          </form>
        </div>
      </div>
    </section>

    <script src="script.js"></script>

    <section>          
			<div class="bloco" >
				<br>
				<h3 align=center> InfoJogos </h3>	
				<br><br><br>
        <br>
				<p style="text-align:justify";>Um novo site para comprar a bom preço os jogos atuais e antigos!!!!
				<br>
				Queres os melhores jogos para PC, PlayStation ou Xbox? No InfoJogos, encontras uma vasta seleção de títulos para todas as plataformas, desde os lançamentos mais aguardados até aos clássicos intemporais.
        Compra de forma fácil e segura e recebe os teus jogos rapidamente para começares a jogar sem esperas. Explora a nossa coleção e encontra o teu próximo grande jogo hoje mesmo!!!!
				</p>
				<br><br>	
				<br><br>
      </div>


	<!-- ############### Rodapé do site ############################## -->
  <footer>
			<?php include('footer.php'); ?>
		</footer>		
     </body>
</html>
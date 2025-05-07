<?php
session_start();
if (!(isset($_SESSION['login']))) {
  // Utilizador não autenticado
} else {
  echo '<a href="registar.php?l=0">logout</a>';
}
?>
<html lang="pt">
<?php include('header.php'); ?>

<style>
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
  }

  main {
    flex: 1;
  }

  .footer {
    padding: 2px;
    color: #fff;
    text-align: center;
    background-color: #fff;
  }
</style>

<body>
  <main>
    <section>          
      <div class="bloco">
        <br>
        <h3 align="center">InfoJogos</h3>  
        <br><br><br><br>
        <p style="text-align:justify;">
          Um novo site para comprar a bom preço os jogos atuais e antigos!!!!
          <br><br>
          Queres os melhores jogos para PC, PlayStation ou Xbox? No InfoJogos, encontras uma vasta seleção de títulos para todas as plataformas, desde os lançamentos mais aguardados até aos clássicos intemporais.
          Compra de forma fácil e segura e recebe os teus jogos rapidamente para começares a jogar sem esperas. Explora a nossa coleção e encontra o teu próximo grande jogo hoje mesmo!!!!
        </p>
        <br><br><br><br>
      </div>
    </section>
  </main>

  <?php include('footer.php'); ?>
</body>
</html>

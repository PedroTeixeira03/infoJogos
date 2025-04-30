<?php
session_start();
if (!(isset($_SESSION['login']))) { // ##### utilizador não autenticado ###### 

}else{
  echo '<a href="registar.php?l=0">logout</a>';
}
?>
<html lang="pt">
  <!-- <head> -->
   <?php include('header.php'); ?>

    

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

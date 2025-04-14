<?php include('header.php'); ?>
<button class="button" id="form-open">Iniciar sessão</button>
        
        <?php   if (isset($_SESSION['login'])) { echo $_SESSION['loginMsg']; }  ?>

      </nav>
    </header>

	
		<section>
			<div class="bloco" align="center" >
				<br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1501.7108610132104!2d-8.552041159667821!3d41.16896813018609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd24639f4b95e9eb%3A0x8d5bc9d9f00952a!2sEisnt%20-%20Forma%C3%A7%C3%A3o%20e%20Consultoria!5e0!3m2!1spt-PT!2spt!4v1671583598441!5m2!1spt-PT!2spt" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				
				<p style="color:#00008B"><b>Morada: Avenida Soutelo Nº 408</b></p>
				<p style="color:#00008B"><b>Código Postal: 4500-525 Rio Tinto</b></p>
				<p style="color:#00008B"><b>Telefone: 22354567</b></p>
				<p style="color:#00008B"><b>Email: admin@paf.pt</b></p>
			</div>
		</section >
<!-- ############### Rodapé do site ############################## -->
		<footer>
			<?php include ('footer.php'); ?>
		</footer>		
	</body>
</html>

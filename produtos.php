<?php include('header.php'); ?>
<button class="button" id="form-open">Iniciar sessão</button>
        
        <?php   if (isset($_SESSION['login'])) { echo $_SESSION['loginMsg']; }  ?>

      </nav>
      </header>

      <section>     
			<div class="tabela">
				<br>
				<table width="800px"  align="center" border="1" style="border-color: white;";>
					<tr>
						<td align="center" colspan="3">
							<h2 style="color:#0077be;" align="center"> Catálogo de jogos</h2>
						</td>
					</tr>
					
					<?php 
						include('ligaDados.php');
						$sql = "SELECT * FROM produtos";  
						$result = mysqli_query($ligacao, $sql);  

						while($registo = mysqli_fetch_assoc($result)) 
						{
							echo "<tr><td align='center'><strong>".$registo['Marca']."<br>".$registo['Modelo']."<br>".$registo['Detalhes']."<br>".$registo['preco']." €</strong> </td>";
							echo "<td align='center'><img src='fotos/".$registo['imagem']."' width='180px'></td> </tr>";
						}
					?>
				</table>
			</div>
		</section >




<footer>
    <?php include ('footer.php'); ?>
</footer>		
</body>
</html>

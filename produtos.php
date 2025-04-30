<?php
//session_start();
if (!(isset($_SESSION['login']))) { // ##### utilizador não autenticado ###### 
    $_SESSION["tipo"]=0;
}

include('header.php'); 

include('ligaDados.php');
$db = new ligaDados();
$dados = $db->listar_produtos(); 

?>
  
        <section>     
			<div class="bloco">
				<br>
				<table width="800px"  align="center" border="1">
					<tr>
						<td align="center" colspan="4">
							<h2 style="color:#FFF;" align="center"> Catálogo de jogos</h2>
						</td>
					</tr>

					<tr>
						<td align='center'>
							Marca
						</td>
						<td align='center'>
							Modelo
						</td>
						<td align='center'>
							Descrição
						</td>
						<td align='center'>
							Imagem
						</td>
					</tr>
					
					<?php 
						
						foreach ($dados as $registo)
						{
							echo "<tr><td align='center'>".$registo['marca']."</td>";
							echo "<td align='center'>".$registo['modelo']."</td>";
							echo "<td align='center'>".$registo['descricao']."</td>";
							echo "<td align='center'><img src='".$registo['imagem']."' width='180px'></td></tr>";
						}
					?>
				</table>
			</div>
		</section >

        <footer>
			<?php include('footer.php'); ?>
		</footer>		
	</body>
</html>
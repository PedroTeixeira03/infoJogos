<?php
session_start();
if (!(isset($_SESSION['login']))) { // ##### utilizador não autenticado ###### 
	$_SESSION['tipo']=0;
}else{
  echo '<a href="registar.php?l=0">logout</a>';
  echo $_SESSION['tipo'];
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
					<?php
						if($_SESSION['tipo'] == 1 || $_SESSION['tipo'] == 0){
							echo '<td align="center" colspan="7">';
						}
						else{
							echo '<td align="center" colspan="5">';
						}
					?>	
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
							Preço
						</td>
						<td align='center'>
							Descrição
						</td>
						<td align='center'>
							Imagem
						</td>
						<?php
						if($_SESSION['tipo'] == 1  || $_SESSION['tipo'] == 0){
							echo "<td align='center'>
										Apagar
										</td>
										 <td align='center'>
										Atualizar
										</td>";
						}
						?>
					</tr>
					
					<?php 
						
						foreach ($dados as $registo)
						{
							echo "<tr><td align='center'>".$registo['marca']."</td>";
							echo "<td align='center'>".$registo['modelo']."</td>";
							echo "<td align='center'>".$registo['preco']."</td>";
							echo "<td align='center'>".$registo['descricao']."</td>";
							echo "<td align='center'><img src='".$registo['imagem']."' width='180px'></td>";
							if($_SESSION['tipo'] == 1){
								echo "<td align='center'>".'<a href="registar.php?ap='.$registo['n_produto'].'">teste 1</a>'."</td>";
								echo "<td align='center'>"."teste 2"."</td>";
							}
							echo "</tr>";
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
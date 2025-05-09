<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Inserir</title>

</head>
  <?php include('header.php'); ?>
<body>
  <main>
    <section class="home">
      <div class="bloco">
        <div class="form">
          <form action="registar.php" method="POST" enctype="multipart/form-data">
            <h2>Inserir Produto</h2>

            <div class="input_box">
              <input type="text" name="marca" placeholder="Marca" required>
            </div>

            <div class="input_box">
              <input type="text" name="modelo" placeholder="Modelo" required>
            </div>

            <div class="input_box">
              <input type="number" name="n_plataforma" placeholder="Código da Plataforma" required>
            </div>

            <div class="input_box">
              <input type="number" step="0.01" name="preco" placeholder="Preço (€)" required>
            </div>

            <div class="input_box">
              <input type="text" name="descricao" placeholder="Descrição" required>
            </div>
            
            <div class="input_box">
              <input type="file" name="imagem" accept="image/*" required>
            </div>

            <div class="botao_centro">
              <button class="button_inserir" type="submit" name="inserir">Inserir</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>
    <?php include('footer.php'); ?>
</body>

</html>

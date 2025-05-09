<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Inserir</title>
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
</head>

<body>
  <?php include('header.php'); ?>

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

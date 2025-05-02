<section class="home">
  <div class="form_container">
    <i class="uil uil-times form_close"></i>
    <div class="form">
      <form action="inserir.php" method="POST" enctype="multipart/form-data">
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

        <button class="button" type="submit" name="inserir">Inserir</button>
      </form>
    </div>
  </div>
</section>

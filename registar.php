<?php 
include('ligaDados.php'); 
$db = new ligaDados();

//Registar Utilizador
if (isset($_POST['registar'])){
  if(isset($_POST['user']) && isset($_POST['email']) && isset($_POST['pass1']) && isset($_POST['pass2'])) {
    if($_POST['pass1'] == $_POST['pass2']){
      $password1 =MD5($_POST["pass1"]);
      
      $db->registo($_POST['user'],$_POST['email'],$password1);
    }
    else{
      echo("Password não coincide");
    }
  }
}

//Efetuar o login
if(isset($_POST['login'])){
  if(isset($_POST['usermail']) && isset($_POST['pwd'])) {
    echo "reg: ".$_POST['usermail']."e pass ".$_POST['pwd'];
    if(!empty($_POST['pwd']) && !empty($_POST['usermail'])){
      $password1 =MD5($_POST["pwd"]);
      $db->login($_POST['usermail'],$password1);
    }
    else{
      echo("Preencha todos os campos");
    }
  }
}

//Efetuar o logout
if (isset($_GET['l']) && $_GET['l']== 0){
  echo("logout");
  $db->logout();
}

//Apagar Produto
if (isset($_GET['ap'])){
  $db->apagar_produto($_GET['ap']);
}

//Inserir 
if (isset($_POST['inserir'])) {
  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $n_plataforma = $_POST['n_plataforma'];
  $preco = $_POST['preco'];
  $descricao = $_POST['descricao'];

  $imagem = file_get_contents($_FILES['imagem']['tmp_name']);

  $stmt = $conn->prepare("INSERT INTO produtos (marca, modelo, n_plataforma, preco, descricao, imagem) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("sssdss", $marca, $modelo, $n_plataforma, $preco, $descricao, $null);

  $null = NULL;
  $stmt->send_long_data(5, $imagem);

  if ($stmt->execute()) {
    echo "Produto inserido com sucesso!";
  } else {
    echo "Erro ao inserir: " . $stmt->error;
  }

  $stmt->close();
}
$conn->close();
?>

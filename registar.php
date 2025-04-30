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



?>

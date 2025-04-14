<?php 
include('ligaDados.php'); 
$db = new ligaDados();

if( isset($_POST['user']) && isset($_POST['email']) && isset($_POST['pass1']) && isset($_POST['pass2'])) {
  if($_POST['pass1'] == $_POST['pass2']){
    $password1 =MD5($_POST["passe1"]);
		$password2 =MD5($_POST["passe2"]);
    
    $db->registo($_POST['user'],$_POST['email'],$password1,$password2);

  }
  else{
    echo("Password não coincide");
  }

}


					if(!empty($_POST['utilizador'])) {						
						$utilizador = $_POST["login"];
            $email = $_POST["email"];
						$password1 =MD5($_POST["passe1"]);
						$password2 =MD5($_POST["passe2"]);
						if($password1==$password2)
						{					
							$sql = "INSERT INTO utilizadores VALUES(null, '$utilizador', '$email','$password1')";
							$resultado =mysqli_query($ligacao, $sql);

							if ($resultado) {
								echo "Dados inseridos com sucesso <br>";
               $_SESSION['login'] = true;
              $_SESSION['loginMsg'] = "<p align='center' style='color: blue;'>Login com sucesso </p>  "; 
              $_SESSION['nome']=$row['nome'];
          
              mysqli_free_result($result);
             //header('Location: index.php');

							} else {
								echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
                $_SESSION['loginMsg'] = "<br><br><p align='center' style='float: right; color: red;'>Login Falhou </p>  ";   
              $_SESSION['tipo']=0;   // Utilizador tipo não autenticado
              $_SESSION['nome']="erro";
             // header('Location: index.php');
							}
						} else {
              
              echo "Palavras passe diferentes";
            }
            mysqli_close($ligacao);
          
          }
		

?>

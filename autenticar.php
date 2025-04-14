<?php 
	session_start();
	require_once "ligaDados.php";
 
	$utilizador = $_POST['login'];  
	$password = $_POST['password'];  
  
	//para prevenir injeção de código perigoso no mysqli  
	$utilizador = mysqli_real_escape_string($ligacao , $utilizador);
	// MD5 - para criptografar da palavra passe   
	$password = mysqli_real_escape_string($ligacao , $password);  
  
	$sql = "select * from utilizadores where login='$utilizador' and passe='$password'";  
	$result = mysqli_query($ligacao, $sql);  
	$count = mysqli_num_rows($result);  
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);   
	
	if($count > 0){  
		$_SESSION['login'] = true;
		$_SESSION['loginMsg'] = "<p align='center' style='color: blue;'>Login com sucesso </p>  "; 
		$_SESSION['nome']=$row['nome'];
		if($row['nome']=="admin") 
			 $_SESSION['tipo']=1; // Utilizador tipo admin
		else $_SESSION['tipo']=2; // Utilizador tipo autenticado não administrador

		mysqli_free_result($result);
		header('Location: index.php');
	}  
	else{  
		$_SESSION['loginMsg'] = "<br><br><p align='center' style='float: right; color: red;'>Login Falhou </p>  ";   
		$_SESSION['tipo']=0;   // Utilizador tipo não autenticado
		$_SESSION['nome']="erro";
		header('Location: index.php');
	}     	
	mysqli_close($ligacao);
?> 
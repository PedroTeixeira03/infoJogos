<?php
class ligaDados{
	private $servidor = 'localhost';
	private $dbnome = 'bdpaf';
	private $user = 'root';
	private $pass = '';

	public $liga;
	
	//Função para fazer a ligação à base de dados
	public function __construct(){
		try{
			$this->liga = new PDO('mysql:host='.$this->servidor.';dbname='.$this->dbnome,$this->user,$this->pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		}catch(PDOException $e){
			echo 'ERRO: '.$e->getMessage();
			die();
		}
	}

	function registo($utilizador, $email,$password1){

		$tipo = 2;

		$sql = "INSERT INTO utilizadores VALUES(null, :nome, :email,:pass, :tipo)";

		$stmt = $this->liga->prepare($sql);
		$stmt->bindParam(':nome',$utilizador);
		$stmt->bindParam(':email',$email);
		$stmt->bindParam(':pass',$password1);
		$stmt->bindParam(':tipo',$tipo);
		$stmt->execute();
		
		$inf = $stmt->fetchAll();

		//verificar se houve login correto
		$total = $stmt->rowCount();
		
		if($total > 0){
			session_start();
			foreach($inf as $dados){
				$_SESSION['login'] = true;
				$_SESSION['loginMsg'] = "<p align='center' style='color: blue;'>Login com sucesso </p>  "; 
				$_SESSION['nome']=$dados['login'];
		
				if($dados['tipoUtilizador']==1)
				{
					$_SESSION['tipo']=1; // Utilizador tipo admin
				} else {
					$_SESSION['tipo']=2; // Utilizador tipo autenticado não administrador
				}
				
		
				header("location: index.php");
			}
		}
	}

}
?>

     
 <?php
     $nome=$_POST['nome'];
	 $usuario=$_POST['usuario'];
	 $senha=$_POST['senha'];
	 $tipo=$_POST['tipo'];
	 
	 $sql="insert into login (nome,usuario,senha,tipo)
	     values('$nome','$usuario','$senha','$tipo')";
	
	$con=mysqli_connect("127.0.0.1","root","","celest");
	    if(mysqli_connect_errno())
		{ echo "Faild to connect to MySQL: ".mysqli_connect_error();}
		mysqli_query($con,$sql);
		    echo "<center> <h2> Usuário cadastrado com sucesso! </center> </h2> <p> <br>";
	mysqli_close($con);
?>
    <center> <h2> <a href="cadastrarUsuario.php"> VOLTAR </a> </h2> </center>
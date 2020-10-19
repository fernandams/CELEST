<?php 
    $nome=$_POST['nome'];
	$sexo=$_POST['sexo'];
	$dn=$_POST['dn'];
	$resp=$_POST['resp'];
	$end=$_POST['end'];
	$fone=$_POST['fone'];
	$idioma=$_POST['idioma'];
	$login_id=$_POST['login_id'];
	$turmas_id=$_POST['turmas_id'];
	
	$sql="insert into alunos (nome,sexo,dn,resp,end,fone,idioma,login_id,turmas_id)
	     values('$nome','$sexo','$dn','$resp','$end','$fone','$idioma','$login_id','$turmas_id')";
		 
    $con=mysqli_connect("127.0.0.1","root","","celest");
	    if(mysqli_connect_errno())
		{ echo "Failed to connect to MySQL: ".mysqli_connect_error();}
		
	    mysqli_query($con,$sql);
		    echo "<center> <h2> Aluno cadastrado com sucesso! </center> </h2> <p> <br>";
    mysqli_close($con);
?>
 <?php
 
	 $alunos_matr=$_POST['alunos_matr'];
	  
	 $sql="insert into notas (alunos_matr)
	     values('$alunos_matr')";
	
	
	$con=mysqli_connect("127.0.0.1","root","","celest");
	    if(mysqli_connect_errno())
		{ echo "Faild to connect to MySQL: ".mysqli_connect_error();}
		mysqli_query($con,$sql);
		    echo "<center> <h2> Notas cadastrado com sucesso! </center> </h2> <p> <br>";
	mysqli_close($con);
?>
   <center> <h2> <a href="cadastrarAluno.php"> VOLTAR </a> </h2> <center>
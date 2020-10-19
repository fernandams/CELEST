<?php
     $tnome=$_POST['tnome'];
	 $idioma=$_POST['idioma'];
	 $dias=$_POST['dias'];
	 $turno=$_POST['turno'];
	 $horario=$_POST['horario'];
	 $nivel=$_POST['nivel'];
	 $serie=$_POST['serie'];
	 $sala=$_POST['sala'];
	 $semestre=$_POST['semestre'];
	 $ano=$_POST['ano'];
	 $professores_matr=$_POST['professores_matr'];
	 
	 $sql="insert into turmas (tnome,idioma,dias,turno,horario,nivel,serie,sala,semestre,ano,professores_matr)
	     values('$tnome','$idioma','$dias','$turno','$horario','$nivel','$serie','$sala','$semestre','$ano','$professores_matr')";
	
	$con=mysqli_connect("127.0.0.1","root","","celest");
	    if(mysqli_connect_errno())
		{ echo "Faild to connect to MySQL: ".mysqli_connect_error();}
		mysqli_query($con,$sql);
		    echo "<center> <h2> Turma cadastrada com sucesso! </center> </h2> <p> <br>";
	mysqli_close($con);
?>
    <center> <h2> <a href="cadastrarTurma.php"> VOLTAR </a> </h2> </center>
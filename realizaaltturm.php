 <?php
     $id=$_POST['id'];
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
	 
      $sql="update turmas set
      id='$id',tnome='$tnome', idioma='$idioma',dias='$dias',turno='$turno', horario='$horario', nivel='$nivel', serie='$serie', sala='$sala', semestre='$semestre', ano='$ano', professores_matr='$professores_matr'
      where id=$id";
      $con=mysqli_connect("127.0.0.1","root","","celest");
      if (mysqli_connect_errno())
      { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
      mysqli_query($con, $sql);
      echo "<center> <h2> Turma alterada com sucesso!</center></h2><p><br>";
      mysqli_close($con);
?>
 <center> <h2> <a href="listarturma.php"> VOLTAR </a> </h2> </center>
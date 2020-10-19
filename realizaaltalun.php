 <?php
         $matr=$_POST['matr'];
	     $nome=$_POST['nome'];
	     $sexo=$_POST['sexo'];
	     $dn=$_POST['dn'];
	     $resp=$_POST['resp'];
	     $end=$_POST['end'];
	     $fone=$_POST['fone'];
	     $idioma=$_POST['idioma'];
	     $login_id=$_POST['login_id'];
	     $turmas_id=$_POST['turmas_id'];
	 
      $sql="update alunos set
      matr='$matr',nome='$nome',sexo='$sexo',dn='$dn',resp='$resp',end='$end',fone='$fone',idioma='$idioma', login_id='$login_id',turmas_id='$turmas_id'
      where matr=$matr";
	  
      $con=mysqli_connect("127.0.0.1","root","","celest");
      if (mysqli_connect_errno())
      { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
      mysqli_query($con, $sql);
      echo "<center> <h2> Aluno alterado com sucesso! </center></h2><p><br>";
      mysqli_close($con);
?>
 <center> <h2> <a href="listaralun.php"> VOLTAR </a> </h2> </center>
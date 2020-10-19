 <?php
  
 $idnotas=$_POST['idnotas'];
 $bimestre1=$_POST['bimestre1'];
 $bimestre2=$_POST['bimestre2'];
 $media=$_POST['media'];
 $recup=$_POST['recup'];

 $sql="update notas set
idnotas='$idnotas',bimestre1='$bimestre1',bimestre2='$bimestre2',media='$media',recup='$recup'
where idnotas=$idnotas";
 $con=mysqli_connect("127.0.0.1","root","","celest");
if (mysqli_connect_errno())
 { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
mysqli_query($con, $sql);
echo "<center><h2>Notas Alteradas com sucesso!</center></h2><p><br>";
 mysqli_close($con);
		  
?>
 <center> <h2> <a href="prof_listagemturmas.php"> VOLTAR </a> </h2> </center>
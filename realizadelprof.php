<?php
     $matr=$_POST['matr'];
	 $sql="delete from professores where matr='$matr'";
	 
	 $con=mysqli_connect("127.0.0.1","root","","celest");
	    if(mysqli_connect_errno())
		{ echo "Faild to connect to MySQL: ".mysqli_connect_error();}
		mysqli_query($con,$sql);
		    echo "<center> <h2> Professor Deletado com sucesso! </center> </h2> <p> <br>";
	mysqli_close($con);
?>
    <center> <h2> <a href="listarprof.php"> VOLTAR </a> </h2> </center>
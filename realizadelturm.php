<?php
     $id=$_POST['id'];
	 $sql="delete from turmas where id='$id'";
	 
	 $con=mysqli_connect("127.0.0.1","root","","celest");
	    if(mysqli_connect_errno())
		{ echo "Faild to connect to MySQL: ".mysqli_connect_error();}
		mysqli_query($con,$sql);
		    echo "<center> <h2> Turma Deletada com sucesso! </center> </h2> <p> <br>";
	mysqli_close($con);
?>
    <center> <h2> <a href="listarturma.php"> VOLTAR </a> </h2> </center>
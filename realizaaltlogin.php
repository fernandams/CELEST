 <?php
      $id=$_POST['id'];
      $nome= $_POST['nome'];
      $usuario=$_POST['usuario'];
      $senha=$_POST['senha'];
      $tipo=$_POST['tipo'];
     
      $sql="update login set
      id='$id',nome='$nome',usuario='$usuario',senha='$senha',tipo='$tipo'
      where id=$id";
      $con=mysqli_connect("127.0.0.1","root","","celest");
      if (mysqli_connect_errno())
      { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
      mysqli_query($con, $sql);
      echo "<center> <h2> Usuário alterado com sucesso!</center></h2><p><br>";
      mysqli_close($con);
?>
 <center> <h2> <a href="listarLogin.php"> VOLTAR </a> </h2> </center>
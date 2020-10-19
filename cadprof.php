<?php
        $nome= $_POST['nome'];
        $cpf=$_POST['cpf'];
        $sexo=$_POST['sexo'];
        $dn= $_POST['dn'];
        $end= $_POST['end'];
        $fone= $_POST['fone'];
		$email= $_POST['email'];
        $graduacao=$_POST['graduacao'];
        $idioma=$_POST['idioma'];
        $login_id= $_POST['login_id'];
      
        $sql = "insert into professores(nome,cpf,sexo,dn,end,fone,email,graduacao,idioma,login_id) values('$nome','$cpf','$sexo','$dn','$end','$fone','$email','$graduacao','$idioma','$login_id')";
        $con=mysqli_connect("127.0.0.1","root","","celest");
        if (mysqli_connect_errno())
            { echo "Failed to connect to MySQL: " . mysqli_connect_error();}
        mysqli_query($con,$sql);
             echo "<center> <h2>Professor cadastrado com sucesso!</center> </h2><p><br>";
        mysqli_close($con);
?>
<center> <h2><a href="cadastrarProf.php"> VOLTAR </a></h2></center>
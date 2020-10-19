<?php
include("seguranca.php");
protegePagina(); ?>
<html>	
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
		<link rel="stylesheet" type="text/css" href="listar.css">
	</head>
		<body>
		<div id="geral">
		<div id="topo"> 
		<div id="menu" align="center">
		     SECRETARIA
			  <table align="right"> 
			        <tr>
					   <td class="but1"> <?php echo "Olá, " . $_SESSION['usuarioNome']; ?> </td>
				       <td> <a class="but" href="logout.php" > Sair </a> </td>
					</tr>
			   </table>
		<div id="menu2">
		 <div id="conteudo">
		 <?php
        $id=$_POST['id'];
	    $con=mysqli_connect("127.0.0.1","root","","celest");
	     if(mysqli_connect_errno())
		    { echo "Failed to connect to MySQL: ".mysqli_connect_error();} 
	    $result=mysqli_query($con,"SELECT*FROM login WHERE id='$id'");
        ?>
        <p> <center> <form action="realizaaltlogin.php" method="post">
        <?php while($row=mysqli_fetch_array($result)){
        ?>
        <input type="hidden" name="id" value="<?php echo $row['id'];?>" />
	    
		<table align="center">
			       <tr> <td align="left"> <label> Nome: </label> </td> <td> <input type="text" name="nome" value="<?php echo $row['nome'];?>" /> </td> </tr>
				   <tr> <td align="left"> <label> Usuário: </label> </td> <td> <input type="text" name="usuario" maxlength="20" value="<?php echo $row['usuario'];?>" /> </td> </tr>
				   <tr> <td align="left"> <label> Senha: </label> </td>
			       <td> <input type="password" name="senha" maxlength="20" value="<?php echo $row['senha'];?>" /> </td> </tr>
				   <tr> <td align="left"> <label> Tipo de Acesso: </label> </td> <td> <select name="tipo"> 
				   <option value="1""<?php echo $row['tipo'];?>" /> Secretaria </option> <option value="2""<?php echo $row['tipo'];?>" /> Professores </option> <option value="3""<?php echo $row['tipo'];?>" /> Alunos </option> </select> </td> </tr>
				   <tr> <td colspan="2" align="center"> <button type="submit" name="enviar" value="ok"> Alterar </button>  </td> </tr>
			    </table>  
			     <p> <center>  <h4> <a href="listarLogin.php"> CANCELAR </a> </h4></center>
	      
		   </form>
        <?php } ?> 
			  </div>		  
		</body>
</html>
		 
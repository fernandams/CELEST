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
        $matr=$_POST['matr'];
	    $con=mysqli_connect("127.0.0.1","root","","celest");
	     if(mysqli_connect_errno())
		    { echo "Failed to connect to MySQL: ".mysqli_connect_error();} 
	    $result=mysqli_query($con,"SELECT*FROM alunos WHERE matr='$matr'");
        ?>
        <p> <center> <form action="realizaaltalun.php" method="post">
        <?php while($row=mysqli_fetch_array($result)){
        ?>
        <input type="hidden" name="matr" value="<?php echo $row['matr'];?>" />
	    
		<table align="center">
			       <tr> <td align="left"> <label> Nome: </label> </td> <td> <input type="text" name="nome" value="<?php echo $row['nome'];?>" /> </td> </tr>
			       <tr> <td align="left"> <label> Sexo: </label> </td> <td> <input type="radio" name="sexo" value="M""<?php echo $row['sexo'];?>" /> Masculino  <input type="radio" name="sexo" value="F""<?php echo $row['sexo'];?>" /> Feminino </td> </tr>
			       <tr> <td align="left" rowspan="2"> <label> Data de <br/> nascimento: </label> </td> <td> <input type="text" name="dn" size="6" maxlength="10" value="<?php echo $row['dn'];?>" /> (ano/mês/dia) </td> </tr>
				   <tr> </tr>
				   <tr> <td align="left"> <label> Responsável: </label> </td> <td> <input type="text" name="resp" value="<?php echo $row['resp'];?>" /> </td> </tr>
				   <tr> <td align="left" > <label> Endereço: </label> </td> <td> <input type="text" name="end" value="<?php echo $row['end'];?>" /> </td> </tr>
			       <tr> <td align="left" > <label> Telefone: </label> </td> <td> <input type="text" name="fone" value="<?php echo $row['fone'];?>" /> </td> </tr>
			       <tr> <td align="left"> <label> Idioma: </label> </td> <td> <input type="radio" name="idioma" value="I""<?php echo $row['idioma'];?>" /> Inglês <input type="radio" name="idioma" value="E""<?php echo $row['idioma'];?>" /> Espanhol </td> </tr>
			       <tr> <td align="left"> <label> Turma: </label> </td> <td> <input type="text" name="turmas_id" size="10" value="<?php echo $row['turmas_id'];?>" /> (id) </td> </tr> 
				   <tr> <td align="left"> <label> Login: </label> </td> <td> <input type="text" name="login_id" size="10" value="<?php echo $row['login_id'];?>" /> (id) </td> </tr> 
			     <tr> <td colspan="2" align="center"> <button type="submit" name="enviar" value="ok"> Alterar </button>  </td>  </tr>
			</table>
			<p> <center>  <h4> <a href="listaralun.php"> CANCELAR </a> </h4></center>
	      
		   </form>
        <?php } ?> <p>
		  </div>		  
		</body>
</html>
		 
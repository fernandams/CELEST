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
                    <a class="but2" href="secretaria.php"> Página Inicial </a>		
                    <a class="but2" href="listarprofing.php"> Inglês </a>   
		            <a class="but2" href="listarprofesp.php"> Espanhol </a>
					<a class="but2" href="listarprof.php"> Todos </a>
					
		 <div id="conteudo">
  
<?php
     $con=mysqli_connect("127.0.0.1","root","","celest");
	    if(mysqli_connect_errno()) { echo "Failed to connect to MySQL: ".mysqli_connect_error();}
		
	$result= mysqli_query($con,"SELECT*FROM professores WHERE idioma='E'"); ?> <p>
	<center>
	   <h2> Professores de Espanhol </h2>
	<table border="1" bordercolor="#545454">
	<tr> <th> Matrícula </th> <th> Nome </th> <th> CPF </th> <th> Sexo </th> <th> Data de nascimento </th> <th> Endereço </th> <th> Telefone </th> <th> E-mail </th> <th> Graduação </th>  <th> Idioma </th> <th> Login </th> <th> Alterar </th> <th> Deletar </th> </tr>
	<?php while($row=mysqli_fetch_array($result)){ ?>
	<tr> 
	    <td align="center"> <?php echo $row['matr']; ?> </td>
		<td align="center"> <?php echo $row['nome']; ?> </td>
		<td align="center"> <?php echo $row['cpf']; ?> </td>
		<td align="center"> <?php echo $row['sexo']; ?> </td>
		<td align="center"> <?php echo $row['dn']; ?> </td>
		<td align="center"> <?php echo $row['end']; ?> </td>
		<td align="center"> <?php echo $row['fone']; ?> </td>
		<td align="center"> <?php echo $row['email']; ?> </td>
		<td align="center"> <?php echo $row['graduacao']; ?> </td>
		<td align="center"> <?php echo $row['idioma']; ?> </td>
		<td align="center"> <?php echo $row['login_id']; ?> </td>
		
		<td> <form action="formaltprof.php" method="post">
		     <input type="hidden" name="matr" value="<?php echo $row["matr"]; ?>" />
			 <button type="submit" name="botaltprof" value="ok"> Alterar </button> 
			 </form> </td>
			 
		<td> <form action="realizadelprof.php" method="post"> 
		     <input type="hidden" name="matr" value="<?php echo $row["matr"]; ?>"/>
			 <button type="submit" name="botdelprof" value="ok"> Deletar </button> 
			 </form> </td>
	</tr>
	<?php } 
	      mysqli_close($con); ?> </table> <p> </center>
		        </div>		  
		</body>
</html>
		  

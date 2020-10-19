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
                    <a class="but2" href="listaraluning.php"> Inglês </a>   
		            <a class="but2" href="listaralunesp.php"> Espanhol </a>
					<a class="but2" href="listaralun.php"> Todos </a>
					
		 <div id="conteudo">
  
<?php
     $con=mysqli_connect("127.0.0.1","root","","celest");
	    if(mysqli_connect_errno()) { echo "Failed to connect to MySQL: ".mysqli_connect_error();}
		
	$result= mysqli_query($con,"SELECT*FROM alunos WHERE idioma='I'"); ?> <p>
	<center>
	   <h2> Alunos de Inglês </h2>
	<table border="1" bordercolor="#545454">
	<tr> <th> Matrícula </th> <th> Nome </th> <th> Sexo </th> <th> Data de nascimento </th> <th> Responsável </th> <th> Endereço </th> <th> Telefone </th> <th> Idioma </th> <th> Login (id) </th>  <th> Turma (id) </th>  <th> Alterar </th> </tr>
	<?php while($row=mysqli_fetch_array($result)){ ?>
	<tr> 
	    <td align="center"> <?php echo $row['matr']; ?> </td>
		<td align="center"> <?php echo $row['nome']; ?> </td>
		<td align="center"> <?php echo $row['sexo']; ?> </td>
		<td align="center"> <?php echo $row['dn']; ?> </td>
		<td align="center"> <?php echo $row['resp']; ?> </td>
		<td align="center"> <?php echo $row['end']; ?> </td>
		<td align="center"> <?php echo $row['fone']; ?> </td>
		<td align="center"> <?php echo $row['idioma']; ?> </td>
		<td align="center"> <?php echo $row['login_id']; ?> </td>
		<td align="center"> <?php echo $row['turmas_id']; ?> </td>
	
		<td> <form action="formaltalun.php" method="post">
		     <input type="hidden" name="matr" value="<?php echo $row["matr"]; ?>" />
			 <button type="submit" name="botaltalun" value="ok"> Alterar </button> 
			 </form> </td>
	 </tr> 
	<?php } 
	      mysqli_close($con); ?> </table> <p> </center>
		        </div>		  
		</body>
</html>
		  
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
                    <a class="but2" href="listarturmaing.php"> Inglês </a>   
		            <a class="but2" href="listarturmaesp.php"> Espanhol </a>
					<a class="but2" href="listarturma.php"> Todas </a>
					
		 <div id="conteudo">
  
<?php
     $con=mysqli_connect("127.0.0.1","root","","celest");
	    if(mysqli_connect_errno()) { echo "Failed to connect to MySQL: ".mysqli_connect_error();}
		
	$result= mysqli_query($con,"SELECT*FROM turmas WHERE idioma='E'"); ?> <p>
	<center>
	   <h2> Turmas de Espanhol </h2>
	<table border="1" bordercolor="#545454">
	<tr> <th> Id </th> <th> Nome </th> <th> Idioma </th> <th> Dias </th> <th> Turno </th> <th> Horário </th> <th> Nível </th> <th> Série </th> <th> Sala </th> <th> Semestre </th> <th> Ano </th><th> Professor(a)/matr </th> <th> Alterar </th> <th> Deletar </th> </tr>
	<?php while($row=mysqli_fetch_array($result)){ ?>
	<tr> 
	    <td align="center"> <?php echo $row['id']; ?> </td>
		<td align="center"> <?php echo $row['tnome']; ?> </td>
		<td align="center"> <?php echo $row['idioma']; ?> </td>
		<td align="center"> <?php echo $row['dias']; ?> </td>
		<td align="center"> <?php echo $row['turno']; ?> </td>
		<td align="center"> <?php echo $row['horario']; ?> </td>
		<td align="center"> <?php echo $row['nivel']; ?> </td>
		<td align="center"> <?php echo $row['serie']; ?> </td>
		<td align="center"> <?php echo $row['sala']; ?> </td>
		<td align="center"> <?php echo $row['semestre']; ?> </td>
		<td align="center"> <?php echo $row['ano']; ?> </td>
		<td align="center"> <?php echo $row['professores_matr']; ?> </td>

		<td> <form action="formaltturm.php" method="post">
		     <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
			 <button type="submit" name="botaltturm" value="ok"> Alterar </button> 
			 </form> </td>
			 
		<td> <form action="realizadelturm.php" method="post"> 
		     <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
			 <button type="submit" name="botdelturm" value="ok"> Deletar </button> 
			 </form> </td>
	</tr>
	<?php } 
	      mysqli_close($con); ?> </table> <p> </center>
		        </div>		  
		</body>
</html>
		  
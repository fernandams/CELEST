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
                    <a class="but2" href="listarLoginS.php">  Secretaria </a>   
		            <a class="but2" href="listarLoginP.php">  Professores </a>
					<a class="but2" href="listarLoginA.php">  Alunos </a> 
					
		 <div id="conteudo">
  
<?php
     $con=mysqli_connect("127.0.0.1","root","","celest");
	    if(mysqli_connect_errno()) { echo "Failed to connect to MySQL: ".mysqli_connect_error();}
		
	$result= mysqli_query($con,"SELECT*FROM login"); ?> <p>
	<center>
	   <h2> Usuários do Sistema (Login) </h2>
	<table border="1" bordercolor="#545454">
	<tr> <th> Id </th> <th> Nome </th> <th> Usuário </th> <th> Senha </th> <th> Tipo </th> <th> Alterar </th> <th> Deletar </th> </tr>
	<?php while($row=mysqli_fetch_array($result)){ ?>
	<tr> 
	    <td align="center"> <?php echo $row['id']; ?> </td>
		<td align="center"> <?php echo $row['nome']; ?> </td>
		<td align="center"> <?php echo $row['usuario']; ?> </td>
		<td align="center"> <?php echo $row['senha']; ?> </td>
		<td align="center"> <?php echo $row['tipo']; ?> </td>
		
		<td> <form action="formaltlogin.php" method="post">
		     <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
			 <button type="submit" name="botaltlogin" value="ok"> Alterar </button> 
			 </form> </td>
			 
		<td> <form action="realizadellogin.php" method="post"> 
		     <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
			 <button type="submit" name="botdellogin" value="ok"> Deletar </button> 
			 </form> </td>
	</tr>
	<?php } 
	      mysqli_close($con); ?> </table> <p> </center>
		        </div>		  
		</body>
</html>
		  
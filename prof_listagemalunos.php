<?php
include("segurancaP.php");
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
		    Portal do Professor
			  <table align="right"> 
			        <tr>
					   <td class="but1"> <?php echo "Olá, " . $_SESSION['usuarioNome']; ?> </td>
				       <td> <a class="but" href="logout.php" > Sair </a> </td>
					</tr>
			   </table>
	    <div id="menu2"> 
                    <a class="but2" href="professores.php"> Página Inicial </a>		
                    <a class="but2" href="prof_listagemturmas.php"> Turmas </a>	
		 <div id="conteudo">
  
<?php
     $con=mysqli_connect("127.0.0.1","root","","celest");
	    if(mysqli_connect_errno()) { echo "Failed to connect to MySQL: ".mysqli_connect_error();}
	$id=$_POST['id'];
	$result= mysqli_query($con,"SELECT t.id, t.tnome, a.matr, a.nome, n.bimestre1, n.bimestre2, n.media, n.recup
	from  turmas t inner join alunos a inner join notas n on t.id = a.turmas_id and n.alunos_matr = a.matr where t.id='$id'"); ?> <p>
	<center>
	   <h1> Alunos </h1>
	<table border="1" bordercolor="#545454">
	<tr> <th> Turma </th> <th> Matrícula </th> <th> Nome </th> <th> 1º Bimestre </th> <th> 2º Bimestre </th> <th> Média </th> <th> Recuperação </th> </tr>
	<?php while($row=mysqli_fetch_array($result)){ ?>
	
	<tr> 
	    <td align="center"> <?php echo $row['id']; ?> </td>
	    <td align="center"> <?php echo $row['matr']; ?> </td>
		<td align="center"> <?php echo $row['nome']; ?> </td>
	    <td align="center"> <?php echo $row['bimestre1']; ?> </td>
		<td align="center"> <?php echo $row['bimestre2']; ?> </td>
		<td align="center"> <?php echo $row['media']; ?> </td>
	    <td align="center"> <?php echo $row['recup']; ?> </td>
		
	</tr>
	<?php } 
	      mysqli_close($con); ?> </table> <p> </center>
		  
	<?php	  $con=mysqli_connect("127.0.0.1","root","","celest");
	      if(mysqli_connect_errno()) { echo "Failed to connect to MySQL: ".mysqli_connect_error();} 
		  $id=$_POST['id']; 
		  $result= mysqli_query($con,"SELECT id from  turmas where id='$id'"); ?> <p>
	      <?php while($row=mysqli_fetch_array($result)){ ?>
		  <form action="prof_formaltnotas.php" method="post">
			<input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
			<button type="submit" name="botnotas" value="ok"> Notas </button> 
			<?php } 
	      mysqli_close($con); ?> 
	      </form> 
		        </div>		  
		</body>
</html>


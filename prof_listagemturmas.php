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
                    
		 <div id="conteudo">
  
<?php
     $con=mysqli_connect("127.0.0.1","root","","celest");
	    if(mysqli_connect_errno()) { echo "Failed to connect to MySQL: ".mysqli_connect_error();}
	 $id=$_SESSION['usuarioID'];
	$result= mysqli_query($con,"SELECT t.id, t.tnome, t.idioma, t.dias, t.turno, t.horario, t.nivel, t.serie, t.sala, t.semestre, t.ano, t.professores_matr, p.matr 
	from  turmas t inner join professores p on t.professores_matr = p.matr where p.login_id='$id'"); ?> <p>
	<center>
	   <h1> Turmas </h1>
	<table border="1" bordercolor="#545454">
	<tr> <th> Id </th> <th> Nome </th> <th> Idioma </th> <th> Dias </th> <th> Turno </th> <th> Horário </th> <th> Nível </th> <th> Série </th> <th> Sala </th> <th> Semestre </th> <th> Ano </th> <th> Alunos </th> </tr>
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
		
		<td> <form action="prof_listagemalunos.php" method="post">
		     <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
			 <button type="submit" name="botaltturm" value="ok"> Alunos </button> 
			 </form> </td>
	</tr>
	<?php } 
	      mysqli_close($con); ?> </table> <p> </center>
		        </div>		  
		</body>
</html>


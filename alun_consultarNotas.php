<?php
include("segurancaA.php");
protegePagina(); ?>
<html>	
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
		<link rel="stylesheet" type="text/css" href="interno.css">
	</head>
		<body>
		<div id="geral">
		<div id="topo"> 
		<div id="menu" align="center">
		   Portal do Aluno
			  <table align="right"> 
			        <tr>
					   <td class="but1"> <?php echo "Olá, " . $_SESSION['usuarioNome']; ?> </td>
				       <td> <a class="but" href="logout.php" > Sair </a> </td>
					</tr>
			   </table>
	    <div id="menu2"> 
                       <a class="but2" href="alunos.php"> Página Inicial </a>
                       <a class="but2" href="alun_consultarNotas.php"> Consultar Notas </a> 
					   
		 <div id="conteudo">
  
<?php
     $con=mysqli_connect("127.0.0.1","root","","celest");
	    if(mysqli_connect_errno()) { echo "Failed to connect to MySQL: ".mysqli_connect_error();}
	$id=$_SESSION['usuarioID'];
	$result= mysqli_query($con,"SELECT t.id, t.tnome, t.semestre, t.ano, a.matr, a.nome, n.bimestre1, n.bimestre2, n.media, n.recup
	from  turmas t inner join alunos a inner join notas n on t.id = a.turmas_id and n.alunos_matr = a.matr where a.login_id='$id'"); ?> <p>
	<center>
	   <h1> Notas </h1>
	<table border="1" bordercolor="#545454">
	<?php while($row=mysqli_fetch_array($result)){ ?>
	
	    <tr> <th> Nome: </th> <td align="center"> <?php echo $row['nome']; ?> </td>
		<th> Matrícula: </th> <td align="center"> <?php echo $row['matr']; ?> </td> 
		<th> Turma: </th> <td align="center"> <?php echo $row['tnome']; ?> </td> </tr>
		<tr> <td colspan="2" align="left"> <b> - 1º Bimestre: </b> </td> <td colspan="2" align="center"> <?php echo $row['bimestre1']; ?> </td>
		<td colspan="2" rowspan="4" align="center"> <?php echo $row['semestre']; ?>º SEMESTRE <br/> <br/> <?php echo $row['ano']; ?> </td> </tr>
	    <tr> <td colspan="2" align="left"> <b> - 2º Bimestre: </b> </td> <td colspan="2" align="center"> <?php echo $row['bimestre2']; ?> </td> </tr>
		<tr> <td colspan="2" align="left"> <b> - Média: </b> </td> </td> <td colspan="2" align="center"> <?php echo $row['media']; ?> </td> </tr>
	    <tr> <td colspan="2" align="left"> <b> - Recuperação: </b> </td> <td colspan="2" align="center"> <?php echo $row['recup']; ?> </td> </tr>
		
	
	<?php } 
	      mysqli_close($con); ?> </table> <p> </center>
		  
		   <center> <br/> <br/> OS RESULTADOS FINAIS SOMENTE <br/> SERÃO FIXADOS NO MURAL DA ESCOLA, APÓS <br/> CONSELHO DE CLASSE.  <p> As informações lançadas nesse espaço,
		   pelo <br/> professor, são apenas para conhecimento do aluno.</center>
		  <div id="rodape">
	      </form> 
		        </div>		  
		</body>
</html>

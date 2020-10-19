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
	    $result=mysqli_query($con,"SELECT*FROM turmas WHERE id='$id'");
        ?>
        <p> <center> <form action="realizaaltturm.php" method="post">
        <?php while($row=mysqli_fetch_array($result)){
        ?>
        <input type="hidden" name="id" value="<?php echo $row['id'];?>" />
	    
		<table align="center">
			      <tr> <td align="left"> <label> Nome: </label> </td> <td> <input type="text" name="tnome" maxlength="10" size="5" value="<?php echo $row['tnome'];?>" /> </td> </tr>
				   <tr> <td align="left"> <label> Idioma: </label> </td> <td> <input type="radio" name="idioma" value="I""<?php echo $row['idioma'];?>" /> Inglês </td> <td> <input type="radio" name="idioma" value="E""<?php echo $row['idioma'];?>" /> Espanhol </td> </tr>
				   <tr> <td align="left"> <label> Dias:  </label> </td>
				        <td> <select name="dias"> <option value="24""<?php echo $row['dias'];?>" /> Seg/Qua </option> <option value="35""<?php echo $row['dias'];?>" /> Ter/Qui </option> <option value="6""<?php echo $row['dias'];?>" />Sexta </option> <option value="7""<?php echo $row['dias'];?>" /> Sábado </option> </select> </td> </tr>
			       <tr> <td align="left"> <label> Horário:  </label> </td> <td> <select name="horario"> <option value="1""<?php echo $row['horario'];?>" /> 1º </option> <option value="2""<?php echo $row['horario'];?>" /> 2º </option></select> </td> </tr></tr> 
				   <tr> <td align="left"> <label> Turno:  </label> </td> <td> <input type="radio" name="turno" value="M""<?php echo $row['turno'];?>" /> Matutino </td> <td>  <input type="radio" name="turno" value="V""<?php echo $row['turno'];?>" /> Vespertino </td> <td>  <input type="radio" name="turno" value="N""<?php echo $row['turno'];?>" /> Noturno </td> </tr>
			       <tr> <td align="left"> <label> Nível: </label> </td> <td> <input type="radio" name="nivel" value="B""<?php echo $row['nivel'];?>" /> Básico   </td> <td> <input type="radio" name="nivel" value="I""<?php echo $row['nivel'];?>" /> Intermediário  </td> <td> <input type="radio" name="nivel" value="A""<?php echo $row['nivel'];?>" /> Avançado </td> </tr>
			       <tr> <td align="left"> <label> Série:  </label> </td> <td> <input type="text" name="serie" maxlength="1" size="1" value="<?php echo $row['serie'];?>" /> </td> 
			            <td align="left"> <label> Sala: </label> <input type="text" name="sala" maxlength="2" size="1" value="<?php echo $row['sala'];?>" /> </td> </tr>
				   <tr> <td align="left"> <label> Semestre: </label> </td> <td> <select name="semestre"> 
				    <option value="1""<?php echo $row['semestre'];?>" /> 1º </option> <option value="2""<?php echo $row['semestre'];?>" /> 2º </option> </select> </td> 
				    <td align="left"> <label> Ano: </label> <input type="text" name="ano" size="4" maxlength="4" value="<?php echo $row['ano'];?>" /> </td> </tr>
				   <tr> <td align="left"> <label> Professor(a):  </label> </td> <td><input type="text" name="professores_matr"  size="6" value="<?php echo $row['professores_matr'];?>" /> </td> <td> (matrícula)</td> </tr> 
				   <tr> <td colspan="4" align="center"> <button type="submit" name="enviar" value="ok"> Alterar </button>  </td> </tr>
			    </table>  
			     <p> <center>  <h4> <a href="listarturma.php"> CANCELAR </a> </h4></center>
	      
		   </form>
        <?php } ?> 
			  </div>		  
		</body>
</html>
		 
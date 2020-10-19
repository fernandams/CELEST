<?php
include("seguranca.php");
protegePagina(); ?>
<html>	
	<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
		<title> Cadastro de Professores</title>
		<link rel="stylesheet" type="text/css" href="interno.css">
	</head>
	<body>
		<div id="geral">
		<div id="topo"> 
		<div id="menu"> 
		              SECRETARIA
					   <table align="right"> 
			        <tr>
					   <td class="but1"> <?php echo "Olá, " . $_SESSION['usuarioNome']; ?> </td>
				       <td> <a class="but" href="logout.php" > Sair </a> </td>
					</tr>
			   </table>
		<div id="menu2">
		               <a class="but2" href="secretaria.php"> Página Inicial </a>
					   <a class="but2" href="cadastrarUsuario.php"> Cadastrar Usuários </a> 
                       <a class="but2" href="cadastrarProf.php"> Cadastrar Professores </a> 
					   <a class="but2" href="cadastrarTurma.php"> Cadastrar Turmas</a> 
					   <a class="but2" href="cadastrarAluno.php">  Cadastrar Alunos </a>
					   <a class="but2" href="listarLogin.php"> Alterar/Excluir Usuários </a> 
					   <a class="but2" href="listarprof.php"> Alterar/Excluir Professores </a> 
					   <a class="but2" href="listarturma.php"> Alterar/Excluir Turmas </a>
					   <a class="but2" href="listaralun.php"> Alterar Alunos </a>
		<div id="conteudo">
		
		<Form method="POST" action="cadturma.php">
		    <h1> Cadastro de Turmas </h1>
			<table align="center">
			       <tr> <td align="left"> <label> Nome: </label> </td> <td> <input type="text" name="nome" maxlength="10" size="5"> </td> </tr>
				   <tr> <td align="left"> <label> Idioma: </label> </td> <td> <input type="radio" name="idioma" value="I"> Inglês </td> <td> <input type="radio" name="idioma" value="E"> Espanhol </td> </tr>
				   <tr> <td align="left"> <label> Dias:  </label> </td>
				        <td> <select name="dias"> <option value="24"> Seg/Qua </option> <option value="35"> Ter/Qui </option> <option value="6">Sexta </option> <option value="7"> Sábado </option> </select> </td> </tr>
			       <tr> <td align="left"> <label> Horário:  </label> </td> <td> <select name="horario"> <option value="1"> 1º </option> <option value="2"> 2º </option></select> </td> </tr></tr> 
				   <tr> <td align="left"> <label> Turno:  </label> </td> <td> <input type="radio" name="turno" value="M"> Matutino </td> <td>  <input type="radio" name="turno" value="V"> Vespertino </td> <td>  <input type="radio" name="turno" value="N"> Noturno </td> </tr>
			       <tr> <td align="left"> <label> Nível: </label> </td> <td> <input type="radio" name="nivel" value="B"> Básico   </td> <td> <input type="radio" name="nivel" value="I"> Intermediário  </td> <td> <input type="radio" name="nivel" value="A"> Avançado </td> </tr>
			       <tr> <td align="left"> <label> Série:  </label> </td> <td> <input type="text" name="serie" maxlength="1" size="1"> </td> 
			            <td align="left"> <label> Sala: </label> <input type="text" name="sala" maxlength="2" size="1"> </td> </tr>
				   <tr> <td align="left"> <label> Semestre: </label> </td> <td> <select name="semestre"> 
				   <option value="1"> 1º </option> <option value="2"> 2º </option> </select> </td> 
				    <td align="left"> <label> Ano: </label> <input type="text" name="ano" size="4" maxlength="4"> </td> </tr>
				   <tr> <td align="left"> <label> Professor(a):  </label> </td> <td><input type="text" name="professores_matr"  size="6"> </td> <td> (matrícula)</td> </tr> 
			    </table>  
			      <p> <input type="submit" value="Cadastrar"> 
			
		</Form>		
										
		<div id="rodape">
					
                     </div>

		</body>
</html>
﻿<?php
include("seguranca.php");
protegePagina(); ?>
<html>	
	<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
		<title> Cadastro de Alunos </title>
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
		
		<Form method="POST" action="cadalun.php">
		    <h1> Cadastro de Alunos </h1>
			<table align="center">
			       <tr> <td align="left"> <label> Nome: </label> </td> <td> <input type="text" name="nome"> </td> </tr>
			       <tr> <td align="left"> <label> Sexo: </label> </td> <td> <input type="radio" name="sexo" value="M"> Masculino  <input type="radio" name="sexo" value="F"> Feminino </td> </tr>
			       <tr> <td align="left" rowspan="2"> <label> Data de <br/> nascimento: </label> </td> <td> <input type="text" name="dn" size="6" maxlength="10"> (ano/mês/dia) </td> </tr>
				   <tr> </tr>
				   <tr> <td align="left"> <label> Responsável: </label> </td> <td> <input type="text" name="resp"> </td> </tr>
				   <tr> <td align="left" > <label> Endereço: </label> </td> <td> <input type="text" name="end"> </td> </tr>
			       <tr> <td align="left" > <label> Telefone: </label> </td> <td> <input type="text" name="fone"> </td> </tr>
			       <tr> <td align="left"> <label> Idioma: </label> </td> <td> <input type="radio" name="idioma" value="I"> Inglês <input type="radio" name="idioma" value="E"> Espanhol </td> </tr>
			       <tr> <td align="left"> <label> Turma: </label> </td> <td> <input type="text" name="turmas_id" size="10"> (id) </td> </tr>
				   <tr> <td align="left"> <label> Login: </label> </td> <td> <input type="text" name="login_id" size="10"> (id) </td> </tr> 
				  
				 <tr> <td align="left"> <label> Aluno (matrícula): </label> </td> <td> <input type="text" name="alunos_matr" size="6"> </td> </tr>
		        <tr> <td> <form action="realizaaltnotas.php" method="post">
			     <tr> <td colspan="2" align="center"> <input type="submit" value="Cadastrar"> </td> </tr>
			</table>
		</Form>		
										
		<div id="rodape">
					
                     </div>

		</body>
</html>
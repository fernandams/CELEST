<?php
include("seguranca.php");
protegePagina(); ?>
<html>	
	<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
		<title> Cadastro de Usuários </title>
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
		
		<Form method="POST" action="cadlogin.php">
		    <h2> Cadastro de Usuários do Sistema (Login)</h2>
			<table align="center">
			       <tr> <td align="left"> <label> Nome: </label> </td> <td> <input type="text" name="nome"> </td> </tr>
				   <tr> <td align="left"> <label> Usuário: </label> </td> <td> <input type="text" name="usuario" maxlength="20"> </td> </tr>
				   <tr> <td align="left"> <label> Senha: </label> </td>
			       <td> <input type="password" name="senha" maxlength="20" /> </td> </tr>
				   <tr> <td align="left"> <label> Tipo de Acesso: </label> </td> <td> <select name="tipo"> 
				   <option value="1"> Secretaria </option> <option value="2"> Professores </option> <option value="3"> Alunos </option> </select> </td> </tr>
			    </table>  
			      <p> <input type="submit" value="Cadastrar"> 
			
		</Form>		
										
		<div id="rodape">
					
                     </div>

		</body>
</html>
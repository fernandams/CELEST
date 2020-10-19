<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página ?>
<html>	
	<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
		<title> Acesso Restrito </title>
		<link rel="stylesheet" type="text/css" href="internoInicial.css">
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
		    
		<div id="publicidade"> 
	    <div id="publicidade1">
        <div id="publicidade2">	
        <div id="publicidade3"> 	
        <div id="publicidade4"> 	
        <div id="publicidade5"> 			
	   				
		<div id="rodape">
					
                     </div>
		   
 					  
		</body>
</html>

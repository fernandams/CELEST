<?php
include("segurancaA.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página ?>
<html>	
	<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" >
		<title> Alunos </title>
		<link rel="stylesheet" type="text/css" href="internoInicial.css">
	</head>
		<body>
		<div id="geral">
		<div id="topo"> 
		<div id="menu">
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

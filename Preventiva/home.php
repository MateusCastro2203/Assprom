<?php 
	require 'conexao.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manutenção Preventiva</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="index.css">
	
</head>

<header >
	
	<img class="logo" src="logoAssprom2.png" width="350" height="150">
	<div class="menu">
		<ul class="menuInline ">
			<li><a href="cadastrarMaquina.php" rol >Cadastrar Maquina</a></li>
		</ul>
	</div>
</header>
<body>
 <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="POST" action=""> 
          <h1></h1> <br>
          <p> 
            <br><label for="nome_login">Seu nome</label>
            <input id="nome_login" name="nome_login" required="required" type="text" placeholder="ex. contato@htmlecsspro.com"/>
          </p>
           
          <p> 
            <label for="email_login">Seu e-mail</label>
            <input id="email_login" name="email_login" required="required" type="password" placeholder="ex. senha" /> 
          </p>
           
         
           
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
           
          
        </form>
      </div>

	



</body>
</html>
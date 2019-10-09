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
			
		</ul>
	</div>
</header>
<body>

	

	    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="POST" > 
          <h1>Login</h1> <br>
          <p> 
            <br><label >Login</label>
            <input id="nome_login" name="nome_login" required="required" type="text" placeholder="ex. contato"/>
          </p>
           
          <p> 
            <label >Senha</label>
            <input id="senha_login" name="senha_login" required="required" type="password" placeholder="ex. senha" /> 
          </p> 
          <p> 
            <input type="submit" name="entrar" /> 
          </p>
      </div>



 </body>
</html>

<?php 
	$login = $_POST['nome_login'];
	$senha = $_POST['senha_login'];
	if (isset($_POST['entrar'])) {
		$query = sprintf("SELECT login,senha FROM usuario WHERE login = '$login' AND senha = '$senha'");
		$consulta = mysqli_query($con,$query);
		if(mysqli_affected_rows($con) === 1){
			header('Location: Identificacao.php');
		}else{
			echo "Usuario ou senha incorretos";
		}
	}
?>
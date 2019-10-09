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
			<li><a href="cadastrar.php" >Cadastrar Maquina</a></li>
		</ul>

	</div>
</header>
<body>
	
		  <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="POST" > 
          <h1>Identificação</h1> <br>
          <p> 
            <br><label >Data de entrada</label>
            <input id="dataEntrada" name="dataEntrada" required="required" type="date" />
          </p>
          <p> 
            <label >Usuario</label>
            <input id="usuario" name="usuario" required="required" type="text" placeholder="*" /> 
          </p> 
           
          <p> 
            <label >Setor</label>
            <input id="setor" name="setor" required="required" type="text" placeholder="*" /> 
          </p> 
           <p> 
            <label >Patrimonio</label>
            <input id="patrimonio" name="patrimonio" required="required" type="text" placeholder="*" /> 
          </p>

           <p> 
            <label >IP</label>
            <input id="ip" name="ip" required="required" type="text" placeholder="*" /> 
          </p>


          <p> 
            <input type="submit" name="enviar" /> 
          </p>
      </div>

		<br>
</body>
</html>
<?php 
$dataEntrada = $_POST['dataEntrada'];
$usuario = $_POST['usuario'];
$setor = $_POST['setor'];
$patrimonio = $_POST['patrimonio'];
$ip = $_POST['ip'];


if (isset($_POST['enviar'])) {
	$query = ("INSERT INTO identificacao(Id,dataEntrada,dataSaida, usuario, setor, patrimonio, ip) VALUES (DEFAULT,'$dataEntrada',DEFAULT,'$usuario','$setor','$patrimonio','$ip')");
		mysqli_query($con,$query);
			
				header('Location: equipamento.php');
			

}

 ?>
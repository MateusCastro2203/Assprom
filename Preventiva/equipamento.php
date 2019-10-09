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
	
</header>
<body>
	
		  <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="POST" > 
          <h1>Equipamento</h1> <br>
          <p> 
            <br><label >Tipo</label>
            <input id="tipo" name="tipo" required="required" type="text" />
          </p>
          <p> 
            <label >Serial</label>
            <input id="serial" name="serial" required="required" type="text" placeholder="*" /> 
          </p> 
           
          <p> 
            <label >Aparencia</label>
            <input id="aparencia" name="aparencia" required="required" type="text" placeholder="*" /> 
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
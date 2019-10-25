<?php
include ("conexao.php");
$consulta = "SELECT `NAME`,`WORKGROUP`,`OSNAME`,`IPADDR` FROM `hardware` WHERE 1 ";
$query= mysqli_query($con,$consulta);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Datatable-->
    <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Css-->
    <link rel="stylesheet" href="node_modules/bootstrap/scss/style.scss">
    <title>Preventiva</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">ASSPROM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite" >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">COMPUTADORES</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <form method="POST"></form>
                    <form id="demo-2">
	                  <input type="search" placeholder="Buscar IP" name="busc">
                  </form>
                 
                  </li>

                </ul>
            </div>
        </div>

    </nav>

    <table class ="table table-striped" >
      <div class="container">
      <thead class = "table thead-light">
        <tr>
          <th scope="col">NOME</th>
          <th scope="col">WORKGRUP</th>
          <th scope="col">SISTEMA OPERACIONAL</th>
          <th scope="col">IP</th>
        </tr>
      </thead>
      <tbody class="table table-hover">
       <?php
        while($registro=mysqli_fetch_assoc($query)){
          echo '<tr>';
          echo '<td><a href="#">'.$registro["NAME"].'</a></td>';
          echo '<td>'.$registro["WORKGROUP"].'</td>';
          echo '<td>'.$registro["OSNAME"].'</td>';
          echo '<td>'.$registro["IPADDR"].'</td>';
        }
        if(isset($_POST['buscar'])){
          $buscar = $_POST['busc'];
          $busca = "SELECT `NAME`,`WORKGROUP`,`OSNAME`,`IPADDR` FROM `hardware` WHERE `NAME` OR `WORKGROUP` OR `OSNAME` OR `IPADDR` LIKE '%$buscar%'";
          echo"oi";
          while($registro=mysqli_fetch_assoc($busca)){
            echo '<tr>';
            echo '<td><a href="#">'.$registro["NAME"].'</a></td>';
            echo '<td>'.$registro["WORKGROUP"].'</td>';
            echo '<td>'.$registro["OSNAME"].'</td>';
            echo '<td>'.$registro["IPADDR"].'</td>';
          }
        }
       ?>
      </tbody>

      </div>
    </table>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
  </body>
</html>
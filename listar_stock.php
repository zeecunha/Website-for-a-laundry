<?php
	Session_start();
	
	If(!isset($_SESSION["timeout"])){
		$_SESSION['timeout']=time() + 60;
	}
	
	If(time() <$_SESSION['timeout']){
		
		}else{
		Session_destroy();
		Header('Location: index.php');
		}
	?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>S�Brilho</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="./css/bootstrap-theme.min.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>  
  
 
  
  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">S� BRILHO </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li ><a href="add_trabalhos.php">Adicionar Trabalhos</a></li>
            <li ><a href="trabalhos.php">Listar Trabalhos</a></li>
			<li ><a href="add_funcionario.php">Adicionar Funcion�rio</a></li>
			<li ><a href="listar_funcionario.php">Listar Funcion�rios</a></li>
			<li ><a href="add_stock.php">Adicionar Stock</a></li>
			<li class="active"><a href="listar_stock.php">Listar Stock</a></li>
			<li ><a href="add_administrador.php">Adicionar administrador</a></li>
			<li ><a href="listar_pedidos_clientes.php">Verificar pedidos</a></li>
          </ul>
		  
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<br/>  
<br/>  
<br/>  
<br/>
<br/>  
<br/> 
<br/>
<br/>  
<br/> 
<div class="container">


<?php

	$conn = mysqli_connect("localhost","root","12345","projeto");
// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
} 

mysqli_query($conn,$sql);
	
	$row = mysqli_fetch_assoc($result);
{
				echo '<table class="table table-striped">';
				echo "<tr>";
				echo "<th>ID stock</th>";
				echo "<th>Material</th>";
				echo "<th>Quantidade</th>";
				echo "<th>Imagem</th>";
			echo "</tr>";
			$sql2 = "SELECT * FROM stock";
			$result2 = mysqli_query($conn,$sql2);	
			while($row = mysqli_fetch_assoc($result2)){
				echo "<tr>";
					echo "<td>".$row['idstock']."</td>";
					echo "<td>".$row['Material']."</td>";
					echo "<td>".$row['Quantidade']."</td>";
					echo '<td><img src= "data:image/jpg;base64,'.base64_encode($row['Image']).'"width="50" height="50"></td>';
				echo "</tr>";
			}
			echo "</table>";
	}

?>


<br/>  
<br/>  
<br/>  
<br/>
<br/>  
<br/> 	
<br/>
<br/>  
<br/> 
	<footer class="footer">
        <p>� 2016 Jos� Cunha - 28018 - Universidade Fernando Pessoa - Laborat�rio de Programa��o</p>
      </footer>
 </div>
</body>
</html>	
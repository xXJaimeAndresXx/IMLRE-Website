<?php

 if(!isset($_GET['id']))
 {
  $id1=0;
 }
 if (isset($_GET['id']))
 {
  $id1= $_GET['id'];
 }

echo "$id1";




 if ($id1==1) {
 	# code...
 echo "$id1";
  require 'php\conn.php';


if (isset($_POST['reg'])){
	if (strlen($_POST['Titulo']) >= 1 && strlen($_POST['Año'])>= 1 && strlen($_POST['Descripcion'])>= 1 && strlen($_POST['Genero'])>= 1 && strlen($_POST['Link'])>= 1 && strlen($_POST['Reseña'])>= 1){

     $titulo= trim($_POST['Titulo']);
     $descripcion= trim($_POST['Descripcion']);
     $imagen= trim($_POST['Link']);
     $genero= trim($_POST['Genero']);
     $year=trim($_POST['Año']);
     $res=trim($_POST['Reseña']);
  

     $consulta="INSERT INTO Albums VALUES ( default ,'$descripcion' ,'$titulo', '$genero', '$year' , '$imagen');";
     $query_run=mysqli_query($conn,$consulta);

     $query= "SELECT idAlbum FROM Albums WHERE Titulo='$titulo'";
     $query_run=mysqli_query($conn,$query);
     while($row = $query_run ->fetch_assoc())
    {
      $id=$row['idAlbum'];
    }
     
     $consulta="INSERT INTO Resenias VALUES ( default ,'$id' ,'$res', default , '0');";
     $query_run=mysqli_query($conn,$consulta);

	}
}

}
if ($id1==0)
{
	session_start();
	session_destroy();

	header('Location: login.php');
	exit();
}
if (isset($_POST['Salir']))
{
	session_start();
	session_destroy();

	header('Location: login.php');
	exit();
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Reseñas</title>
<!-- Custom Theme files -->
<link href="css/styleregister.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Signer Register Form Responsive,Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<script Language="JavaScript">
if(window.history.forward(1) != null)   window.history.forward(1);
</script>
<!--Google Fonts-->
</head>
<body>


<!--sign up form start here-->
<h1>Registro de Reseñas</h1>
<div class="singup">
		<h3>RESEÑA</h3>
	<div class="signup-main">
	  <form  method="post">
		<input type="text" name="Titulo" value="Titulo"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Titulo';}"/>
		<input type="text" name="Año" value="Año" class="lessgap"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Año';}"/>
		<input type="text" name="Descripcion" value="Descripcion" class="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Descripcion';}"/>
		<input type="text" name="Genero" value="Genero"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Genero';}"/>
		<input type="text" name="Link" value="Link img" class="lessgap" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Link img';}"/>
		<textarea type="text" name="Reseña" value='Reseña'class="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Reseña';}" rows="20" cols="45">Reseña</textarea>
	  <div class="send-button">
	    <input  type="submit" name="reg" />
	    <input  type="submit" name="Salir" value="Salir" />
	  </div>
	    


	  </form>
	
	</div>
</div>	
<div class="copyright">
</div>
<!--sign up form end here-->
</body>
</html>
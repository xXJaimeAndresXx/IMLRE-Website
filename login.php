
<?php 

if (isset($_POST['Reg']))
{

	echo "DSFDSFDS";
	if (strlen($_POST['User']) >= 1 && strlen($_POST['Pass'])>= 1)
	{
		echo "FDSDFDSFDSFDSFDS";

$dbServername= 'localhost';
$dbUsername= trim($_POST['User']);
$dbPassword= trim($_POST['Pass']);
$dbName='imlre';
$conn= mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if($conn){
$id=1;
header("Location: inde.php?id=$id");
exit;

}
else{
	echo "Conexion no exitosa";
	header('Location: login.php');
	
}
	}
}




 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>LOGIN</title>
<!-- Custom Theme files -->
<link href="css/styleregister.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Signer Register Form Responsive,Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script Language="JavaScript">
if(window.history.forward(1) != null)   window.history.forward(1);
</script>
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
</head>
<body>


<!--sign up form start here-->
<h1>Registro de Reseñas</h1>
<div class="singup">
		<h3>LOGIN</h3>
	<div class="signup-main">
	  <form id="insertar"  method="post">
		<input type="text" name="User" value="User"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Titulo';}"/>
		<input type="psassword" name="Pass" value="Pass" class="lessgap"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Año';}"/>
		
	  <div class="send-button">
	    <input type="submit" name="Reg"value="Login" />
	  </div>
	    


	  </form>
	</div>
</div>	
<div class="copyright">
</div>
<!--sign up form end here-->
</body>
</html>
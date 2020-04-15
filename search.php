<?php require 'php\conn.php';?> 
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/search.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title></title>
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a href="index.html" class="navbar-brand">
      <img src="img/sunny.jpg" width="30px" height="30px" class="d-inline-block align-top" alt="real emo">
    IMLRE</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="index.php" class="nav-link">Inicio</a>
        </li>
        <li class="nav-item">
          <a href="reseña_index.php" class="nav-link">Reseñas</a>
        </li>
        <li class="nav-item">
          <a href="topalbum_index.html" class="nav-link">Top Albums</a>
        </li>
        <li class="nav-item">
          <a href="apoyo_index.html" class="nav-link">Apoyo</a>
        </li>

      </ul>  
    </div>
    
   </nav>
   <section class="jumbotron text-center">
       <div class="container">
        <h1 class="text-muted">Buscar Reseñas:</h1>
        <form action="search.php" method="POST" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-4 col-sm-15 p-1">
                            <div class="active-cyan-4 mb-4">
                                <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="search">
                            </div>
                        </div>
                         
                     
                        <div class="col-lg-4 col-md-3 col-sm-10 p-0">

                            <button type="submit" class="btn btn-primary wrn-btn" name="submit-search">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </section>

 <div class="album text-muted">
      <div class="container">
      	<h1>Esto es lo que hemos encontrado:</h1>
        <div class="row">



<?php 
if(isset($_POST['submit-search'])){
		$search= mysqli_real_escape_string($conn, $_POST['search']);
		$query= "SELECT * FROM albums WHERE Titulo LIKE '%$search%' OR Descripcion LIKE '%$search%' OR Descripcion LIKE '%$search%' OR Genero LIKE '%$search%' OR Anio LIKE '%$search%'  ";
		$query_run= mysqli_query($conn, $query);
		$queryResult= mysqli_num_rows($query_run);
		




		if($queryResult > 0){
			while ($row= mysqli_fetch_array($query_run)) 
			{
			//$id=$row[0];
     //$titulo= $row[1];
     //$descripcion= $row[2];
     //$texto= $row[3];
     //$imagen= $row[4];
     $id=$row['idAlbum'];
     $titulo= $row['Titulo'];
     $descripcion= $row['Descripcion'];
     $imagen= $row['Link'];
     $genero= $row['Genero'];
     $year=$row['Anio'];

				?>
				<div class="card">
           <img src="<?php echo $imagen;?>" alt="100%x280" style="height: 280px; width: 280px; display: block;" src="http://via.placeholder.com/356x280" data-holder-rendered="true" >
            <p class="card-text"><?php echo $descripcion;?>
             <!--<button type="button" class="btn btn-outline-info btn-sm" href=view.php?id<?php echo $id ?>>
              Leer Mas
            </button> -->
            <a href=view.php?id=<?php echo $id ?> class="badge badge-info"> Ver mas</a>

            </p>
            
          </div>




 				<?php  

				 }

		}else{
			echo "Oops! Parece que no hay nada relacionado a lo que buscas.";
		}

	}

 ?>
		 </div>
	</div>
  </div>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Regresame al Inicio</a> 
        </p>
        <p>IMLRE beta!</p>
        
      </div>
    </footer>

</body>
</html>
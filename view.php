
<!DOCTYPE html>
<html lang="es">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/view.css">
<head>
	<title>Reseña</title>
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
<div class="container">
	<?php $id= $_GET['id']; ?>
</div>

<?php
  require 'php\conn.php';
  $query= "SELECT * FROM Albums,Resenias WHERE Resenias.idAlbum=Albums.idAlbum AND Albums.idAlbum = '$id' ";
  $query_run=mysqli_query($conn,$query);

  
  while($row= mysqli_fetch_array($query_run))
  {
     $id=$row['idAlbum'];
     $titulo= $row['Titulo'];
     $descripcion= $row['Descripcion'];
     $texto= $row['resenia'];
     $imagen= $row['Link'];
     $genero= $row['Genero'];
     $year=$row['Anio'];
  }

  
    ?>

<div class="container section">
            <div class="row">
                <div class="col-md-6">
                    <h3>
                        <?php echo $titulo;?>
                    </h3>
                    <p>
                        <?php echo $texto;?>
                    </p>
                    <h3><?php echo $genero;?></h3>
                    <h5><?php echo $year;?></h5>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo $imagen;?>" alt=""/>
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


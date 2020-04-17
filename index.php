<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/nav_bar.css">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/apoyo.css" />
    
    
    
 
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
    <title>IMLRE</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a href="index.php" class="navbar-brand">
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
          <a href="topalbum_index.html" class="nav-link">Loved List</a>
        </li>
        <li class="nav-item">
          <a href="apoyo_index.html" class="nav-link">Apoyo</a>
        </li>

      </ul>  
    </div>
    
   </nav>
  
  

  <div class="container">
        <header class="header">
            
        </header>
          <main class="content">
             <article class="article">
              <h1 align="center">Reseñas</h1>
              </article>
           <?php
  require 'php\conn.php';
  $query= "SELECT * FROM Albums LIMIT 3";
  $query_run=mysqli_query($conn,$query);
  
    while($row = $query_run ->fetch_assoc())
    {
      $id=$row['idAlbum'];
     $titulo= $row['Titulo'];
     $descripcion= $row['Descripcion'];
     $imagen= $row['Link'];
     $genero= $row['Genero'];
     $year=$row['Anio'];
    
    ?>
    <hr>
           
                <article class="article">
                <h1><a href="view.php?id=<?php echo $id ?>"><?php echo stripslashes($titulo); ?></a></h1>
                <a ><picture><img src="<?php echo $imagen;?>" alt="" style="height: 250px; width:250px; display: block;" ></picture></a>
                <h2 class="anio"><?php echo $year;?></h2>
                <P class="caja"><?php echo stripslashes($descripcion);?> </P>
                <a href="view.php?id=<?php echo $id ?>" class="badge badge-info"> Ver mas</a>

            </article>

<?php
      }
        ?>
          
        </main>

        <aside class="sidebar">
            <div>
                <h1 align="center">Noveades</h1>
                         <?php
  require 'php\conn.php';
  $query= "SELECT Titulo,Anio,Hora_fecha,Link,Albums.idAlbum FROM Resenias,Albums WHERE Resenias.idAlbum=Albums.idAlbum ORDER BY Hora_fecha DESC LIMIT 4;";
  $query_run=mysqli_query($conn,$query);
  
  
    while($row = $query_run ->fetch_assoc())
    {
      
     $id=$row['idAlbum'];
     $titulo= $row['Titulo'];
     $imagen= $row['Link'];
     $Hora_fecha=$row['Hora_fecha'];
     $year=$row['Anio'];

    ?>
    <hr>
    
                <a><picture><img src="<?php echo $imagen;?>" alt="" style="height: 250px; width:250px; display: block;" ></picture></a>
                <h3><a href=view.php?id=<?php echo $id ?>><?php echo $titulo;?></a></h3>
                <P class="anio"><?php echo $year;?> </P>
                <P class="caja"><?php echo $Hora_fecha;?> </P>
            </article>
    
            <?php
      }
        ?>
           
        </aside>

<header class="header">

            <h1 align="center">Top Album</h1>
        </header>

<?php
  require 'php\conn.php';
  $query= "SELECT Titulo,Link,Albums.idAlbum FROM Resenias,Albums WHERE Resenias.idAlbum=Albums.idAlbum ORDER BY nocomen DESC LIMIT 5;";
  $query_run=mysqli_query($conn,$query);
  
    while($row = $query_run ->fetch_assoc())
    {
      $id=$row['idAlbum'];

    ?>
        <div class="related-post">
          <a href=view.php?id=<?php echo $id ?>><picture><img src="<?php echo $row['Link'];?>" alt="" style="height: 180px; width:100%; display: block;" ></picture></a> 
        </div>
                <?php
      }
        ?>
        <div class="related-post">
          <p><a href="topalbum_index.html">Loved List</a></p>
        </div>
  
        <footer class="footer">
            <div class="container">
        
        <p align="center">IMLRE beta!</p>
        
      </div>
        </footer>

    </div>
  </body>
</html>
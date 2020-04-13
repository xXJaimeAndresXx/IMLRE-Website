

<!DOCTYPE html>
<html lang="es">
<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/reseña.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="
sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<head>
	<meta charset="utf-8">
	 <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">--> 
	<title></title>
</head>
<body>
	
    <!--<div class="navbar navbar-inverse navbar-dark bg-dark">
      <div class="container d-flex justify-content-between">
        <a href="http://lacodeid.com/" class="navbar-brand">IMLRE</a>
         <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
            </ul>
      </div>
    </div>-->
   <!--<nav class="navbar navbar-inverse bg-inverse" style="background-color: #000000;">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>  
    </button>
    <a class= "navbar-brand" href="index.html">
      <img src="img/sunny.jpg" width="30px" height="30px" class="d-inline-block align-top" alt="real emo">
     IMLRE
    </a>
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Inicio</a>
      <a class="nav-item nav-link" href="#">Reseñas</a>
      <a class="nav-item nav-link" href="#">Novedades</a>
      <a class="nav-item nav-link" href="#">Apoyo</a>
    </div>

   </nav>-->

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
          <a href="#" class="nav-link">Inicio</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Reseñas</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Novedades</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Apoyo</a>
        </li>

      </ul>  
    </div>
    
   </nav>

    <section class="jumbotron text-center">
       <div class="container">
        <h1 class="text-muted">Buscar Reseñas:</h1>
        <form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>GENRE</option>
                                <option>Rock</option>
                                <option>Pop</option>
                                <option>Electronic </option>
                                <option>Hip Hop</option>
                                <option>Other</option>
                                <option>Example one</option>
                            </select> 
                        </div>
                         <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>YEAR</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                            </select>
                        </div>
                          
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="button" class="btn btn-primary wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </section>
    <?php
  require 'php\conn.php';
  $query= "SELECT * FROM reviews ";
  $query_run=mysqli_query($conn,$query);
  
  while($row= mysqli_fetch_array($query_run))
  {
    ?>
    

    <div class="album text-muted">
      <div class="container">

        <div class="row">
          <div class="card">
           <img src="img/<?php echo $row['imagen'];?>" alt="100%x280" style="height: 280px; width: 100%; display: block;" src="http://via.placeholder.com/356x280" data-holder-rendered="true">
            <p class="card-text"><?php echo $row['descripcion'];?></p>
          </div>
          <div class="card">
            <img data-src="img/<?php echo $row['imagen'];?>" alt="100%x280" style="height: 280px; width: 100%; display: block;" src="http://via.placeholder.com/356x280" data-holder-rendered="true">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet fermentum velit. Donec turpis metus, consequat vel aliquam venenatis.</p>
          </div>
          <div class="card">
           <img data-src="holder.js/100px280/thumb" alt="100%x280" style="height: 280px; width: 100%; display: block;" src="http://via.placeholder.com/356x280" data-holder-rendered="true">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet fermentum velit. Donec turpis metus, consequat vel aliquam venenatis</p>
          </div>

          <div class="card">
            <img data-src="holder.js/100px280/thumb" alt="100%x280" style="height: 280px; width: 100%; display: block;" src="http://via.placeholder.com/356x280" data-holder-rendered="true">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet fermentum velit. Donec turpis metus, consequat vel aliquam venenatis</p>
          </div>
          <div class="card">
            <img data-src="holder.js/100px280/thumb" alt="100%x280" style="height: 280px; width: 100%; display: block;" src="http://via.placeholder.com/356x280" data-holder-rendered="true">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet fermentum velit. Donec turpis metus, consequat vel aliquam venenatis</p>
          </div>
          <div class="card">
            <img data-src="holder.js/100px280/thumb" alt="100%x280" style="height: 280px; width: 100%; display: block;" src="http://via.placeholder.com/356x280" data-holder-rendered="true">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet fermentum velit. Donec turpis metus, consequat vel aliquam venenatis</p>
          </div>

          <div class="card">
            <img data-src="holder.js/100px280/thumb" alt="100%x280" style="height: 280px; width: 100%; display: block;" src="http://via.placeholder.com/356x280" data-holder-rendered="true">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet fermentum velit. Donec turpis metus, consequat vel aliquam venenatis</p>
          </div>
          <div class="card">
            <img data-src="holder.js/100px280/thumb" alt="100%x280" style="height: 280px; width: 100%; display: block;" src="http://via.placeholder.com/356x280" data-holder-rendered="true">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet fermentum velit. Donec turpis metus, consequat vel aliquam venenatis</p>
          </div>
          <div class="card">
            <img data-src="holder.js/100px280/thumb" alt="100%x280" style="height: 280px; width: 100%; display: block;" src="http://via.placeholder.com/356x280" data-holder-rendered="true">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet fermentum velit. Donec turpis metus, consequat vel aliquam venenatis</p>
          </div>
        </div>

      </div>
    </div>

        <?php
      }
        ?>







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
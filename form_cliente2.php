<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>datos Clientes</title>

    <nav class="navbar navbar-expand-lg" style="background-color: #000000; ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: white" ;>Laboratorio1</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="cliente.php" style="color: white">Clientes</a>
        </li>
    
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<br>
    
  </head>
  <body>
    


<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 p-5 bg-white shadow-lg rounded">
        <h3> Nuevo producto con ajax</h3>
            <hr>
            <form method="post" action="">
            <div class="form-group">
                    <label for="codigo">Codigo</label>
                    <input id="codigo" class="form-control" type="text" name="Codigo">
                </div>
                <div class="form-group">
                    <label for="nombres">Nombres</label>
                    <input id="nombres" class="form-control" type="text" name="Nombres">
                </div>

                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input id="apellidos" class="form-control" type="text" name="Apellidos">
                </div>

                <div class="form-group">
                    <label for="DUI">DUI</label>
                    <input id="DUI" class="form-control" type="text" name="Dui">
                </div>
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input id="direccion" class="form-control" type="text" name="Direccion">
                </div>

                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input id="telefono" class="form-control" type="text" name="Telefono">
                </div>

                <div class="form-group">
                    <label for="mail">Email</label>
                    <input id="mail" class="form-control" type="text" name="Mail">
                </div>

                

                <br/>
            <button class="btn btn-primary" id ="enviar" type="botton">enviar</button> 
            </form>

        </div>
    </div>
    <br>
    <div id= "Msg"> </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="Ajax/funcion.js"></script>
    
    
  </body>
</html>
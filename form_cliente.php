<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Nuevo Clientes</title>

<br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </head>
  <body>
    


<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 p-5 bg-white shadow-lg rounded">
        <h3> Datos cliente</h3>
            <hr>
            <form method="post" action="recibe_clientes.php">
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
            <button class="btn btn-primary" type="submit">enviar</button> 
            </form>

        </div>
    </div>
    
</div>






    
    
  </body>
</html>
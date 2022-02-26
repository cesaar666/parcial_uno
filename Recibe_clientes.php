<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>tabla costos</title>


  </head>
  <body>
  <div class="container">
    <div class="row justify-content-center">
        <div class="p-5 bg-white shadow-lg rounded">
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">DUI</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbo
    <tr>
    
      <td> <?php echo $_POST['Codigo'] ?> </td>
      <td> <?php echo $_POST['Nombres']?> </td>
      <td> <?php echo $_POST['Apellidos']?> </td>
      <td> <?php echo $_POST['Dui']?> </td>
      <td> <?php echo $_POST['Direccion']?> </td>
      <td> <?php echo $_POST['Telefono']?> </td>
      <td> <?php echo $_POST['Mail']?> </td>


    </tr>

</div>
</div>
</div>
   
  </tbody>
</table>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>
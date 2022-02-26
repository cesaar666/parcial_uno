
<?php  //Esto no nace nada.

$codigo = $_POST ['codigo'];
$nombres = $_POST ['nombres'];
$apellidos = $_POST ['apellidos'];
$DUI = $_POST ['DUI'];
$direccion = $_POST ['direccion'];
$telefono = $_POST ['telefono'];
$mail= $_POST ['mail'];
?>

  <div class="container">
    <div class="row justify-content-center">
        <div class=" p-5 bg-white shadow-lg rounded">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">codigo</th>
      <th scope="col">nombres</th>
      <th scope="col">apellidos</th>
      <th scope="col">DUI</th>
      <th scope="col">direccion</th>
      <th scope="col">telefono</th>
      <th scope="col">mail</th>
      
    </tr>
  </thead>
  <tbo
    <tr>
    
      <td> <?php echo $_POST['codigo']?> </td>
      <td> <?php echo $_POST['nombres']?> </td>
      <td> <?php echo $_POST['apellidos']?> </td>
      <td> <?php echo $_POST['DUI']?> </td>
      <td> <?php echo $_POST['direccion']?> </td>
      <td> <?php echo $_POST['telefono']?> </td>
      <td> <?php echo $_POST['mail']?> </td>



    </tr>

</div>
</div>
</div>
   
  </tbody>
</table>

    
 
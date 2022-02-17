<!doctype html>
<html lang="en">
<?php
    include_once('D:\xampp\htdocs\Modulos\View\Layout\Header.php');
  ?>
      <title>Crontab</title>
  <?php
   include_once 'D:\xampp\htdocs\Modulos\Models\Conexion.php';
   $objeto = new Conexion();
   $conexion = $objeto->Conectar();

   $consulta = "SELECT * FROM crontab";
   $resultado = $conexion->prepare($consulta);
   $resultado -> execute();
   $datos=$resultado->fetchALL(PDO::FETCH_ASSOC);
 ?>

  <body>

<?php
    include_once('D:\xampp\htdocs\Modulos\View\Tables\Crontab_t.php');
  ?>

<script>
      $(document).ready(function(){
         $('#Crontab').DataTable(); 
      });
    </script>
    <?php
    include_once('D:\xampp\htdocs\Modulos\View\Layout\Footer.php');
  ?>
  </body>
</html>

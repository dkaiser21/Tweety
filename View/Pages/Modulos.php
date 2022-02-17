<!doctype html>
<html lang="en">
<?php
    include_once('D:\xampp\htdocs\Modulos\View\Layout\Header.php');
  ?>
  <?php
   include_once 'D:\xampp\htdocs\Modulos\Models\Conexion.php';
   $objeto = new Conexion();
   $conexion = $objeto->Conectar();

   $consulta = "SELECT * FROM modulos";
   $resultado = $conexion->prepare($consulta);
   $resultado -> execute();
   $datos=$resultado->fetchALL(PDO::FETCH_ASSOC);
 ?>
    <title>Modulos</title>
    <style>
        table.dataTable thead {
            background: black;
            color:white;
        }
    </style> 
  </head>
  <body>
  <?php
    include_once('D:\xampp\htdocs\Modulos\View\Tables\Modulos_t.php');
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

<!doctype html>
<html lang="en">
  <head>
  <?php
   include_once 'Models/Conexion.php';
   $objeto = new Conexion();
   $conexion = $objeto->Conectar();

   $consulta = "SELECT * FROM modulos";
   $resultado = $conexion->prepare($consulta);
   $resultado -> execute();
   $datos=$resultado->fetchALL(PDO::FETCH_ASSOC);
 ?>
    <link rel="stylesheet" type="text/css" href="style.css"/> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--    Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Modulos</title>
    <style>
        table.dataTable thead {
            background: black;
            color:white;
        }
    </style> 
  <body>
  <a href="http://localhost/crontab/">Ir a Crontab</a>
              <table id="Grillas" class="table table-striped" style="width:100%" >
                <thead class="text-center">
                  <tr>
                    <th>ID_MODULO</th>
                    <th>DESC_MODULO</th>
                    <th>PADRE</th>
                    <th>LEVEL</th>
                    <th>UBICACION</th>
                  </tr>
                </thead>
        <tbody>
<?php
foreach($datos as $dato){
?>
<tr>
            <th><?php echo $dato['ID_MODULO']?></th>
            <th><?php echo $dato['DESC_MODULO']?></th>
            <th><?php echo $dato['PADRE']?></th>
            <th><?php echo $dato['LEVEL']?></th>
            <th><?php echo $dato['UBICACION']?></th>
          </tr>
<?php
}
?>
        </tbody>
    </table>
  </body>
</html>
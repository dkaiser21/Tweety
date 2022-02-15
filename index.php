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
  </head>
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
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--    Datatables  -->
    <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
-->
    <script>
      $(document).ready(function(){
         $('#Grillas').DataTable(); 
      });
    </script> 
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->




    <script src="~/scripts/jquery-1.10.2.js"></script>

<!-- #region datatables files -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<!-- #endregion -->
  </body>
</html>

<!doctype html>
<html lang="en">
<?php
    include_once('D:\xampp\htdocs\Modulos\View\Layout\Header.php');
    include_once('D:\xampp\htdocs\Modulos\Controllers\Modulos_c.php');
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

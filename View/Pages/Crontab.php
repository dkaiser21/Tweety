<!doctype html>
<html lang="en">
<?php
    include_once('D:\xampp\htdocs\Modulos\View\Layout\Header.php');
    include_once('D:\xampp\htdocs\Modulos\Controllers\Crontab_c.php');
  ?>
      <title>Crontab</title>
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

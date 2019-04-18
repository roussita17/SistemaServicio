<?php
session_start();
if (!isset($_SESSION['Usuario'])){
  header('Location: ..\index.php');
}
?>
<!DOCTYPE html>
<html lang="sp">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro de Un Nuevo Proyecto</title>

    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="../css/w3.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-datepicker.css" >
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <script>
          $(function() {
            $('.dates #usr1').datepicker({
              //'format': 'dd-mm-yyyy',
              'format': 'yyyy-mm-dd',
              'autoclose': true
            });
            $('.dates #usr2').datepicker({
              //'format': 'dd-mm-yyyy',
              'format': 'yyyy-mm-dd',
              'autoclose': true
            });
          });
    </script>
    
  </head>

  <body class="fondito">
  <?PHP
      require 'cabezera.php' ;
      ?>
    <div id="wrapper">    
      <?PHP
      require 'slider.php' ; 
      ?>
      <div id="content-wrapper">
        <div class="container-fluid">
           <!-- Poner todo el desmadre que quieras aqui xD  -->
      <div class="card card-register mx-auto mt-2">
        <div class="card-header" id="fondoP">
          <span class="mediana nito ">Proyecto Nuevo </span>
        </div>

        <span class="chica nito">
          <div class="card-body">
            <form action="PHP\RegProyecto.php" method="POST">
            <div>
              T&iacute;tulo del Proyecto:
              <input class="w3-input" name ="titulo" type = "Text" placeholder = "Título del Proyecto">
            </div>
            <br>
            <div>
              Clave del Proyecto:
              <input class="w3-input" name="cvep" type = "Text" placeholder = "Clave del Proyecto">
            </div>
            <br>
            <div class="dates w3-row-padding">
              <label>Vigencia:</label><br>
              <div class="w3-third">
                De: <input  class ="w3-input"type="text" name="usr1" id="usr1" name="event_date" placeholder="YYYY-MM-DD" autocomplete="off" >
              </div>
              <div class="w3-third">
                A: <input class ="w3-input" type="text" name ="usr2" id="usr2" name="event_date" placeholder="YYYY-MM-DD" autocomplete="off" >
              </div>
            </div>
            <br>
            <div>
              Director(a) del Proyecto:
              <input class="w3-input" name="dirname" type = "Text" placeholder = "Nombre del Director(a)">
            </div>
            <br>
            <div>
              Colaboradores:
              <input class="w3-input" name="colaboradores" type = "Text" placeholder = "Nombre de los Colaboradores">
            </div>
            <br>
              <input type="submit" class="btn w3-color-blue" id="botonProyNuevo" value="Aceptar">
              <br><br>
            </form>
          </div>
        </div>
        </span> 
      </div>
        </div>
    </div>
    <?php require_once 'logout.php' ; ?>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
  </body>

</html>

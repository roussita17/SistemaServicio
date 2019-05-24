<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sistema Servicio </title>

    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="../css/estilos.css">
<link rel="javascript" href="../js/Estilo.js">

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
      <div class="card card-register mx-auto mt-2" id="fondoTarjeta">
        <span class="chica nito">
           <div class="card-body">
           <div>
              <span class="grande nito">Tercer informe Parcial </span>
                <br>
                <div class="w3-third">
                  <input type="date" class ="form-control" type="text" name="usr1" id="fechaIzq" name="event_date"  value="2019-01-01" autocomplete="off">
                </div><br><br>
                <table class="table table-bordered" id="tabla">

                    <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                    </tr>
                    </tbody>
                </table>                            
                 </div>  <br>
                 <div class="izquierda">
                   <span class="chica"> Avance del Proyecto:</span>
                   <input class="fecha1" id="fAvance" type ="text" placeholder="%">
                   <br><br>               
                   <span class="chica"> Monto Ejercido:</span>
                   <input class="fecha1" id="montoEjer" type ="text" placeholder="$">
                 </div>
                 <br>
                 <div class="form-group" id="tabla">
                   <label><span class="mediana nito">Resumen</span></label>
                   <textarea class="form-control" rows="10" id="comment"></textarea>
                 </div>
                 <br><br><br><br><br><br><br><br>
                 <div class="form-group" id="tabla">
                   <label><span class="mediana nito">Comentarios</span></label>
                   <textarea class="form-control" rows="3" id="comment"></textarea>
                 </div>
                 <br>
                 <table class="table table-bordered" id="tabla2">
                 <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                    </tr>
                    </tbody>
                </table>    
                <br>
                 <p>
                   <span class="chica nito">
                   *La firma del aval prodra ser preferentemente del Jefe de la Division de Estudios 
                   de Posgrado e Investigacion, el Jefe de Departamento Academico correspondiente o del Subdirector Academico.
                   </span>
                 </p>          
    </div>
            
            
            
           
           
         
           
           
          </div>
        </span> 
      </div>
    </div>
    </div>
    <!-- -->
    <div class="modal fade" id="dialogo" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-body">
          <p id ="resultados"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="$(location).attr('href','Index.php');">Ir a Inicio</button>
        </div>
      </div>
    </div>
  </div>
    <?php require_once 'logout.php' ; ?>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="../js/demo/datatables-demo.js"></script>
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="js/modifi.js"></script>
  </body>
</html>
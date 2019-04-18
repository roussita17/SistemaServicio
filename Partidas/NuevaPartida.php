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
<link rel="stylesheet" href="../css/Estilo.css">
<link rel="javascript" href="../js/Estilo.js">

</head>
<body>
<body id="page-top" class="fondito">
      <?PHP
      require_once 'cabezera.php' ;
      ?>
    <div id="wrapper">    
      <?PHP
      require_once 'slider.php' ; 
      ?>
      <div id="content-wrapper">
        <div class="container-fluid">
            <?php
            /*
            Numero de Partida <input type="text" id="NumPart" value='.$reg['NumPartida'].' class="w3-input w3-border w3-margin-bottom"><br>';
            $salida .= 'Monto Total <input type="text" id="Monto" value='.$reg['Monto'].' class="w3-input w3-border w3-margin-bottom"><br>';
            $salida .= 'Descripcioon de la Partida <input type="text" id="Desc" value='.$reg['Descripcion'].' class="w3-input w3-border w3-margin-bottom"><br>';
            $salida .= 'Numero de Factura <input type="text" id="NumFact" value='.$reg['Factura'].' class="w3-input w3-border"><br>';
            $salida .= 'Nombre de la Empresa <input type="text" id="NomEmp" value='.$reg['Empresa'].' class="w3-input w3-border w3-margin-bottom"><br>';
            $salida .= '<button class="w3-button w3-blue" onclick="actualiza()">Modificar Partida</button>    ';
            $salida .= '<button class="w3-button w3-red" onclick="cierraFormulario()">Cancelar</button>';
            */
            ?>
           <!-- Poner todo el desmadre que quieras aqui xD  -->
        <span class="chica nito">
           <div class="card card-register mx-auto mt-4">
           <div class="card-header" id="fondoP">
             <span class="mediana nito ">Nueva Partida</span>
            </div>
           <div class="card-body">
            <div>
            <label class="control-label col-sm-6" >N&uacute;mero de Partida:</label>
            <input class="w3-input" type = "Text" placeholder = "N&uacute;mero de partida" name="numpart">
            </div><br>
            <div >
            <label class="control-label col-sm-6" >Descripci&oacute;n de Partida:</label>
            <input class="w3-input" type = "Text" placeholder = "Descripci&oacute;n de partida" name=" Decpart" id="Desc">
              <br><br>
              <input type = "submit" value="Aceptar" class="btn" id="botonProyNuevo" onClick="inserta()">
              <form>
            </div><br><br>
        </div>
</span>

        </div>
        </span> 
      </div>
    </div>
    <?php require_once 'logout.php' ; ?>
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
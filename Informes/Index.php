<?php 
session_start();
if (!isset($_SESSION['Usuario'])){
  header('Location: index.php');
}
//echo $_SESSION['Usuario']; 
?>
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
<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/w3.css">
    <link rel="javascript" href="../js/Estilo.js">

</head>
<body>
<body id="page-top" class="fondito">
      <?PHP
      require 'cabezera.php' ;
      ?>
    <div id="wrapper">    
      <?PHP
      require_once 'slider.php' ; 
      ?>
      <div id="content-wrapper">
        <div class="container-fluid">

           <!-- Poner todo el desmadre que quieras aqui xD  -->
           <h1> Vista de Proyectos</h1>
           
           <div id="contenidoTabla" class="container table-responsive">
           <table class="table table-hover">
            <thead>
            <tr>
                <th>Clave del Proyecto</th>
                <th>Titulo del Proyecto</th>
                <th>Director del Proyecto</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <?php
                include_once 'PHP/Conexion.php';
                $bd = new Conexion(); 
                $registros = $bd->query("SELECT `CveP`,`TituloP`,`DirProy` FROM `proyectos`");
                if ($registros->num_rows > 0 ){
                    while($reg = mysqli_fetch_array($registros)){
                        echo '<tr>' ;
                        //echo $reg['ID'].'<br>';
                        echo '<td>'.$reg['CveP'].'</td>';
                        echo '<td>'.$reg['TituloP'].'</td>';
                        echo '<td>'.$reg['DirProy'].'</td>';
                        echo '<td><button class="btn" onclick="selecInforme'."('".$reg['CveP']."'".')">Ver Mas</button></td>';
                        echo '</tr>';
                    }
                }
                $bd->close();
                ?>
           </tbody>
           </table>
           </div> 
        </div>
      </div>
    </div>
    <div id="Formulario" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('Formulario').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Cerrar Formulario">×</span>
                Descripcion General del Proyecto
            </div>
            <br>
            <div id="frmmodi" class="w3-container">
            </div>
            <br>
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
    <script src="../js/modifi.js"></script>
</body>
</html>
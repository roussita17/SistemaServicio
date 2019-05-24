<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<div >
<ul class="sidebar navbar-nav" id="fondoSlider">
<img src="../img/logo-TecNM2.png" class="Logo">
<input type="text" class="loguito">
        <li class="nav-item active">
            <a class="nav-link" href="../Doctores/Bienvenida.php">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Menu Principal</span>
            </a>
        </li>
        <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-folder"></i>
              <span>Proyectos</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <a class="dropdown-item" href="../Doctores/Index.php">Mostrador de Proyectos</a>
              <a class="dropdown-item" href="../Doctores/RPP.php">Agregar Partida a Proyecto</a>
            </div>
          </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-table"></i>
            <span>Reportes</span></a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="../Doctores/CreaReporte.php">Crear Reporte</a>
          </div>
        </li>
      </ul>
</div>
</body>
</html>
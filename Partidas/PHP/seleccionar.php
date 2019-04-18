<?php
session_start();
require_once 'Conexion.php';
$bd = new Conexion(); 
$ide = mysqli_real_escape_string($bd,$_POST['Id']);
$salida = '<div class="w3-container">';
$registros = $bd->query("SELECT `NumPartida`, `Descripcion` FROM `partidas` WHERE `NumPartida` =".$ide);
if ($registros->num_rows > 0 ){
    while($reg = mysqli_fetch_array($registros)){
      $np = $reg['NumPartida'];
      $dscr = $reg['Descripcion'];
    }
}
$bd->close();
?>
<div>
<?php
//print $dscr ;
?>
N&uacute;mero de partida: <input type= "text" id="NumPart" value ="<?php echo $np; ?>" class = "w3-input w3-border w3-margin-bottom"><br>
Descripci&oacute;n de Partida: <input type= "text" id="Desc" value ="<?php echo $dscr; ?>" class = "w3-input w3-border w3-margin-bottom"><br>
<button class="w3-button w3-blue" onclick="actualiza()">Guardar Cambios</button>
<button class="w3-button w3-green" onclick="document.getElementById('Formulario').style.display='none'">Aceptar</button>
</div>
<!--
<form class="w3-container" action="/action_page.php">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Password" name="psw" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>
-->
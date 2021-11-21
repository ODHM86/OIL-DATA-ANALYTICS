<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
  <head><meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
    
    <title>Digital Oil Field</title>
    <link rel="stylesheet" type="text/css" href="of.css" />
  </head>

  <body id="body">
  <div id='banner'>
  <center><a id='top' href='http://www.LOCALHOST/'> <img src='img/LOGO-OIL-PIXELS.png' alt='Home page'>
  </a></center>
  </div>
  <div id="encabezamiento">
  <center><a id='seccion' href='index.php?seccion=1'>INICIO</a>
       <a id='seccion' href='index.php?seccion=2'>DATA</a>
       <a id='seccion' href='index.php?seccion=3'>PLOTS</a>
       <a id='seccion' href='index.php?seccion=4'>DASHBOARD</a>
       <a id='seccion' href='index.php?seccion=5'>LOGS</a>
    </center></div>
  </div>

  <div id="contenedor">
  <div id="contenido">
    <div id="primera-columna">
     <table id="menu-pozos">
     <td>Menu de pozos</td>
     </table>
    </div>
    
    <div id="contenido-interior">
     <table>
     <td>
     {Data/Plots/IPR/Map/logs(well logs, production logs, characterization logs, pressure build ups, drawdowns)/import/export/Inputs/petrophysical sections//plugins(field devices: pressure gauges, artificial lift sensors, flow meters, temperature meters.//report system (file creation)}
     </td>
     </table>
    
    </div>
    <div id="contenido-interior-seccion">
      contenido sección 
     
      <?php
$error="No hubo error";
if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
    echo '</br>Tipo:<b>', $_FILES['archivo']['type'],'</br>';
    echo "<br/>";
    echo 'Nombre:<b>', $_FILES['archivo']['name'],'</br>';
    $FILE_NAME=$_FILES['archivo']['name'];
    echo '<br/>';
    echo 'Tamaño:<b>', $_FILES['archivo']['size'],'</br>';
    echo '</br>';
    move_uploaded_file($_FILES['archivo']['tmp_name'],
                        $_FILES['archivo']['name']);
    
}
else {
    switch ($_FILES['archivo']['error']){
        case UPLOAD_ERR_OK:
            $error="Error al subir el archivo";
            break;
        case UPLOAD_ERR_INI_SIZE:
            $error="Error en el tamaño del archivo";
            break;
        case UPLOAD_ERR_FORM_SIZE:
            $error="Error ";
            break;
        case UPLOAD_ERR_PARTIAL:
            $error="Solo se subio el archivo parcialmente";
        case UPLOAD_ERR_NO_FILE:
            $error="No hay archivo subido";
            break;
        case UPLOAD_ERR_NO_TMP_DIR:
            $error="No hay directorio temporal";
            break;
        default:
            $error="Hubo algun error al subir el archivo";
    }
}
echo "<form action='index.php'>";
echo "<input type='hidden' name='err_file' value='$error'>";
echo "<input type='hidden' name='feedback_file' value='1'>";
echo "<input type='hidden' name='FILE_NAME' value='$FILE_NAME'>";
echo "<input type='submit' value='OK'";
?>
    </div>
    
  </div>
  </body>
</html>

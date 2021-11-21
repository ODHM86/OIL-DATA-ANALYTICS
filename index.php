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
      contenido sección </br>
      Sube el archivo *.csv o *.xls
      <form name="archivo" enctype="multipart/form-data"
        action="archivo.php" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="900000000" />
        <input type="file" name="archivo" />
        <input type="submit" value="Enviar" />
        </form>

      <?php
      if(isset($_GET['FILE_NAME'])) { $FILE_NAME=$_GET['FILE_NAME'];
        echo "</br>Nombre de archivo:", $FILE_NAME,"</br>";
           }
      if(isset($_GET['err_file'])) { $err_file=$_GET['err_file'];
         echo "Resultado:", $err_file,"</br>";
            }
      if(isset($_GET['feedback_file'])) { $feedback_file=$_GET['feedback_file'];
          echo "Flag:", $feedback_file,"</br>";
          echo "<table>";
          define('FILE_NAME',$FILE_NAME);
          $fichero=fopen(FILE_NAME, 'r') or die ('Error de apertura');
//          $fichero_slice=fread($fichero,50);
          
//          echo "</br>Recursive",count($buffer),"</br>";
         
//          echo "Count:",$count;
          $i=0;
            while (!feof($fichero)){
            $buffer=fgetcsv($fichero,4095,",");
            $count=count($buffer);
            $count_m=$count-1;
//            if ($buffer[$i]<=$count_m){
              echo "<tr>";
              for ($j = 0; $j < $count; $j++){
                echo "<td>",$buffer[$j],"</td>";
              }
              echo "</tr>";
              $i=$i+1;
//            }
          }
                  }
      ?>
    </div>
    
  </div>
  </body>
</html>
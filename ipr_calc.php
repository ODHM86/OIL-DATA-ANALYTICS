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
       <a id='seccion' href='plots.php'>PLOTS</a>
       <a id='seccion' href='index.php?seccion=4'>DASHBOARD</a>
       <a id='seccion' href='index.php?seccion=5'>LOGS</a>
    </center></div>
  

  <div id="contenedor">
  <div id="contenido">
    <div id="primera-columna">
     Menu de pozos
    </div>
    <div id="contenido-interior">
     {Data/Plots/IPR/Map/logs(well logs, production logs, characterization logs, pressure build ups, drawdowns)/import/export/Inputs/petrophysical sections//plugins(field devices: pressure gauges, artificial lift sensors, flow meters, temperature meters.//report system (file creation)}
    </div>
    <div id="contenido-interior-seccion">
      
      <?php
      if(isset($_GET['Qo'])){$Qo=$_GET['Qo'];
      echo "</br>Oil Production Qo: ", $Qo,"</br>";
      }
      if(isset($_GET['Pwf'])){$Pwf=$_GET['Pwf'];
      echo "</br>Flowing bottom hole Pressure Pwf: ", $Pwf,"</br>";
      }
      if(isset($_GET['Pws'])){$Pws=$_GET['Pws'];
      echo "</br>Reservoir Pressure Pws: ", $Pws,"</br>";
	}
	if(isset($_GET['File'])){$File_name=$_GET['File'];
	echo "</br>File name:",$File_name,".csv</br>";
	define('FILE_NAME',$File_name);
	}
	
	else {
	    echo "No parameters received";
	}

      echo "<center><table id='oil'>";
      echo "<tr><td>Pwf</td><td>Qo</td></tr>";
      $i=0;
      $pwf_buffer[$i]=$Pws;
      $dpws=($Pws/50);
      $qo_max=$Qo/(1+(-0.2*($Pwf/$Pws)-0.8*(($Pwf/$Pws)**2)));
      echo "</br></br>Qomax= ",$qo_max,".";
      while ($pwf_buffer[$i]>=0){
          $Qo_pwf[$i]=$qo_max*(1-(0.2*($pwf_buffer[$i]/$Pws))-0.8*(($pwf_buffer[$i]/$Pws)**2));
         // echo "Qo: ",$Qo_pwf[$i],",";
         // echo "Pwf: ",$pwf_buffer[$i],".";
          $buffer_pwf_qo[$i]=array('Qo'=>$Qo_pwf[$i],'Pwf'=>$pwf_buffer[$i]);
          echo "<tr><td>",$pwf_buffer[$i],"</td><td>",$Qo_pwf[$i],"</td></tr>";
            $pwf_buffer[$i+1]=$pwf_buffer[$i]-$dpws;
          $i=$i+1;
          
	

          
      }
      echo "</table></center>";
      echo "</br></br>";
      
 
	$fp = fopen(''.$File_name.'.csv', 'w');

	foreach ($buffer_pwf_qo as $campos) {
	fputcsv($fp, $campos,',','"','/');
		}

	fclose($fp);

    $File_plot="".$File_name.".csv";
      echo "</br></br>";
          echo "<form action='plot_ipr.php'>";

	echo "<input type='hidden' name='FILE_NAME' value=$File_plot>";

          
          echo "<input type='submit' value='Plot IPR'>";
         
                  
      ?>
    </div>
    
  </div>
  </div>
  </body>
</html>
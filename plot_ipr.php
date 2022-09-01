<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
  <head><meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
    
    <title>Digital Oil Field</title>
    <link rel="stylesheet" type="text/css" href="of.css" />
<?php
	if(isset($_GET['FILE_NAME'])) { $FILE_NAME=$_GET['FILE_NAME'];
        
           }
      if(isset($_GET['err_file'])) { $err_file=$_GET['err_file'];
        
            }
        if(isset($_GET['Qo_max'])){ $Qo_max = $_GET['Qo_max'];
          $Qo_max = $Qo_max + 10;
        }
    if (isset($_GET['Pws'])) {$Pws = $_GET['Pws'];
    }
        
          define('FILE_NAME',$FILE_NAME);
          $fichero=fopen(FILE_NAME, 'r') or die ('Error de apertura');
	if(isset($_GET['buffer'])) { $buffer=$_GET['buffer'];
	}
	if(isset($_GET['fichero'])) { $fichero=$_GET['fichero'];
	}
//    $Qo_max = settype($Qo_max, 'double');





    $script1='<script>
    window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	zoomEnabled: true,
	title:{
		text: "IPR"
	},
	axisX: {
		title:"Qo",
		minimum: 0,
		maximum: '. $Qo_max .'
	},
	axisY:{
		title: "Pwf",
		valueFormatString: "#,###",
		minimum: 0,
		maximun: '. $Pws .'
	},
	data: [{
		type: "scatter",
		toolTipContent: "<b>Qo: </b>{x} units<br/><b>Pwf: </b>Pwf{y}units",
		dataPoints: [
			';


    echo $script1;
	$fichero=fopen(FILE_NAME, 'r') or die ('Error de apertura');
	
	$j=0;
	while (!feof($fichero)){
	$enclosure='"';
	$buffer=fgetcsv($fichero,4095,",",$enclosure,"/");

	if (gettype($buffer[0]) == 'string' and gettype($buffer[1]) == 'string'){
	    $a = $buffer[0];
	    $b = $buffer[1];
	}

//	$count=count($buffer);
//	$count_m=$count-1;
//            if ($buffer[$i]<=$count_m){
	//	if($j>0){
//	  for ($j = 0; $j < $count; $j++){
//	$d = strtotime($buffer[0]);
	//		echo "value",$d->format('Y');
	
	/* data type
	$a = gettype($buffer[0]);
	$b = gettype($buffer[1]);
	$c = settype($buffer[0], 'double');
	$d = settype($buffer[1], 'double');
	
	*/
	
	// next part is to get value type of buffer
	//echo "the value of a is ", $a;
	//echo "the value of b is ", $b;

			echo "{ x: ",$a,", y:",$b,"},
				";
//				$j=$j+1;
	    
	 
	 	if ($buffer[1] == 0) {
	    break;
	}
		 }
//		 else{
//			$j=$j+1;
		 
		
//            }
  


//			{ x: new Date(2017, 0, 3), y: 650 },
//			{ x: new Date(2017, 0, 4), y: 700 },
//			{ x: new Date(2017, 0, 5), y: 710 },
//			{ x: new Date(2017, 0, 6), y: 658 },
//			{ x: new Date(2017, 0, 7), y: 734 },
//			{ x: new Date(2017, 0, 8), y: 963 },
//			{ x: new Date(2017, 0, 9), y: 847 },
//			{ x: new Date(2017, 0, 10), y: 853 },
//			{ x: new Date(2017, 0, 11), y: 869 },
//			{ x: new Date(2017, 0, 12), y: 943 },
//			{ x: new Date(2017, 0, 13), y: 970 },
//			{ x: new Date(2017, 0, 14), y: 869 },
//			{ x: new Date(2017, 0, 15), y: 890 },
//			{ x: new Date(2017, 0, 16), y: 930 }

    


		$script3=']
	}]
});
chart.render();

}
</script>';
echo $script3;


?>


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
       <a id='seccion' href='ipr.php'>IPR</a>
    </center>
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
      Plots
    </br>
	<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
<script src="canvasjs.min.js"></script>
<br><center>
     <?php
      echo "<a href='https://www.odhm86.com/DigitalOilField/$FILE_NAME' download><button>Download file</button></a>";
     ?>
</center>


      <?php
      $command='echo "<h1>working</h1>"';
   //   $execute=shell_exec("$command");
    //  echo $execute
      ?>
    </div>

    
  </div>

  </body>
</html>
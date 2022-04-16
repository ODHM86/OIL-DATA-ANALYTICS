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
        
          define('FILE_NAME',$FILE_NAME);
          $fichero=fopen(FILE_NAME, 'r') or die ('Error de apertura');
	if(isset($_GET['buffer'])) { $buffer=$_GET['buffer'];
	}
	if(isset($_GET['fichero'])) { $fichero=$_GET['fichero'];
	}

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
		maximum: 30
	},
	axisY:{
		title: "Pwf",
		valueFormatString: "#,##"
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
	
	$buffer=fgetcsv($fichero,4095,",",$enclosure,'/');
//	$count=count($buffer);
//	$count_m=$count-1;
//            if ($buffer[$i]<=$count_m){
	//	if($j>0){
//	  for ($j = 0; $j < $count; $j++){
//	$d = strtotime($buffer[0]);
	//		echo "value",$d->format('Y');
			echo "{ x: ",$buffer[0],", y:",$buffer[1],"},
				";
//				$j=$j+1;
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



      <?php
      $command='echo "<h1>working</h1>"';
   //   $execute=shell_exec("$command");
    //  echo $execute
      ?>
    </div>

    
  </div>

  </body>
</html>
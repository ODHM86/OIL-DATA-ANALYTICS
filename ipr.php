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
       <a id='seccion' href='ipr.php'>IPR</a>
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
      </br><h1>IPR - Nodal Analysis</h1> </br>
      </br></br>
      
      <form action="ipr_calc.php">
            <h3>Pwf:</h3></br>
      <input type="text" name="Pwf" size="15"></br></br>
      <h3>Pws:</h3>
      <input type="text" name="Pws" size="15"></br></br>
      <h3>Qo:</h3>
      <input type="text" name="Qo" size="15"></br></br>
      <h3>File name:</h3>
      <input type="text" name="File" size="15"></br></br>
      <h3>Pb:</h3>
      <input type = "text" name="Pb" size = "15"></br></br>
      <input type="submit" value="IPR">
      </form>
      
      
    </div>
    
  </div>
  </div>
  </body>
</html>
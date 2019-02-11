<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="<?=CSS?>estilo_.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script type="text/javascript" src="<?=JS?>jquery-3.1.1.js"></script>
    <script type="text/javascript" src="<?=JS?>funciones-datos.js"></script>
    <script type="text/javascript" src="<?=JS?>config.js"></script>

  </head>
  <body onload="cargar('<?=$this->estudiantes?>',<?=$this->profesoras?>,'<?=$this->empresas?>','<?=$this->otros?>');">
    <!-- modal -->
    <div id="ventana" class="ventana">
      <h2 id="texto"></h2>
      <p id="texto-p"></p>
    </div>

    <div id="ventana" class="ventana">
      <h2 id="texto"></h2>
      <p id="texto-p"></p>
    </div>
    <!-- modal fin -->
    <div class="encabezado">
      <img src="<?=IMG?>logo.png" alt="">
      <button type="button" name="button" onclick="descarga();">Descargar excel</button>
    </div>
    <div class="totalAsist">
      <h1><?=$this->participantes?></h1>
      <p>Asistentes</p>
    </div>
    <div class="totalAsist">
      <h1><?=$this->confirmadas?></h1>
      <p>Confirmadas</p>
    </div>
    <div class="estadisticas">
      <div class="estadisticasSep">
        <p><?=$this->estudiantes?>%</p>
        <div class="barra">
          <div class="barrita" id="estudiantes">
          </div>
        </div>
        <h2>Estudiantes</h2>
      </div>
      <div class="estadisticasSep">
        <p><?=$this->profesoras?>%</p>
        <div class="barra">
          <div class="barrita" id="profesoras">
          </div>
        </div>
        <h2>Profesoras</h2>
      </div>
      <div class="estadisticasSep">
        <p><?=$this->empresas?>%</p>
        <div class="barra">
          <div class="barrita" id="empresas">
          </div>
        </div>
        <h2>Profesionistas</h2>
      </div>
      <div class="estadisticasSep">
        <p><?=$this->otros?>%</p>
        <div class="barra">
          <div class="barrita" id="otros">
          </div>
        </div>
        <h2>Otras</h2>
      </div>
    </div>
    <!-- <div class="menu">
      <div class="botonera2">
          <button type="button" name="button">Inicio</button>
          <button type="button" name="button">Asistentes</button>
      </div>
    </div> -->

    <div class="entrada">
      <h3>Institución</h3>
      <select onchange="contador();" id="institucion">
        <?=$this->instituciones?>
      </select>
      <div class="cantidad" id="cantidad">

      </div>
    </div>


    <div class="datosAsis">
      <!-- <i class="fas fa-search"></i> -->
      <input oninput="busqueda();" type="text" name="" id="busqueda" value="" placeholder="Código...">
      <table id="participantes">
        <tr id="primero">
          <td>Nombre</td>
          <td>Código</td>
          <td>Correo</td>
          <td>Institución</td>
          <td></td>
        </tr>
      </table>
    </div>
  </body>
</html>

<?php
  require('conex.php');
  require('enviar_email.php');

  $con = conexion();
  $nombre = $_POST["nombre"];
  $apellidos = $_POST["apellidos"];
  $fechaNac = $_POST["fechaNac"];
  $correo = $_POST["correo"];
  $rol =  $_POST["rol"];
  $info = $_POST["informacion"];
  $institucion = $_POST["institucion"];


  $codigo = generateRandomString();


  $cod = "SELECT codigoConfirmacion FROM registroparticipantes";
  $array = [];
  $res = $con->query($cod);

  while ($datos = $res->fetch_row()) {
    $array[] = $datos;
  }


   // echo $nombre;


  function validarCodigo($codigo, $array){
    for($i=0;$i<sizeof($array);$i++){
      if($array[$i] == $codigo){
        // echo "Entro";
        $codigo = generateRandomString();
        validarCodigo($codigo);
      } else {
        return $codigo;

      }

    }
  }

$code = validarCodigo($codigo, $array);
  if ($array == null) {
    $code=$codigo;
  }
  $flag = 0;
  $cor="SELECT correo From registroparticipantes";
  $rec = $con->query($cor);
  while ($data = $rec->fetch_row()) {
    if ($correo == $data[0]) {
        $flag = 1;
    }
  }
  if ($flag ==1 ) {
    echo "Correo ya registrado";
  }else {
    $qry = "INSERT INTO registroparticipantes(idRol, Nombre, Apellidos, fechaNacimiento, correo, idInstitucion, fuenteInformacion, codigoConfirmacion)
     VALUES ('{$rol}', '{$nombre}', '{$apellidos}', '{$fechaNac}', '{$correo}', '{$institucion}', '{$info}', '{$code}');";

     $ins = $con->query($qry);

     $final = enviar_email($correo, $code, $nombre);

    echo($final);
  }



?>

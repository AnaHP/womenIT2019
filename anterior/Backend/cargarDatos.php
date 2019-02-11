<?php
  require("conex.php");
  $con = conexion();
 
  $data = [];
 $q="";
 $quer="";
 $qry="";
  $qry = "SELECT * FROM instituciones;";
  $res = $con->query($qry);
  $inst = [];

  $quer="SELECT * FROM roles;";
  $rec=$con->query($quer);
  $rol = [];

  $q="SELECT * FROM canalesdifusion;";
  $r=$con->query($q);
  $difu = [];
  //die(var_dump($r));

  while ($datos = $res->fetch_row()){

    $inst[]=$datos;

  }
        // print_r($inst);
  while ($dat = $rec->fetch_row()){

    $rol[]= $dat;
  }

  while ($datosDif = $r->fetch_row()){

    $difu[]= $datosDif;
  }

   $data=[$inst,$rol,$difu];

   // print_r($data);

    echo  json_encode($data, JSON_UNESCAPED_UNICODE);
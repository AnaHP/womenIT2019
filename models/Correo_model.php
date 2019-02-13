<?php
class Correo_model extends Model{
  function __construct(){
    parent:: __construct();
  }
  public function getParticipantes($datos)
  {
    $participantes = $this->db->select("*","registroParticipantes","codigoAcceso = '{$datos}' AND estatusAsistencia='1' ");
    return $participantes;
  }

}
 ?>

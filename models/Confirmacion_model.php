<?php
class Confirmacion_model extends Model
{
  function __construct(){
    parent::__construct();
  }

  public function confirmar($datos){
     $cod = $this->db->select('*', 'registroParticipantes', "codigoAcceso='{$datos}'");
    if (is_array($cod)) {
      $this->db->Update(array('verificacionCorreo' => '1'),"registroParticipantes", "codigoAcceso='{$datos}'");
      return "1";
    }else{
      return "0";
    }
  }
  public function datos($datos){
    $data = $this->db->select('idRegistro,nombre, apellidos, correo', 'registroParticipantes', "codigoAcceso='{$datos}'");
      if (is_array($data))
      {
        return $data;
      }else{
        return "0";
      }
  }

}
?>

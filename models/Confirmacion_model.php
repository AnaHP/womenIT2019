<?php
class Confirmacion_model extends Model
{
  function __construct(){
    parent::__construct();
  }

  public function confirmar($datos){
     $cod = $this->db->select('*', 'registroParticipantes', "codigoConfirmacion='{$datos}'");
    if (is_array($cod)) {
      $this->db->Update(array('estatusCodigo' => 'Confirmado'),"registroParticipantes", "codigoConfirmacion='{$datos}'");
      return "1";
    }else{
      return "0";
    }
  }

}
?>

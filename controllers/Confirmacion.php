<?php

class Confirmacion extends Controller{
    function __construct() {
        parent::__construct();
    }

    public function clave($clv)
    {
      if($this->model->confirmar($clv)){
        $data = $this->model->datos($clv);
        $urlQR = $this->generateQR($data["idRegistro"], $clv);
        echo $this->sendEmail(
        array(
          'correo' => $data["correo"],
          'asunto' => 'WomenIT Código de acceso',
          'nombre' => $data["nombre"]." ".$data["apellidos"],
          'urlQR'=> $urlQR
        ),
        'enviar_correo'
      );
        $this->view->render($this,'datosConfirmados');
      } else {
        $this->view->render($this,'error');
      }
  }

}
?>

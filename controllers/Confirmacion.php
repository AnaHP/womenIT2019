<?php

class Confirmacion extends Controller{
    function __construct() {
        parent::__construct();
    }

    public function clave($clv)
    {
      if($this->model->confirmar($clv)){
        $this->view->render($this,'datosConfirmados');
      } else {
        $this->view->render($this,'error');
      }
    }

}
?>

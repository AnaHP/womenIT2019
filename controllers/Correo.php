<?php
class Correo extends Controller{
  function __construct(){
    parent:: __construct();
  }
  public function index($codigo)
  {
    $correos = [];
    $nombres = [];
    $participantes = $this->model->getParticipantes($codigo);

      $correos[] = [$participantes['Nombre'],$participantes['Apellidos']];
    $this->view->correos = $correos;
    $this->view->render($this, 'enviar_correo');
    // print_r($participantes);
  }
  }
 ?>

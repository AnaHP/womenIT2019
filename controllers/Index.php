<?php

class Index extends Controller{
    function __construct() {
        parent::__construct();
    }

    public function index(){
      $this->view->render($this,'index');
    }

    public function getdata(){
      $inst = $this->getInstituciones();
      $roles = $this->getRoles();
      $fuentes = $this->getFuentes();
      $data = [$inst, $roles, $fuentes];
      echo Json_encode($data);
    }
    private function getInstituciones(){
      $instituciones = $this->model->getInstituciones();
      if(is_array($instituciones)){
        $opcionInsti = '';
        foreach ($instituciones as $registro => $columna) {
          $idInstitucion     = $columna['idInstitucion'];
          $nombreInstitucion = $columna['nombreInstitucion'];
          $opcionInsti   .= "<option value='{$idInstitucion}'>{$nombreInstitucion}</option>";
        }
        return $opcionInsti;
      } else {
        return '<option>No hay Opciones</option>';
      }
    }


    private function getRoles(){
      $roles = $this->model->getRoles();
      if(is_array($roles)){
        $opcionRol = '';
        foreach ($roles as $registro => $columna) {
          $idRol     = $columna['idRol'];
          $nombreRol = $columna['nombreRol'];
          $opcionRol   .= "<option value='{$idRol}'>{$nombreRol}</option>";
        }
        return $opcionRol;
      } else {
        return '<option>No hay Opciones</option>';
      }
    }

    private function getFuentes(){
      $fuentes = $this->model->getFuentes();
      if(is_array($fuentes)){
        $opcionFuente = '';
        foreach ($fuentes as $registro => $columna) {
          $idCanalDif     = $columna['idCanalDif'];
          $nombreCanalDif = $columna['nombreCanalDif'];
          $opcionFuente   .= "<option value='{$idCanalDif}'>{$nombreCanalDif}</option>";
        }
        return $opcionFuente;
      } else {
        return '<option>No hay Opciones</option>';
      }
    }

    /*public function grupo(){
      $fuentes = $this->model->getGrupos();
      if(is_array($grupos))

    }*/

    private function getClaveRegistro(){
        $key = implode(getDate());
        $key.= rand(9863, 99999999);
        $key.= implode(getDate());
        $ran = rand(1,10);
        for ($i=0; $i < $ran; $i++) {
            $key = base64_encode($key);
        }
        return substr($key,3,13);
    }

    public function registro(){
      if (isset($_POST)) {
        if (filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)) {
          $codigo = $this->getClaveRegistro();
          if ($this->model->registro($_POST, $codigo)) {
           echo $this->sendEmail(
             array(
               'correo' => $_POST["correo"],
               'asunto' => 'WomenIT Confirmación de registro',
               'nombre' => $_POST["nombre"]." ".$_POST["apellidos"],
               'codigo' => $codigo
             ),
             'enviar_correo_Conf'
           );
          } else {
            echo $this->model->registro($_POST);
          }
        } else {
          echo 3;
        }
      }
    }

    public function correoConfirmacion(){

      $nombre = "";
      $correo = "";
      $codigo = "";

      if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo $this->sendEmail(
          array(
            'correo' => $correo,
            'asunto' => 'IMPORTANTE WomenIT Confirmación de Registro',
            'nombre' => $nombre,
            'codigo' => $codigo
          ),
          'enviar_correo_Conf'
        );
      } else {
        echo "No se envió el correo :(";
      }

    }

    public function getCodigos(){
      print_r ($this->model->getCodigos());
    }

}
?>

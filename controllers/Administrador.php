<?php
class Administrador extends Controller{
    function __construct() {
        parent::__construct();
    }
    public function index($exp="womenit2018R1!"){
        $user = "womenit2018R1!";
        if ($exp == $user){
          $this->participantes();
        }
        else {
            $this->view->render($this,'errorSitio');
        }
    }

    private function participantes()
    {
      $participantes  = $this->model->participantes();
      $confirmadas = $this->model->confirmadas();
      $estudiantes = $this->model->estudiantes();
      $empresas = $this->model->empresas();
      $profesoras = $this->model->profesoras();
      $otros = $this->model->otros();

      $this->view->participantes = $participantes;
      $this->view->confirmadas = $confirmadas;
      $this->view->estudiantes = $estudiantes;
      $this->view->empresas = $empresas;
      $this->view->profesoras = $profesoras;
      $this->view->otros = $otros;
      $this->view->instituciones = $this->getInstituciones();
      $this->view->render($this,'admin');
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


    public function buscar()
    {
      $array = [];
      $datos = $_POST['datos'];
      $busqueda = $this->model->buscador($datos);
      if(is_array($busqueda)){
        $participantes = '<tr id="primero">
          <td>Nombre</td>
          <td>Código</td>
          <td>Correo</td>
          <td>Institución</td>
          <td></td>
        </tr>';
        foreach ($busqueda as $buscar => $columna) {
          $id = $columna['idRegistro'];
          $nombreA = $columna['Nombre']." ".$columna['Apellidos'];
          $codigo = $columna['codigoConfirmacion'];
          $correo = $columna['correo'];
          $instituciones = $columna['nombreInstitucion'];
          $participantes .= "<tr>
          <td>{$nombreA}</td>
          <td>{$codigo}</td>
          <td>{$correo}</td>
          <td>{$instituciones}</td>"
          if ($columna['estatus']=="noAplicada"){
            $participantes .=
           "<td>
              <button type='button' id='{$id}' onclick='confirmar({$id})' name='button'>Confirmar</button>
            </td>
            </tr>";
          }else{
            $participantes .=
              "<td>
                <button type='button' class='aplicada' name='button' enable>Confirmada</button>
              </td>
              </tr>";
          }
        }
        echo $participantes;
      } else {
        return "<h1>No hay opciones</h1>";
      }

    }
    public function contador(){
      $dato = $_POST['datos'];
      $cantidad = $this->model->cantidad($dato);
      echo $res = "<h1>Cantidad:</h1><h3 id='cantidad'> {$cantidad}</h3>";

    }
    public function confirmar(){
      $id = $_POST['id'];
      $confirmado = $this->model->confirmar($id);
      if ($confirmado == "1"){
        echo "listo";
      }else{
        echo"Ha ocurrido un error";
      }
    }
    public function obtener_datos()
    {
      $asistente = '';
      $contador = 0;
      $data =  $this->model->excel_data();
      if (is_array($data)){
        foreach ($data as $dato => $columna) {
          $contador = $contador+1;
          $asistente .= [$contador,$columna["Nombre"]." ".$columna["Apellidos"],
          $columna["correo"],$columna["fechaNacimiento"], $columna["nombreRol"],
          $columna["nombreInstitucion"], $columna["estatusCodigo"]
        ]
      }
    }

  }
 ?>

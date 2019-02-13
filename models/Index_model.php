<?php
class Index_model extends Model
{


	function __construct(){
		parent::__construct();
	}

	public function getInstituciones()
	{
		return $this->db->selectStrict('*','instituciones');
	}

	public function getRoles()
	{
		return $this->db->selectStrict('*','roles');
	}

	public function getFuentes()
	{
		return $this->db->selectStrict('*','canalesdifusion');
	}

	public function getCodigos(){
		return $this->db->select('codigoAcceso','registroparticipantes');
	}

	//FIXME: #Cambiar los datos
	public function registro($datos, $codigo){
		$insert = array(
			'idRol'							=> $datos['rol'],
			'nombre'						=> $datos['nombre'],
			'apellidos'					=> $datos['apellidos'],
			'fechaNacimiento' 	=> $datos['fechaNacimiento'],
			'correo' 						=> $datos['correo'],
			'idInstitucion'			=> $datos['institucion'],
			'fuenteInformacion'	=> $datos['informacion'],
			'codigoAcceso'=> $codigo,
			'estatusAsistencia'						=> '0',
			'verificacionCorreo'			=> '0'
			#,'online'					=>0,
			#'idGrupo'			=>$datos['idGrupo']
		);

		$correoRegistrado = $this->db->select('*','registroparticipantes',"correo LIKE '{$datos['correo']}'");

		if (is_array($correoRegistrado)) {
			return "4";
		}else{
			return $this->db->insert($insert,'registroparticipantes');
		}
	}


}
?>

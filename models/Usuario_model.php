<?php

class Usuario_model extends Model
{
	function __construct() {
		parent::__construct();
	}

	/**
	*	Función para verificar el estado de los valores para el inicio de sesión.
	*
	* @param String $idUsuario
	* @param String $password
	*
	* @return 0: La cuenta esta bloqueada.
	* 	1: Inicio de sesión exitoso.
	*	2: Inicio de sesión fallido.
	*	3: No se encontró el registro.
	*	4: Es la primera vez que se accesa a la cuenta.
	*/
	public function iniciarSesion($correo,$password){

		$registro = $this->db->select('*', 'usuario_un', "correo='".$correo."'");
		if(is_array($registro)){
			if($registro['passw'] == Hash::create(ALGOR, $password,KEY)){
				$this->crearSesion($correo, $registro['idTipoUsuario']);
				return 1;
			} else {
				return 2;
			}
		} else {
			return 3;
		}
	}

	public function comprobarPass($pass)
	{
		$consulta = $this->db->select('*','usuario_un','correo="'.Session::getValue('correo').'"');
		return (Hash::create(ALGOR,$pass,KEY) === $consulta['passw']) ? 1 : 0 ;
	}

	public function registar($datosRegistro)
	{
		// nombreInstitucion
		$idInstituciones = 0;
		$cosInstitucion = $this->db->select('*', 'instituciones_un', "nombreInstitucion LIKE '%{$datosRegistro['inEdu']}%'");
		if(is_array($cosInstitucion)){
			$idInstituciones = $cosInstitucion['idInstitucion'];
		} else {
			$this->db->insert(array('nombreInstitucion' => mb_strtoupper($datosRegistro['inEdu'], 'UTF-8')), 'instituciones_un');
			$cosInstitucion = $this->db->select('*', 'instituciones_un', "nombreInstitucion LIKE '%{$datosRegistro['inEdu']}%'");
			$idInstituciones = $cosInstitucion['idInstitucion'];
		}	

		$data = array(
			'nombre' => $datosRegistro['nombre'],
			'apellidoPaterno' => $datosRegistro['apellidoP'],
			'apellidoMaterno' => $datosRegistro['apellidoM'],
			'correo' => $datosRegistro['correo'],
			'passw' => Hash::create(ALGOR, $datosRegistro['pass'], KEY),
			'idPais' => $datosRegistro['pais'],
			'statusUsuario' => '3',
			'idInstitucion' => $idInstituciones
		);
		return $this->db->insert($data,'usuario_un');
	}

	public function comprobarUsuario($correo)
	{
		$datos = $this->db->select('*','usuario_un',"correo='{$correo}'");
		return (is_array($datos)) ? json_encode($datos) : 0 ;
	}

	public function updateKey($clv){
		return $this->db->update(array('status'=>'0'),'asignacionpass_un',"clv='{$clv}'");
	}

	public function setKey($correo,$key){
		$us   = $this->db->select('idUsuario','usuario_un', "correo='{$correo}'");
		$data = array(
			'idUsuario'=>$us['idUsuario'],
			'clv'=>$key,
		);
		return $this->db->insert($data,'asignacionpass_un');
	}

	public function deleteKey($key){
		return $this->db->delete('asignacionpass_un',"clv='{$key}'");
	}

	public function getKey($clv){
		return $this->db->select('*','asignacionpass_un',"clv='{$clv}'");
	}

	public function getKeysActive($correo){
		return $this->db->selectStrict('asig.*','asignacionpass_un asig, usuario_un u',"u.correo = '{$correo}' AND asig.status = 1 AND asig.idUsuario = u.idUsuario");
	}

	public function getNumOfResets($correo){
		$count = $this->db->select('COUNT(u.idUsuario) AS num','asignacionpass_un asig, usuario_un u',"u.correo = '{$correo}' AND u.idUsuario = asig.idUsuario AND asig.status = 1");
		return $count['num'];
	}
	public function updatePass($clv,$pass){
		$password = (Hash::create(ALGOR,$pass,KEY));
		return $this->db->query("UPDATE usuario_un SET passw = '{$password}' WHERE idUsuario IN(SELECT idUsuario FROM(SELECT u.* FROM asignacionpass_un asig, usuario_un u WHERE asig.clv = '{$clv}' AND u.idUsuario = asig.idUsuario) AS us)");
	}
	/***********END KEYS SYSTEM******************/

	public function getCuenta($cuenta){
		return $this->db->select('*','usuario_un',"correo='{$cuenta}' OR idUsuario='{$cuenta}'");
	}

	public function getCategorias()
	{
		return $this->db->selectStrict('*','categorias_un');
	}

	public function actualizarInfoPerfil(Array $datos)
	{
		$idUsuario = Session::getValue('idUsuario');

		$apellidoP = ($datos['apellidoP'] != '') ? $datos['apellidoP'] : Session::getValue('apellidoPaterno');
		$apellidoM = ($datos['apellidoM'] != '')          ? $datos['apellidoM'] : Session::getValue('apellidoMaterno');
		$correo    = (validateEmail($datos['correo']))    ? $datos['correo']    : Session::getValue('correo');
		$pais      = ($datos['pais'] != '')      ? $datos['pais']      : Session::getValue('idPaisUser');
		$nombre    = ($datos['nombre'] != '')    ? $datos['nombre']    : Session::getValue('nombre');

		if($datos['pass'] != 'nodis'){
			$pass = Hash::create(ALGOR, $datos['pass'], KEY);
			$this->db->update(array("passw" => $pass), 'usuario_un', "idUsuario={$idUsuario}");
		}

		return $this->db->update(
			array(
				"nombre" 		  => $nombre,
				"apellidoPaterno" => $apellidoP,
				"apellidoMaterno" => $apellidoM,
				"idPais"          => $pais,
				"correo"		  => $correo
			),
			'usuario_un',
			"idUsuario={$idUsuario}"
		);
	}

	public function actualizarImg($valor)
	{
		$data['imagenUsuario'] = $valor;
		return $this->db->update($data,'usuario_un','idUsuario="'.Session::getValue('idUsuario').'"');
	}

	public function getArticulosUsuario($filtro, $valor)
	{
		return $this->db->selectStrict('idUsuario, idArticulo, titulo, fecha, descripcion, nombreCategoria, colorDistintivo','articulos_un NATURAL JOIN categorias_un NATURAL JOIN status_un NATURAL JOIN usuario_un',"idUsuario=".Session::getValue('idUsuario')." AND {$filtro} LIKE '%{$valor}%'");
	}

	public function getArticulosEvaluar($filtro, $valor){
		$idUsuario = Session::getValue('idUsuario');
		return $this->db->selectStrict('hist.idArticulo, art.idUsuario, hist.idUsuarioEval, art.titulo, cat.nombreCategoria, sta.descripcion, art.fecha',"historialevaluacion_un hist, articulos_un art, categorias_un cat, status_un sta","hist.idUsuarioEval = {$idUsuario} AND hist.idStatus = 7 AND hist.comentario IS NULL AND hist.idArticulo = art.idArticulo AND art.idCategoria = cat.idCategoria AND art.idStatus = sta.idStatus AND {$filtro} LIKE '%{$valor}%'");
	}

	/**
	 * Editada el 22/02/2018
	 * Obtiene la búsqueda de evaluadores con los colores de sus áreas de investigación
	*/
	public function getEvaluadores($filtro, $valor){
		$idUsuario = Session::getValue('idUsuario');
		if ($filtro == "apellidos") {
			$where = "AND (us.apellidoPaterno LIKE '%{$valor}%' OR us.apellidoMaterno LIKE '%{$valor}%')";
		} else {
			$where = "AND {$filtro} LIKE '%{$valor}%'";
		}
		return $this->db->queryStrict("SELECT catEval.idUsuario, us.nombre, us.apellidoPaterno, us.apellidoMaterno, cat.nombreCategoria, cat.colorDistintivo, catEval.prioridad, cat.idCategoria FROM categoriaevaluador_un catEval, usuario_un us, categorias_un cat WHERE catEval.idUsuario IN (SELECT DISTINCT(cat.idUsuario) FROM categoriaevaluador_un cat WHERE cat.idCategoria IN (SELECT categoria.idCategoria FROM categoriaevaluador_un categoria WHERE categoria.idUsuario = {$idUsuario})) AND catEval.idUsuario = us.idUsuario AND catEval.idCategoria = cat.idCategoria AND us.idTipoUsuario IN (2) {$where} ORDER BY us.idUsuario, cat.idCategoria;");
	}

	/**
	 * Editada el 22/02/2018
	 * Obtiene la búsqueda de editores con los colores de sus áreas de investigación
	*/
	public function getEditores($filtro, $valor){
		if ($filtro == "apellidos") {
			$where = "AND (us.apellidoPaterno LIKE '%{$valor}%' OR us.apellidoMaterno LIKE '%{$valor}%')";
		} else {
			$where = "AND {$filtro} LIKE '%{$valor}%'";
		}
		return $this->db->selectStrict('catEval.idCategoria, catEval.idUsuario, us.nombre, us.apellidoPaterno, us.apellidoMaterno, cat.nombreCategoria, cat.colorDistintivo, catEval.prioridad', 'usuario_un us, categoriaevaluador_un catEval, categorias_un cat',"us.idTipoUsuario IN(1) AND catEval.idUsuario = us.idUsuario AND catEval.idCategoria = cat.idCategoria {$where}","us.idUsuario, cat.nombreCategoria");
	}

	public function getDatosUsuario($idUsuario)
	{
		return $this->db->select('*', 'usuario_un us, pais_un pais, instituciones_un insti',"us.idPais = pais.idPais AND us.idInstitucion = insti.idInstitucion AND idUsuario={$idUsuario}");
	}

	public function getAccesosMenu($idUsuario)
	{
		return $this->db->queryStrict("CALL getAccesosMenu({$idUsuario})");
	}

	/**
	 * [crearSesion description]
	 * @param  [type] $correo     [description]
	 * @param  [type] $tipoCuenta [description]
	 * @return [type]             [description]
	 */
	private function crearSesion($correo, $tipoCuenta){
		$datos = $this->db->query("SELECT idTipoUsuario,tipoUsuario,descripcion FROM usuario_un NATURAL JOIN tiposusuarios_un WHERE correo='{$correo}'");
		$datosUser = $this->db->select('*','usuario_un',"correo='{$correo}'");
		$idUsuario = $datosUser['idUsuario'];
		$accesos = $this->db->queryStrict("CALL getAccesosTipoUsuario({$idUsuario})");
		$accesosMenu = $this->getAccesosMenu($idUsuario);

		Session::setValue('accesosTipoUsuario',$accesos);
		Session::setValue('accesosMenu',$accesosMenu);
		Session::setValue('idUsuario',$idUsuario);
		Session::setValue('correo',$correo);
		Session::setValue('nombreCompleto',$datosUser['nombre'].' '.$datosUser['apellidoPaterno'].' '.$datosUser['apellidoMaterno']);
		Session::setValue('nombre',$datosUser['nombre']);
		Session::setValue('apellidoPaterno',$datosUser['apellidoPaterno']);
		Session::setValue('apellidoMaterno',$datosUser['apellidoMaterno']);
		Session::setValue('idPaisUser',$datosUser['idPais']);
		Session::setValue('imagenPerfil',$datosUser['imagenUsuario']);

		Session::setValue('idTipoUsuario', $datos['idTipoUsuario']);
		Session::setValue('tipoUsuario', $datos['tipoUsuario']);
		Session::setValue('accesoVistas', $datos['descripcion']);
		Session::setValue('accesos', explode(':', $datos['descripcion']));
	}

	/*private function getArticulosXCategoriaUsuario($idCat){
		return $this->db->queryStrict('SELECT DISCTINCT idArticulo, titulo, idStatus, fecha FROM articulos_un WHERE idCategoria='.$idCat);


	}*/


}
?>
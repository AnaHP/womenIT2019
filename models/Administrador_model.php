<?php
class Administrador_model extends Model{
    function __construct(){
      parent::__construct();
    }

    public function getInstituciones()
    {
      return $this->db->selectStrict('*','instituciones');
    }
    public function excel_data()
    {
      return $this->db->queryStrict("SELECT * FROM registroparticipantes res NATURAL JOIN instituciones inst, roles rol, canalesdifusion");
    }
    public function participantes()
    {
     $number = $this->db->select("count(*) as contador","registroparticipantes");
     return $number['contador'];
    }
    public function confirmadas()
    {
      $number = $this->db->select("count(*) as contador","registroparticipantes","estatus = 'noAplicada'");
      return $number['contador'];
    }

    public function estudiantes()
    {
      $number = $this->db->select("count(*) as contador","registroparticipantes");
      $students = $this->db->select("count(*) as contador","registroparticipantes","idRol = '1'");
      $pStudents = round(($students['contador'] * 100)/$number['contador'], 2);
      return $pStudents;
    }
    public function empresas()
    {
      $number = $this->db->select("count(*) as contador","registroparticipantes");
      $business = $this->db->query("SELECT count(*) as contador FROM womenit.registroparticipantes where idRol = '3' OR idRol = '4' OR idRol = '7' OR idRol = '8' OR idRol = '9' OR idRol = '10' OR idRol = '11' OR idRol = '12' OR idRol = '13' OR idRol = '14' ;");
      $pBusiness = round(($business['contador'] * 100)/$number['contador'],2);
      return $pBusiness;
    }
    public function profesoras()
    {
      $number = $this->db->select("count(*) as contador","registroparticipantes");
      $teach = $this->db->select("count(*) as contador", "registroparticipantes","idRol = '2'");
      $pTeach = round(($teach['contador'] * 100)/$number['contador'],2);
      return $pTeach;
    }
    public function otros()
    {
      $number = $this->db->select("count(*) as contador","registroparticipantes");
      $other = $this->db->select("count(*) as contador", "registroparticipantes","idRol = '6' OR idRol = '15'");
      $pOther = round(($other['contador'] * 100)/$number['contador'],2);
      return $pOther;
    }

    public function confirmar($datos)
    {
      return $this->db->Update(array('estatus' => 'Aplicada'),"registroParticipantes", "idRegistro='{$datos}'");

    }

    public function buscador($busqueda)
    {
      return $this->db->queryStrict("SELECT * FROM registroparticipantes res NATURAL JOIN instituciones inst WHERE res.estatusCodigo LIKE 'Confirmado' AND (res.codigoConfirmacion LIKE '{$busqueda}%' OR res.nombre LIKE '%{$busqueda}%'
      OR res.apellidos LIKE '%{$busqueda}%') ORDER BY res.nombre LIMIT 10;");
    }

    public function cantidad($institución)
    {
      $cantidad = $this->db->query("SELECT COUNT(p.idInstitucion)AS Cantidad
      FROM registroparticipantes p
      WHERE p.idInstitucion = {$institución};");
      return $cantidad["Cantidad"];
    }
}
?>

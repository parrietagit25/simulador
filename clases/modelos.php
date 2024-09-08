<?php
require_once("Conexion.php");

class ModelGlobal extends Conexion {
  private $conn;

  public function __construct() {
    $this->conn = $this->conectar();
  }

  public function obtenerTodos($tabla) {

    /* echo '<pre>';
    echo var_dump($this->conn);
    echo '</pre>';

    echo "SELECT * FROM $tabla"; */

    $result = $this->conn->query("SELECT * FROM $tabla"); 
    //$result = $this->conn->query("SELECT * FROM VwFlotaAutosAF");
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  
  }

  public function datosUnidadId($tabla, $id){
    $result = $this->conn->query("SELECT * FROM $tabla WHERE Unidad='".$id."'");
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }

  public function agregar($tabla, $datos) {
    
    $columnas = implode(", ", array_keys($datos));
    $params = "'" . implode("', '", array_values($datos)) . "'";
    $sql = "INSERT INTO $tabla ($columnas) VALUES ($params)";
    $insert = $this->conn->query($sql);

    //$stmt = $this->conn->query(" SELECT TOP 1 id FROM $tabla ORDER BY id DESC");
    $stmt = $this->conn->query(" SELECT max(id) as id FROM $tabla");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $key => $value) {
      $ultimoIdInsertado = $value['id'];
    }
    return $ultimoIdInsertado;
  }

  public function sub_agregar($tabla, $datos) {
    $columnas = implode(", ", array_keys($datos));
    $params = "'" . implode("', '", array_values($datos)) . "'";
    $sql = "INSERT INTO $tabla ($columnas) VALUES ($params)";
    $insert = $this->conn->query($sql);

  }

  public function actualizar($tabla, $where, $datos) {
    /* para sql server */
    $set = "";
    foreach ($datos as $columna => $valor) {
        $set .= "$columna = '$valor', ";
    }
    $set = rtrim($set, ", ");
    $sql = "UPDATE $tabla SET $set WHERE $where";
    $insert = $this->conn->query($sql);
  }

  function get_param_type($value) {
    if (is_integer($value)) {
        return "i";
    } elseif (is_double($value)) {
        return "d";
    } elseif (is_string($value)) {
        return "s";
    } else {
        return "b";
    }
  }

  public function actualizar_mysql($tabla, $id, $datos) {
    /* para mysql */
    $set_values = "";
    $param_types = "";
    foreach ($datos as $column => $value) {
        $set_values .= "$column = ?, ";
        $param_types .= $this->get_param_type($value);
    }
    $set_values = rtrim($set_values, ", ");
    $sql = "UPDATE $tabla SET $set_values WHERE id = ?";
    $stmt = $this->conn->prepare($sql);
    
    $param_values = array_values($datos);
    $param_values[] = $id;
    $param_types .= "i"; // Assuming id is an integer

    $stmt->bind_param($param_types, ...$param_values);

    $resultado = $stmt->execute();
    return $resultado;

  }

  public function obtenerRegistrosPorId($tabla, $where){

    $result = $this->conn->query("SELECT * FROM $tabla WHERE $where");
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }

  public function eliminarRegistrosPorId($tabla, $where){

    $result = $this->conn->query("delete FROM $tabla WHERE $where");
    return $result;
  }

  public function obtenerPaisId($tabla, $id_pais){

    $result = $this->conn->query("SELECT * FROM $tabla WHERE codigo = '$id_pais'");
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }

}

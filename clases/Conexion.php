<?php
class Conexion {

    private $conn;

    public function conectar() {
        $this->conn = null;

        $serverName = "10.10.2.25";
        $dbName = "PCR";
        
        try {
            // Usar PDO con ODBC para la conexión
            $this->conn = new PDO("odbc:Driver={ODBC Driver 17 for SQL Server};Server=$serverName;Database=$dbName;Trusted_Connection=yes;");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Error en la conexión: " . $e->getMessage();
        }

        return $this->conn;
    }

    public function ejecutarConsulta($query) {
        if ($this->conn) {
            try {
                $stmt = $this->conn->query($query);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Error en la consulta: " . $e->getMessage();
                return false;
            }
        } else {
            echo "No hay conexión establecida.";
            return false;
        }
    }

    public function desconectar() {
        // Cerrar la conexión
        $this->conn = null;
    }

}
<?php

class mod_db
{
	private $conexion; // Conexión a la base de datos
	private $perpage = 5; // Cantidad de registros por página
	private $total;
	private $pagecut_query;
	private $debug = false; // Cambiado a false para mantener la configuración original

	public function __construct()
	{
		
		##### Setting SQL Vars #####
		$sql_host = "localhost";
		$sql_name = "media";
		$sql_user = "root";	
		$sql_pass = "";
		$charset = 'utf8mb4';

		$dsn = "mysql:host=$sql_host;dbname=$sql_name;charset=utf8mb4";
		try {
			$this->conexion = new PDO($dsn, $sql_user, $sql_pass);
			$this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			if ($this->debug) {
				echo "Conexión exitosa a la base de datos<br>";
			}
		} catch (PDOException $e) {
			echo "Error de conexión: " . $e->getMessage();
			exit;
		}
	}

	public function getConexion (){

		return $this->conexion;
	}

	public function disconnect()
	{
		$this->conexion = null; // Cierra la conexión a la base de datos
	}

	public function insert($tb_name, $cols, $val)//no es seguro 
	{
    	$cols = $cols ? "($cols)" : "";
   		$sql = "INSERT INTO $tb_name $cols VALUES ($val)";
    
    	try {
      	  $this->conexion->exec($sql);
  	  	} catch (PDOException $e) {
        echo "Error al insertar: " . $e->getMessage();
    	}
	}

	public function insertSeguro($tb_name, $data)
	{
		$columns = implode(", ", array_keys($data));
		$placeholders = ":" . implode(", :", array_keys($data));

		$sql = "INSERT INTO $tb_name ($columns) VALUES ($placeholders)";

		try {
			$stmt = $this->conexion->prepare($sql);

			// Asignar valores con bind
			foreach ($data as $key => $value) {
				$stmt->bindValue(":$key", $value);
			}

			$stmt->execute();
			return true;
		} catch (PDOException $e) {
			echo "Error en INSERT: " . $e->getMessage();
			return false;
		}
	}

	public function update($tb_name, $string, $astriction)
	{

		//UPDATE Work_Tickets SET Billed = true
		//WHERE UnitCost <> 0.00

		$sql = "UPDATE $tb_name SET $string where $astriction";
		//$this->executeQuery($sql, $astriction);
		  try {
       	 	$this->conexion->exec($sql);
   		 } catch (PDOException $e) {
        	echo "Error al Modificar: " . $e->getMessage();
    	 }

	}

	public function updateSeguro($tabla, $data, $condiciones)
{
    // Construir partes de SET dinámicamente
    $set = [];
    foreach ($data as $key => $value) {
        $set[] = "$key = :$key";
    }
    $setSQL = implode(", ", $set);
    // Construir partes de WHERE dinámicamente
    $where = [];
    foreach ($condiciones as $key => $value) {
        $where[] = "$key = :cond_$key";
    }
    $whereSQL = implode(" AND ", $where);
    $sql = "UPDATE $tabla SET $setSQL WHERE $whereSQL";

    try {
        $stmt = $this->conexion->prepare($sql);

        // Bind de los datos a actualizar
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }

        // Bind de las condiciones (prefijadas con "cond_")
        foreach ($condiciones as $key => $value) {
            $stmt->bindValue(":cond_$key", $value);
        }

        return $stmt->execute();
    } catch (PDOException $e) {
        echo "Error en UPDATE: " . $e->getMessage();
        return false;
    }
}//fin del update

	

	public function log($Usuario){

	 // Preparar la consulta

		 	try {

				 $sql = "SELECT * FROM usuarios WHERE Usuario = :User";
				 $stmt = $this->conexion->prepare($sql);
				 $stmt->bindParam(':User', $Usuario, PDO::PARAM_STR);

				 // Ejecutar la consulta
				 $stmt->execute();

				// Retornar el objeto directamente
	            return $stmt->fetchObject();
		
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
	            return null;
			}//fin de try

	} //log(usuario)



}

<?php
class vendedores
{
	//Atributo para conexión a SGBD
	private $pdo;

		//Atributos del objeto vendedores
    public $id_Medidor;
    public $Dueno;
    public $Energia;
    public $Iva;
	public $Fac_Periodo;
	public $DAP;
	public $Adeudo;
	public $Total;

	//Método de conexión a SGBD.
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Este método selecciona todas las tuplas de la tabla
	//vendedores en caso de error se muestra por pantalla.
	public function Listar()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT * FROM vendedores");
			//Ejecución de la sentencia SQL.
			$stm->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}

	//Este método obtiene los datos del vendedores a partir del id_Medidor
	//utilizando SQL.
	public function Obtener($id_Medidor)
	{
		try
		{
			//Sentencia SQL para selección de datos utilizando
			//la clausula Where para especificar el id_Medidor del vendedores.
			$stm = $this->pdo->prepare("SELECT * FROM vendedores WHERE id_Medidor = ?");
			//Ejecución de la sentencia SQL utilizando el parámetro id_Medidor.
			$stm->execute(array($id_Medidor));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Este método elimina la tupla vendedores dado un id_Medidor.
	public function Eliminar($id_Medidor)
	{
		try
		{
			//Sentencia SQL para eliminar una tupla utilizando
			//la clausula Where.
			$stm = $this->pdo
			            ->prepare("DELETE FROM vendedores WHERE id_Medidor = ?");

			$stm->execute(array($id_Medidor));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que actualiza una tupla a partir de la clausula
	//Where y el id_Medidor del vendedores.
	public function Actualizar($data)
	{
		try
		{
			//Sentencia SQL para actualizar los datos.
			$sql = "UPDATE vendedores SET Dueno = ?, Energia = ?, Iva = ?, Fac_Periodo = ?, DAP = ?, Adeudo = ?, Total = ? WHERE id_Medidor = ?";
			//Ejecución de la sentencia a partir de un arreglo.
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Dueno,
                        $data->Energia,
                        $data->Iva,
						$data->Fac_Periodo,
						$data->DAP,
						$data->Adeudo,
						$data->Total,
                        $data->id_Medidor
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que registra un nuevo vendedores a la tabla.
	public function Registrar(vendedores $data)
	{
		try
		{
			//Sentencia SQL.
			$sql = "INSERT INTO vendedores (id_Medidor, Dueno, Energia, Iva, Fac_Periodo, DAP, Adeudo, Total)
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
						$data->id_Medidor,
                    	$data->Dueno,
                        $data->Energia,
                        $data->Iva,
						$data->Fac_Periodo,
						$data->DAP,
						$data->Adeudo,
						$data->Total
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}

<?php
class Productos

{
	private $pdo;

    public $id_Medidor;
    public $CodigoPostal;
    public $Colonia;
    public $Calle;
    public $N_Ext;
	public $N_Int;
	public $Nombre;
	public $Telefono;
	public $id_Vendedor;

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

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM Productos");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_Medidor)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM Productos WHERE id_Medidor = ?");
			$stm->execute(array($id_Medidor));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_Medidor)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM Productos WHERE id_Medidor = ?");

			$stm->execute(array($id_Medidor));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE Productos SET CodigoPostal = ?, Colonia = ?, Calle = ?, Calle = ?, N_Int = ?, Nombre = ?, Telefono = ?, id_Vendedor = ? WHERE id_Medidor = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->CodigoPostal,
                        $data->Colonia,
                        $data->Calle,
						$data->Calle,
						$data->N_Int,
						$data->Nombre,
						$data->Telefono,
						$data->id_Vendedor,
                        $data->id_Medidor
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Productos $data)
	{
		try
		{
		$sql = "INSERT INTO Productos (id_Medidor, CodigoPostal, Colonia, Calle, N_Ext, N_Int, Nombre, Telefono, id_Vendedor) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
						$data->id_Medidor,
                    	$data->CodigoPostal,
                        $data->Colonia,
                        $data->Calle,
						$data->N_Ext,
						$data->N_Int,
						$data->Nombre,
						$data->Telefono,
						$data->id_Vendedor
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}

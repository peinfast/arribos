<?php
class Transporte
{
		private $pdo;

		public $id;
		public $Folio;
		public $Area;
    public $Cliente;
    public $Marca;
		public $Cantidad;
    public $Destino;
    public $Servicio;
		public $CantidadUnidades;
		public $FH_Carga;
    public $Estatus;
    public $FH_Cedic;
    public $Usuario1;
		public $Observaciones;
    public $Cortina;
    public $FH_Arribo;
    public $Usuario2;
		public $Estatus2;
		public $Observaciones2;
    public $FH_Inicio_CarDesc;
    public $Usuario3;
		public $Estatus3;
		public $Transporte;
		public $Operador;
		public $Observaciones3;
    public $FH_Conclu_CarDesc;
    public $Usuario4;
		public $Estatus4;
		public $Observaciones4;
    public $FH_Salida_Caseta;
    public $Usuario5;
		public $Estatus5;
		public $Observaciones5;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();
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
			//SELECT * FROM courses WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) > start_time
			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE FH_Carga > now() order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function azul()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE Estatus5!='Liberado de Cedic' and FH_Carga!='0000-00-00 00:00:00' and Estatus2='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function azulL1b()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE Area='L1bre' and Estatus5 != 'Liberado de Cedic' and Estatus2='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function azulLI()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE Area='Logistica Inversa' and Estatus5 != 'Liberado de Cedic' and Estatus2='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function azulMov()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE Area='Movilidad' and Estatus5 != 'Liberado de Cedic' and Estatus2='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function azulPro()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE Area='Proyectos' and Estatus5 != 'Liberado de Cedic' and Estatus2='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function azulRec()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE Area='Recibo' and Estatus5 != 'Liberado de Cedic' and Estatus2='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function azulRet()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE Area='Retail' and Estatus5 != 'Liberado de Cedic' and Estatus2='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function rojo()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE FH_Carga < now() and Estatus5!='Liberado de Cedic' and FH_Carga!='0000-00-00 00:00:00' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function verde()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) < FH_Carga and Estatus5 != 'Liberado de Cedic' and FH_Carga!='0000-00-00 00:00:00' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function amarillo()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) > FH_Carga AND now() < FH_Carga and Estatus5 != 'Liberado de Cedic' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function rojoL1b()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE FH_Carga < now() and Area='L1bre' and Estatus5 != 'Liberado de Cedic' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function verdeL1b()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) < FH_Carga and Area='L1bre' and Estatus5 != 'Liberado de Cedic' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function amarilloL1b()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) > FH_Carga AND now() < FH_Carga and Area='L1bre' and Estatus5 != 'Liberado de Cedic' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function rojoLI()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE FH_Carga < now() and Area='Logistica Inversa' and Estatus5 != 'Liberado de Cedic' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function verdeLI()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) < FH_Carga and Area='Logistica Inversa' and Estatus5 != 'Liberado de Cedic' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function amarilloLI()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) > FH_Carga AND now() < FH_Carga and Area='Logistica Inversa' and Estatus5 != 'Liberado de Cedic' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function rojoMov()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE FH_Carga < now() and Area='Movilidad' and Estatus5 != 'Liberado de Cedic' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function verdeMov()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) < FH_Carga and Area='Movilidad' and Estatus5 != 'Liberado de Cedic' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function amarilloMov()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) > FH_Carga AND now() < FH_Carga and Area='Movilidad' and Estatus5 != 'Liberado de Cedic' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function rojoPro()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE FH_Carga < now() and Area='Proyectos' and Estatus5 != 'Liberado de Cedic' and Estatus2!='En patio' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function verdePro()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) < FH_Carga and Area='Proyectos' and Estatus5 != 'Liberado de Cedic' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function amarilloPro()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) > FH_Carga AND now() < FH_Carga and Area='Proyectos' and Estatus5 != 'Liberado de Cedic' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function rojoRec()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE FH_Carga < now() and Area='Recibo' and Estatus5 != 'Liberado de Cedic' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function verdeRec()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) < FH_Carga and Area='Recibo' and Estatus5 != 'Liberado de Cedic' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function amarilloRec()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) > FH_Carga AND now() < FH_Carga and Area='Recibo' and Estatus5 != 'Liberado de Cedic' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function rojoRet()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE FH_Carga < now() and Area='Retail' and Estatus5 != 'Liberado de Cedic' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function verdeRet()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) < FH_Carga and Area='Retail' and Estatus5 != 'Liberado de Cedic' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function amarilloRet()
	{
		try
		{
			$result = array();

$stm = $this->pdo->prepare("SELECT * FROM folios WHERE DATE_ADD(NOW(), INTERVAL 2 HOUR) > FH_Carga AND now() < FH_Carga and Area='Retail' and Estatus5 != 'Liberado de Cedic' and Estatus2!='En patio' order by FH_Carga ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Obtener($id)
	{

		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM folios WHERE id = ?");


			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Avanzada($id)
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM folios");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Actualizame($data)
	{

		try
		{

			$sql = "UPDATE folios  SET Folio = ?, Area = ?, Cliente = ?, Marca = ?, CantidadUnidades = ?, Destino = ?, Servicio = ?, FH_Carga = ?, Estatus = ?, FH_Cedic = ?, Usuario1 = ?, Observaciones = ? WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(

							$data->Folio,
							$data->Area,
				      $data->Cliente,
				      $data->Marca,
						  $data->CantidadUnidades,
				      $data->Destino,
				      $data->Servicio,
						  $data->FH_Carga,
							$data->Estatus,
							$data->FH_Cedic,
							$data->Usuario1,
						  $data->Observaciones,
							$data->id



					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Actualizar($data)
	{

		try
		{

			//$date = date('Y-m-d H:i:s');
			$sql = "UPDATE folios  SET Estatus2 = ?, FH_Arribo = now(), Usuario2 = ?, Observaciones2 = ? WHERE Folio = ? and Estatus='Por arribar' and Estatus2!='En patio'";
			$mail = "Observaciones: ".$data->Observaciones2;
			//Titulo
			$titulo = "Cambio de Estatus del Folio: ".$data->Folio." a En patio";
			//cabecera
			$headers = "Control de Arribos-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			//dirección del remitente
			$headers .= "From: Control de Arribos < peinfast@gmail.com >\r\n";
			//Enviamos el mensaje a tu_dirección_email
			$bool = mail("Cristian.Barrera@ingrammicro.com",$titulo,$mail,$headers);
			echo'<script type="text/javascript">
      alert("Error);
      </script>';
			$this->pdo->prepare($sql)
			     ->execute(
				    array(

							$data->Estatus2,
							$data->Usuario2,
							$data->Observaciones2,
							$data->Folio
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
//Proceso...
	public function Actualizar2($data)
	{

		try
		{
			$sql = "UPDATE folios  SET Estatus3 = ?, Transporte = ?, Operador = ?, Cortina = ?, FH_Inicio_CarDesc = now(), Usuario3 = ?, Observaciones3 = ? WHERE Folio = ? and Estatus2='En patio' and Estatus3!='En proceso de Carga y Descarga'";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(

							$data->Estatus3,
							$data->Transporte,
							$data->Operador,
							$data->Cortina,
							$data->Usuario3,
							$data->Observaciones3,
							$data->Folio


					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar3($data)
	{
		try
		{
			$sql = "UPDATE folios  SET Estatus4 = ?, FH_Conclu_CarDesc = now(), Usuario4 = ?, Observaciones4 = ? WHERE Folio = ? and Estatus3='En proceso de Carga y Descarga' and Estatus4!='Carga/Descarga Concluida'";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(

							$data->Estatus4,
							$data->Usuario4,
							$data->Observaciones4,
							$data->Folio


					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar4($data)
	{
		try
		{
			$sql = "UPDATE folios  SET Estatus5 = ?, FH_Salida_Caseta = now(), Usuario5 = ?, Observaciones5 = ? WHERE Folio = ? and Estatus4='Carga/Descarga Concluida' and Estatus5!='Liberado de Cedic'";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
							$data->Estatus5,
							//$data->FH_Arribo,
							$data->Usuario5,
							$data->Observaciones5,
							$data->Folio
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Eliminar($id)
		{
			try
			{
				$stm = $this->pdo
				            ->prepare("DELETE FROM folios WHERE id = ?");

				$stm->execute(array($id));
			} catch (Exception $e)
			{
				die($e->getMessage());
			}
		}

	public function Registrar(Transporte $data)
	{

		try
		{
		$sql = "INSERT INTO folios (Folio, Area, Cliente, Marca, CantidadUnidades, Destino, Servicio, FH_Carga, Estatus, FH_Cedic, Usuario1, Observaciones) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, now(), ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(

			$data->Folio,
        	$data->Area,
        	$data->Cliente,
            $data->Marca,
						$data->CantidadUnidades,
            $data->Destino,
            $data->Servicio,
		    $data->FH_Carga,
		    $data->Estatus,
		    $data->Usuario1,
		    $data->Observaciones

                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
?>

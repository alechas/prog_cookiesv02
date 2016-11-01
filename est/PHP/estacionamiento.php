<?php
/**
* 
*/
class Estacionamiento{

	public static function Guardar($patente)
	{
		$archivo = fopen("estacionados.txt", "a");
		$ahora =date("Y-m-d H:i:s");
		$renglon =$patente."=>".$ahora."\n";
		fwrite($archivo, $renglon);
		fclose($archivo);
	}

	public static function Leer()
	{
		$listadoDeAutos = array();
		//$listadoDeAutosLeida["primer elemento"]; //Agrega elemento al array
		$archivo = fopen("estacionados.txt", "r");

		while (!FeoF($archivo)) 
		{
			$renglon = fgets($archivo); //lectura linea a linea
			//$listadoDeAutos[] = $renglon;
			$auto = explode("=>", $renglon);
			$listadoDeAutos[] = $auto;
		}

		fclose($archivo);
		return $listadoDeAutos;
	}


		public static function Sacar($patenteASacar)
		{

			$miListadoPatente = Estacionamiento::Leer();

			Estacionamiento::Limpiar();

			foreach ($miListadoPatente as $auto) 
			{

				# code...
				if ($patenteASacar != $auto[0]) 
				{		
				    Estacionamiento::Guardar($auto[0]);
				}
			}

		}

	public static function Limpiar()
	{
		$archivo = fopen("estacionados.txt", "w");
		//$ahora =date("Y-m-d H:i:s");
		//$renglon =$patente."=>".$ahora."\n";
		fwrite($archivo, " ");
		fclose($archivo);
	}

}

?>
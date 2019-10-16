<?php
session_start();   
?>

<?php
if(isset($_SESSION['nombre']))//vendria a ser un ISSET
{
	echo "Bienvenido ".$_SESSION['nombre'];
}
else
{
	echo "No estás logueado";
}





/*var_dump($_GET);
var_dump($_SESSION);
//$_SESSION['nombre']=$_GET['Nombre'];
echo "<br>";
var_dump($_SESSION);
*/

/*$checkUsuario = $_GET['Nombre'];
$checkPassword = $_GET['Apellido'];
	

$Bandera=1;


$archivo = fopen("listadoregistro.txt", "r");
while(!feof($archivo)) 
	{
		$objeto = json_decode(fgets($archivo));

		if ($objeto->Apellido == $checkPassword) 
		{
			if($objeto->Nombre == $checkUsuario)				 	
			{
				$Bandera=0;
				
			
			}

		}
				 	
		
	}	

if($Bandera==0)
	{	
		session_start();
		$_SESSION['Nombre']=$checkUsuario;
		header("Location: OK.php?login=exito");
		exit();
	}
	else 
	{

		header("Location: NO.php");
		exit();
				 	
	}
fclose($archivo);
		
*/
		
?>
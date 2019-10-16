<?php
session_start();   
?>

<?php
if(isset($_SESSION['nombre']))//vendria a ser un ISSET
{

?>

<h1>Bienvenido</h1>

<?php

}
else
{
	echo "No estás logueado";
}

?>
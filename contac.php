<?php
	

	
	$usuario=$_POST['usuario'];
	$password=$_POST['password'];

	$query="SELECT * FROM `usuario` WHERE user='$usuario' AND password='$password'";
	$user=$con->query($query);
	$con->close();
	

	if($user->num_rows==1)
	{
	    ("location:contactos");
	}
	else 
	{
		("location:index.html");

    }

   public function __construct()
       {

	        parent::__construct('localhost','root','','contactos');
            $this->query("SET NAMES 'utf8'");
            $this->connect_errno ? die('Error en conexion con la base de datos.') : $error="<br><br> Conectado a la base de datos: ";
            //echo $error;
            unset($error);
       }
?>

<?php
   //conectamos con el servidor
   $conectar=@mysql_connect('localhost','root','');
   //verificamos la conexion
   if(!$conectar){
   	  echo"no se pudo conectar con el servidor";
   }else{
   	   $base=mysql_select_db('usuarios');
   	   if(!$base){
   	   	   echo"no se encontro la base de datos";
   	   }
   }
   //recuperar las variables
   $nombre=$_POST['nombre'];
   $correo=$_POST['correo'];
   $mensaje=$_POST['mensaje'];
   //hacemos la sentencia de sql
   $sql="INSERT INTO usuarios VALUES('$nombre','$correo','$mensaje')";
   //ejecutamos la sentencia de sql
   $ejecutar=mysql_query($sql);
   //verificamos la ejecución
   if(!$ejecutar){
   	  echo"hubo algun error";
   }else{
   	  echo"datos guardados correctamente<br><a href='index.html'>Volver</a>";
   }
?>
 
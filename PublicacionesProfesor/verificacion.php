<?php

$verif=$_POST['opcion']; // Guardamos dentro de la variable "verif" la opción a ejecutar enviada por el usuario.

if($verif=="upload")
{
   include("subir_publicacion.html"); // Redireccionamos al archivo "upload.php".
}
else if($verif=="edit")
{
   $editar=rename("C:/wamp64/www/funcionando_login/PublicacionesProfesor/publicaciones/programacion_poo.txt","C:/wamp64/www/funcionando_login/PublicacionesProfesor/publicaciones/POO.txt");

   if($editar) // Verificamos si el archivo se modificó correctamente.
   {
      echo" El Archivo se modificó correctamente.";
   }
   else // Verificamos si el archivo no se pudo modificar.
   {
      echo" El Archivo no se pudo modificar.";
   }
   
   echo"<br></br>"; // Imprimimos saltos de línea.
   echo'<a href="menu_index.php"><button>Regresar al menú</button></a>'; // Boton que redirecciona al menú principal.
}
else if($verif=="delete")
{
   $verifArchivo=file_exists("C:/wamp64/www/funcionando_login/PublicacionesProfesor/publicaciones/POO.txt"); // Verificamos que el archivo exista.
   
   if($verifArchivo)
   {
      $eliminar=unlink("C:/wamp64/www/funcionando_login/PublicacionesProfesor/publicaciones/programacion poo.txt"); // Eliminamos el archivo.
   
      if($eliminar) // Verificamos si el archivo se elimino correctamente.
      {
         echo" El Archivo se eliminó correctamente.";
      }
      else // Verificamos si el archivo no se pudo elimminar.
      {
         echo" El Archivo no se pudo eliminar.";
      } 
   }
   else
   {
      echo"El archivo no existe";
   }
   
   echo"<br></br>"; // Imprimimos saltos de línea.
   echo'<a href="menu_index.php"><button>Regresar al menú</button></a>'; // Boton que redirecciona al menú principal.
}

?>
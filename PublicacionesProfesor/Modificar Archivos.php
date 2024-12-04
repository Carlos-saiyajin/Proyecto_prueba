<?php
   
   $editar=rename("programacion poo.txt","publicacion2.txt");

   if($editar) // Verificamos si el archivo se modificó correctamente.
   {
      echo" El Archivo se modificó correctamente.";
   }
   else // Verificamos si el archivo no se pudo modificar.
   {
      echo" El Archivo no se pudo modificar.";
   }
?>

<html>
   
   <body>
      <a href="index.php">Regresar al menu</a>
   </body>

</html>

<?php 
   
   $eliminar=unlink("Publicacion 2.txt"); // Eliminamos el archivo.

   if($eliminar) // Verificamos si el archivo se elimino correctamente.
   {
      echo" El Archivo se eliminó correctamente.";
      echo"<br></br>";
      echo'<a href="menu_index.php"><button>Regresar al menu</button></a>';
   }
   else // Verificamos si el archivo no se pudo elimminar.
   {
      echo" El Archivo no se pudo eliminar.";
      echo"<br></br>";
      echo'<a href="menu_index.php"><button>Regresar al menu</button></a>';
   }
?>
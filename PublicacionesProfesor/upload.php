<?php
   
   if($_FILES['archivo']['error'] === UPLOAD_ERR_OK) // Verificamos si el archivo se envió correctamente.
   {
      $nombreArchivo= $_FILES['archivo']['name'];
      $ubicacionTemporal= $_FILES['archivo']['tmp_name'];
      $ubicacionFinal="C:/wamp64/www/funcionando_login/PublicacionesProfesor/publicaciones/$nombreArchivo";
  
      if(move_uploaded_file($ubicacionTemporal,$ubicacionFinal)) // Verificamos si el archivo se subió correctamente.
      {
         echo "El archivo se ha subido correctamente.";
         echo"<br></br>";

         echo'<a href="menu_index.php"><button>Regresar al menu</button></a>';
      } 
      else // Verificamos si el archivo no se pudo subir.
      {
         echo "Error al subir el archivo.";
         echo"<br></br>";

         echo'<a href="menu_index.php"><button>Regresar al menu</button></a>';
      }
   }
   else // Verificamos si el archivo presentó un error.
   {
      echo"Error: ".$_FILES['archivo']['error'];
      exit();
   }
?>




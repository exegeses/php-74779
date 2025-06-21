# chequear que un archivo sea de tipo imagen

1. condicional

que [type] sea una de estas  
   image/png
   image/jpeg  
   image/svg  
   image/gif  

2. subcadena

que [type] contenga
   'image'

encontramos la función str_starts_with()
https://www.php.net/manual/es/function.str-starts-with.php


3. que [type] comience con

   str_starts_with(mime_content_type($archivoTemporal), 'image/'

4. tipo de archivo

   if (getimagesize($archivoTemporal) && str_starts_with(mime_content_type($archivoTemporal), 'image/')) {
   echo "Validación combinada: es una imagen.";
   }



## ChatGPT

https://chatgpt.com/share/6856b69b-611c-8013-858a-ed9d664d1352

<?php
   $respuestas = array(
       "aire para ayudar al avatar",
       "fuego parar ayudar a capturar al avatar",
       "piedra para ayudar al avatar",
       "es el avatar, y ha venido para cambiar el mundo",
       "agua para ayudar al avatar"
       );
   $random = array_rand($respuestas);
   echo $respuestas[$random];
?>
<?php

setcookie(
   name:"subdomain_cookie",
   value:"esta cookie deberia estar disponible solo en /config",
   expires_or_options: time()+60*60*24,
   path:"/php-intermedio2/cookies/platzi/config/",
   domain:"localhost",
   secure: false,
   httponly: true

);
echo "<pre>";
    var_dump($_COOKIE);
echo "</pre>";
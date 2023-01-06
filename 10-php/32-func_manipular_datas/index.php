<?php 
    //date - recupera data atual 
    echo date('d/m/Y H:i');
    echo "<br>";
    //date_default_timezone_get(timezone) - recuperar o timezone default da aplicação
    echo date_default_timezone_get();
    //date_default_timezone_set(timezone) - atualiza o timezone default da aplicação
    date_default_timezone_set('America/Sao_Paulo');
    echo "<br>";
    echo date('d/m/Y H:i');
  
    //strtotime(data) - transforma data textuais em segundos
 ?>
<?php
    
    // Onde possa ocorrer um potencial erro TENTE/TRY
    try{
        echo "<h3>** try ** </h3>";

   // $sql = 'select * from clientes';
    //mysql_query($sql);
    if(!file_exists('arquivo.php')){
        throw new Exception('o arquivo não existe!');
    }

    }catch(Error $e){
        echo "<h3>** catch error ** </h3>";
        echo '<p style="color:red;">'.$e.'</p>';
    }catch(Exception $e){
        echo "<h3>** catch Exception ** </h3>";
        echo '<p style="color:red;">'.$e.'</p>';
    }
?>
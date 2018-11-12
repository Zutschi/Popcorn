<?php  

  require "src/Smart.php";

  
    $sm = new Smart(150);
    echo($sm->drive("Berlin"));
    echo("</br>");
    echo($sm->yon());
?>
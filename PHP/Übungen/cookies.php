<?php 

if(!isset($_COOKIE["AnzAufrufe"]))
{
    setcookie("AnzAufrufe",1);
    $anz = 1;
    print($anz);
}
else
{
    $anz = $_COOKIE["AnzAufrufe"];
    setcookie("AnzAufrufe",($anz + 1));
    print($anz);    
    
}

?>
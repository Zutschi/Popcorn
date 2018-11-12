<h1>Funktion</h1>
<?php
// Empty
 $var1 = "1";
 $var2 = 0;
 var_dump(empty($var1));
 echo "</br>";
 var_dump(empty($var2));
?>
<h1>If-Abfragen</h1>
<?php
// If Abfragen 
$var1 = true;
if ($var1 == true) {
    echo 'Die Varibale ist "true"';
}
 else
 {
    echo 'Die Varibale ist "false"';
 }
?>
<h1>Schleifen</h1>
<?php
 $var = 12;
 while($var <= 42)
{
    echo $var. "</br>";
    $var++;
}
?>
<h1>Array</h1>
<?php
$waren = array("Holz","Stein","Wasser");

$waren[] = "Eisen";
array_unshift($waren,"Kupfer");

echo "<ul>";

foreach ($waren AS $key => $product) 
    {
        echo "<li>";
        echo $key;
        echo ": ";
        echo $product;
        echo "</li>";
    }
echo "</ul>";

?>
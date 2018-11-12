

<?php
$start = 1;
$end = 100;

echo "<h1>For-Schleife</h1> </br>";
$result = 0;
for ($i=$start; $i <= $end ; $i++) 
{
    $result += $i;
}
echo("Endergebnis: " . $result);

echo "</br>";

echo "<h1>While</h1> </br>";

$result = 0;
$x = $start;
while($x <= $end)
{      
   $result = $result + $x;
   $x++;
}
echo("Endergebnis: " . $result);

?>
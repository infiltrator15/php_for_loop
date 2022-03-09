<?
$x=10;
$i=0;
$s1=1;
$s2=5;
$n=0;

echo "Fibonacci: ";
for ($i=1; $i <= $x ; $i++){
    echo $s1. " ";
    $n = $s1 + $s2;
    $s1 = $s2;
    $s2 = $n;
    }
    echo "\n";
?>
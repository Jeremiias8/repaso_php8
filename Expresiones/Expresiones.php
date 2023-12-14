<?php 

    function foo () 
    {
        return 5;
    }

    $c = foo()

    // operador terniario
    // $primero ? $segundo : $tercero

    // pre y post-incremento
    function doble($i)
    {
        return $i*2;
    }

    $b = $a = 5;
    $c = $a++;

    $e = $d = ++$b;

    $f = doble($d++); // d = 12 (6*2)
    $g = doble(++$e); // e = 14 (++$ + 1) (7*2)
    $h = $g += 10;
?>
<?php 

    $a = 5;
    $b = 16;
    if ($a > $b) {
        echo "a es posiblemente mayor que b";
        $b = $a;
    }

    // conditions in html/js/css...
    /* <?php if (condition): ?>
        html code to run if condition is true
    <?php else: ?>
        html code to run if condition is false
    <?php endif ?> */

    // ELSE IF
    if ($a > $b) {
        echo "a es probablemente mayor que b<br>";
    } elseif ($a == $b) {
        echo "a es igual que b";
    } else {
        echo "a es menor que b";
    }

    // forma correcta de ejecutar la estructura
    if ($a > $b):
            echo $a." es mayor que ".$b;
    elseif ($a == $b):
            echo $a." es igual a ".$b;
    else:
            echo $a." no es ni mayor ni igual a ".$b;
    endif;

    // SWITCH
    /*
        <?php switch ($foo): ?>
            <?php case 1: ?>
            ...
        <?php endswitch ?>
    */

    // WHILE
    $i = 1;
    while ($i <= 10) {
        echo $i++;
    }

    $i = 2;
    while ($i <= 10):
        echo $i;
        $i++;
    endwhile;

    // DO WHILE
    $i = 0;
    do {
        echo $i;
    } while ($i > 0);

    do {
        if ($i < 5) {
            echo "i no es lo suficientemente grande";
            break;
        }
        $i *= $factor;
        if ($i < $minimun_limit) {
            break;
        }
        echo "i está okay";
    } while (0);


    // FOR
    // ejemplos 1, 2, 3, 4
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
    }

    for ($i = 1; ; $i++) {
        if ($i > 10) {
            break;
        }
        echo $i;
    }

    $i = 1;
    for (; ; ) {
        if ($i > 10) {
            break;
        }
        echo $i;
        $i++;
    }

    for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, 
    $i++);

    // FOREACH
    $array = array(1, 2, 3, 4);
    foreach ($array as $valor) {
        $valor = $valor * 2;
    }
    unset($valor); // 2 4 6 8

    // foreach sin unset 
    foreach ($array as $clave => $valor) {

        // $array[3] se actualizará con cada valor de $array
        echo "{$clave} => {$valor} ";
        print_r($array);
    }
    // finalmente el penúltimo valor se copia al último valor

    foreach (array(2, 4, 8, 16, 32) as $valor) {
        $valor = $valor * 3;
    } // 6 12 24 48 96

    // más ejemplos
    $a = array(1, 2, 3, 17);

    foreach ($a as $v) {
        echo "Valor actual de \$a: $v.\n";
    }

    $a = array(1, 3, 5, 18);
    
    $i = 0;

    foreach ($a as $v) {
        echo "\$a[$i] => $v.\n";
        $i++;
    }

    $a = array(
        "uno" => 1,
        "dos" => 2,
        "tres" => 3,
        "diecinueve" => 19
    );

    foreach ($a as $k => $v) {
        echo "\$a[$k] => $v.\n";
    }

    $a = array();
    $a[0][0] = "a";
    $a[0][1] = "b";
    $a[1][0] = "y";
    $a[1][1] = "z";

    foreach ($a as $v1) {
        foreach($v1 as $v2) {
            echo "$v2\n";
        }
    }

    foreach (array(1, 2, 3, 4 ,5) as $v) {
        echo "$v\n";
    }


    // BREAK - finaliza ejecuciones de for, foreach, while, do-while o switch
    $arr = array('uno', 'dos', 'tres', 'cuatro', 'pare', 'cinco');
    while (list(, $val) = each($arr)) {
        if ($val == 'pare') break;
        echo "$val<br />\n";
    }
    
    $i = 0;
    while (++$i) {
        switch ($i) {
        case 5:
            echo "En 5 <br />\n";
            break 1;
        case 10:
            echo "En 10; saliendo<br />\n";
            break 2;
        default:
            break;
        }
    }

    while (true) {
        foreach ([1, 2, 3] as $value) {
            echo 'ok<br />';
            // break 3; // FATAL ERROR
        }
        echo 'jamais exécuter';
        break;
    }


    // CONTINUE - para saltar el resto de la iteración actual del bucle y continuar la ejecución en la eval de la condición, para comenzar la siguiente iter.
    while (list($clave, $valor) = each($arr)) {
        if (!($clave % 2)) {
            continue;
        }
        // hacer_algo($valor);
    }

    $i = 0;
    while ($i++ < 5) {
        echo "Exterior<br />\n";
        while (1) {
            echo "Medio<br />\n";
            while (1) {
                echo "Interior<br />\n";
                continue 3;
            }
            echo "Esto nunca se imprimirá.<br />\n";
        }
        echo "Ni esto tampoco.<br />\n";
    }

    // No debe usarse 'continue' sin ;
    // ejemplo
    for ($i = 0; $i < 5; ++$i) {
        if ($i == 2) 
            continue
        print "$i\n";
    }

    // ELSEIF == SWITCH
    if ($i == 0) {
        echo "i es igual a 0";
    } elseif ($i == 1) {
        echo "i es igual a 1";
    } elseif ($i == 2) {
        echo "i es igual a 2";
    }

    switch ($i) {
        case 0:
            echo "i es igual a 0";
            break;
        case 1:
            echo "i es igual a 1";
            break;
        case 2:
            echo "i es igual a 2";
            break;
    }

    // switch con uso de strings
    switch ($i) {
        case "manzana":
            echo "i es una manzana";
            break;
        case "barra":
            echo "i es una barra";
            break;
        case "pastel":
            echo "i es un pastel";
            break;
    }

    // con muchos 'cases'
    switch($i) {
        case 0:
        case 1:
        case 2:
            echo "i es menor que 3 pero no negativo";
            break;
        case 3:
            echo "i es 3";
    }

    // con 'default' y 'endswitch'
    switch ($i) {
        case 0:
            echo "i es igual a 0";
            break;
        case 1:
            echo "i es igual a 1";
            break;
        case 2:
            echo "i es igual a 2";
            break;
        default: 
            echo "i no es igual a 0, 1 ni 2";
    }

    switch ($i):
        case 0:
            echo "i es igual a 0";
            break;
        case 1:
            echo "i es igual a 1";
            break;
        case 2:
            echo "i es igual a 2";
            break;
        default:
            echo "i no es igual a 0, 1 ni 2";
    endswitch;

    
    // MATCH aplica el estricto ===, switch ==
    // estructura
    $return_value = match (subject_expression) {
        single_conditional_expression => return_expression,
        conditional_expression1, conditional_expression2 => return_expression,
    };

    $result = match ($x) {
        foo() => ...,
        $this->bar() => ..., // bar() no se llamada si foo() === $x
        $this->baz => beep(), // beep() no se llama a menos que $x === this->baz
    }

    $result2 = match ($x) {
        // este match:
        $a, $b, $c => 5,
        // es igual a esto:
        $a => 5,
        $b => 5,
        $c => 5,
    };

    echo "result: " .$result2;


    // DECLARE
    // esto
    declare(ticks = 1);

    // o esto (son lo mismo)
    declare(ticks = 2) {
        // script aquí
    }

    // DECLARE - TICK
    // ejemplo
    declare(ticks = 1);

    function tick_handler()
    {
        echo "tick_handler() llamado\n";
    }

    register_tick_function('tick_handler');

    $a = 4;
    if ($a > 0) {
        $a += 2;
        print($a); // mientras sea mayor que 0...
    }

    // ENCODING
    declare(encoding = 'ISO-8859-1');
        // code here


    // RETURN
    $inclusion = include("smth.php");
    echo "this is a include: " .`${inclusion}`;
    echo "done it";
    return;


    // REQUIRE
    /*
        foo.php:
        return "foo";
    */

    $test = require("foo.php");
    echo $test; // "foo"


    // INCLUDE
    // ej. básico
    /*
        fruits.php:
            $color = "verde";
            $fruta = "manzana"; 
    */
    /*
        test.php:
            echo "Una $fruta $color"; // Una
        
        include 'fruits.php';

        echo "Una $fruta $color"; // Una manzana verde
    */

    // con funciones
    function foo()
    {
        global $color;

        include 'fruits.php';

        echo "Una $fruta $color";
    }

    foo(); // Una manzana verde
    echo "Una $fruta $color"; // Una verde
    // solo muestra 'verde', valor de $color, porque es declarada como global
?>
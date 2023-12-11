<?php 

    echo $_POST['username'];
    echo $_REQUEST['username'];

    // asignar cookies
    setcookie("MiCookie[foo]", 'Prueba 1', time()+3600);
    setcookie("MiCookie[bar]", 'Prueba 2', time()+3600);

    // ejemplo cookies
    if (isset($_COOKIE['conteo'])) {

        $conteo = $_COOKIE['conteo'] + 1;
    } else {

        $conteo = 1;
    }

    setcookie('conteo', $conteo, $time()+3600);
    setcookie("Carrito[$conteo]", $item, time()+3600);

    // para saber el tipo de variable
    /*
        gettype()
        is_array()
        is_float()
        is_int()
        is_object()
        is_string()
    */
?>
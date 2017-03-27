<?php
//aplicacion 11
function potencia()
{
    for($i=1; $i<5;$i++)    
    {
        for($j=1; $j<5;$j++)
        {
            echo $i."a la ".$j."= ".pow($i,$j)."<br>";
        }
    }

}

//aplicacion 12

function invertir($cadena)
{

    echo strrev($cadena);

}

//aplicacion 13

function validarCantidad($palabra, $max)
{

    if(strlen($palabra)<=$max)
    {
        if($palabra=="Recuperatorio" || $palabra=="Parcial" || $palabra=="Programacion")
        {
            return 1;
        }
        else
            return 0;
        
        echo "Es valido";
    }
    else
        echo "No es valido, supera el maximo";


}

//aplicacion 14

function esPar($num)
{
    if($num%2==0)
    {
        echo "es par";
        return TRUE;
    }
    else
    {
        echo "es impar";
        return FALSE;
    }

}

function esImpar($num)
{
    echo "<br>";
    !esPar($num);

}



?>
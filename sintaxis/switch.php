<?php

$age = 18;

switch($age) {
    case 1:
        echo "Tiene 1 año";
        break;
    case 18:
        echo "Tiene 18 años";
        break;
    default:
        echo "No existe la opcion";
        break;
}

echo "<br/>";

$month = 5;

switch($month) {
    case 1:
    case 2:
    case 12:
        echo "Es Invierno";
        break;
    case 3:
    case 4:
    case 5:
        echo "Es Primavera";
        break;
    case 6:
    case 7:
    case 8:
        echo "Es Verano";
        break;
    case 9:
    case 10:
    case 11:
        echo "Es Otoño";
        break;
    default:
        "Esta opcion no existe";
        break;

}
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evelina Celeste Nuñez</title>
</head>
<body>

</body>
</html>



<?php

echo "<h3>Ejemplo 1- Como se define una variable en php: </h3> <br>" ;
echo "hola mundo" . "<br>";
 $variable = "cinco" . 5.87678;
 echo $variable;


 echo "<h3>Ejemplo 2- php es sensible al CamelCase, las mayusculas y minusculas son dos cosas diferentes:</h3> <br>";
$variable = 1;
$VARIABLE =2;
echo $variable . "<br>";
echo $VARIABLE . "<br>";


echo "<h3>Ejemplo 3- Uso de comillas simples y dobles:</h3> <br>";
// "caracteres de escape" cuando queremso utilizar comillas simple y dobles \" xxxxxxxx \"
$x= 5;
$y=10;

// ' ' comillas simples lo toma como texto literal
// " " comillas dobles le pedimos que interprete
echo "la suma es " .  $x + $y . "<br>";
echo "la suma de $x con $y es: " . $x +$y. "<br>";


echo "<h3>Ejemplo 4- Como imprimir un Arrays con Json_encode:</h3> <br>";
$y=true;
$variable = [4,"cinco",$y];
echo json_encode($variable);


echo "<h3>Ejemplo 5- método cantidad caracteres y como imprimir el retorno de un método:</h3> <br>";
$variable= "hola mundo";
echo strlen($variable) . "<br>";

// con var_dump imprimimos lo que nos devuelve el metodo
var_dump(is_array($variable));


echo "<h3>Ejemplo 6- constanstes de tipo Arrays</h3> <br>";
define("autos", [
        "alfa Romeo",
        "BMV",
        "toyota"
    ]);

echo autos[2] . "<br>";
var_dump(autos) ;



echo "<h3>Ejemplo7- Operadores : </h3> <br>";
$variable1= 5;
$variable2= 10;
echo  "la variables1 es " . $variable1 . "<br>";
echo "la variable2 es" . $variable2 . "<br>";
$suma= $variable1 +$variable2;
$multiplicacion= $variable1 * $variable2;
$division= $variable1 / $variable2;
$restoDivision= $variable1 % $variable2;
$exponencial= $variable1 ** $variable2;

echo "La suma es " . $suma . "<br>";
echo "La multiplicacion es " . $multiplicacion . "<br>";
echo "El resto de una division es" .$restoDivision . "<br>";


echo "<h3> Ejemplo 8- acceder al valor de una variale desde una variable :</h3> <br>";
$nombre= "Evelina";
$nombreDeVariable="nombre";

echo $$nombreDeVariable;


echo "<h3>Ejemplo 9- if en php , no es necesario poner  el doble '==', se da cuenta si la condición es true o false</h3> <br>";

$condicion =true;
$nombre= "Evelina";
$apellido="Nuñez";

if($condicion == true){
    echo $nombre;
}else{
    echo $apellido;
}

echo "<h3>Operador ternario</h3> <br>";

echo $condicion ? $nombre : $apellido;



echo "<h3>Ejemplo 10- If else if // '===' ademas de comparar el contenido compara el tipo de variable: </h3> <br>";
$condicion ='2';
$nombre= "Evelina";
$apellido="Nuñez";

if($condicion === 'nombre'){
    echo $nombre;
}else if($condicion === 'apellido'){
    echo $apellido;
}else{
    echo "Estimado/a";
}



echo "<h3>Ejemplo 11- switch - es importante los braak sino ejecuta todas las opciones: </h3> <br>";
$menu= "";

switch($menu){
    case "verdura":
        echo "espinaca";
        break;
    case "fruta":
        echo "manzana";
        break;
    default:
        echo "comida";
}

// podemos sacar el break y utilizarlo a nuestro gusto como en el siguiente ejemplo:
switch($menu){
    case "verdura":
    case "fruta":
        echo "comida";
        break;
    default:
        echo "error";
}



echo "<h3>Ejemplo 12 - For: </h3> <br>";

$array =  [
        0=>"charmander",
        1=> "balbasaur" ,
        2=> "squirtle" ,
        3=> "pikachu"
];

echo "<h3> For</h3>";
for ($i =0 ; $i < sizeof($array); $i++){
    echo $i . "-" . $array[$i] ."<br>";
}



echo  "<h3>Ejemplo 13-  For each - que recorra un array como clave $i => valor y element es el contenido
Lo importante que podemos hacer con los arrays es renombrar indices por texto, con un for comun nos explota pero con un foreach sigue funcionando normal</h3> <br>";

$array =  [
    "Fuego"=>"charmander",
    "Hoja"=> "balbasaur" ,
    "Agua"=> "squirtle" ,
    "Electricidad"=> "pikachu"
];

echo "<h3> ForEach </h3>";
foreach ($array as $i => $element)
    echo $i . "-" . $element . "<br>";

echo "<h3> Accediendo mediante indice </h3>";
echo $array["Fuego"];

// Ejemplo Array de arrays - ejemplos de renombrar indices y acceder a ellos
$clasesPordocente =  [
    "Ale"=>["clase1"=>"Arquitectura", "clase2"=>"www"],
    "Facu"=> ["clase1"=>"intro", "clase2"=>"php base"] ,
    "Omar"=> ["clase1"=>"boostrap", "clase2"=>"sympony"]
];

var_dump($clasesPordocente["Ale"]);
echo json_encode($clasesPordocente["Ale"]["clase2"]);


echo "<h3>Ejemplo 14 - While</h3> <br>";



echo "<h3> Pre incremento de la variable dentro del while</h3> <br>";
$x =0;

while (++$x <= 5){
    echo "Valor de X es: $x <br>";

}
echo "<h3> Post incremento de la variable</h3> <br>";
$x= 1;
while ($x <= 5){
    echo "Valor de X es: $x <br>";
    $x++;
}

// Ejemplo Do while

echo "<h3> Do While</h3> <br>";
$x= 1;
 do{
     echo "The number is: $x <br>";
     $x++;
 } while( $x < 5);

?>


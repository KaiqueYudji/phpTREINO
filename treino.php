<?php


echo "<h1> Hello World! </h1>";


function PerimetroQuadrado($lado){
  $perimetro = $lado * 4;
  return $perimetro;
}

$resultadoPerimetro = PerimetroQuadrado(5);

echo 'Perimetro do quadrado é igual a: ' .$resultadoPerimetro .'</br>' .'</br>';




function AreaQuadrado($lado){
    return $lado * $lado;
}

$resultadoArea = AreaQuadrado(5);

echo 'Area do quadrado é igual a: '.$resultadoArea.'</br>' .'</br>';




function AreaTriangulo($base,$altura){
    return ($base * $altura) / 2;
}

$resultadoAreaTriangulo = AreaTriangulo(5,5);

echo 'Area do triangulo é igual a: '.$resultadoAreaTriangulo.'</br>' .'</br>';




class NotasAluno{
    public $nota1;
    public $nota2;
    public $nota3;
    public $nota4;
}

function Media($kaique){
return ($kaique->nota1 + $kaique->nota2 + $kaique->nota3 + $kaique->nota4) /4;
}

$kaique = new NotasAluno();
    $kaique->nota1 = 7;
    $kaique->nota2 = 7;
    $kaique->nota3 = 9;
    $kaique->nota4 = 5;

    $resultado = Media($kaique);
    echo "A média do kaique é: " .$resultado;







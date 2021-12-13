<?php


echo "<h1> Treinão de PHPP!!!!! </h1>";


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
    public $nome;
    public $nota1;
    public $nota2;
    public $nota3;
    public $nota4;

    public function Nome(){
    echo "O nome do Alundo é Clodoswaldo".'</br>' .'</br>';
    }
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
    echo "A média do kaique é: " .$resultado.'</br>' .'</br>';

    echo $kaique->Nome();







    class Retangulo{
        public $base;
        public $altura;
    }
    

    function AreaRetangulo($ret1){
    return $ret1->base * $ret1->altura;
    }


    $ret1 = new Retangulo();
         $ret1->base = 3;
         $ret1->altura = 3;


    $areaRetangulo = AreaRetangulo($ret1);
    echo "A área do retângulo é igual a : " .$areaRetangulo.'</br>' .'</br>';
 





    class PedidoAcai{
        public $qtdPequeno;
        public $qtdMedio;
        public $qtdGrande;
    }

    $pedido1 = new PedidoAcai();
        $pedido1->qtdPequeno = 3;
        $pedido1->qtdMedio = 2;
        $pedido1->qtdGrande = 0;

        function CalcularPedido($pedido){

            $pequenoValor = $pedido->qtdPequeno * 10;
            $medioValor = $pedido->qtdMedio *12;
            $grandeValor = $pedido->qtdGrande *14;

            return $pequenoValor + $medioValor + $grandeValor;

        }

        $valorCompra = CalcularPedido($pedido1);
         echo "o Valor da compra de ".$pedido1->qtdPequeno ." açais pequenos, ".$pedido1->qtdMedio." açais medios, e ".$pedido1->qtdGrande. " açais grandes é de: ".$valorCompra."$ reais".'</br>' .'</br>'; 







         class CompraVeiculo{
             public $valorVeiculo;
             public $valorTaxa;
             public $qtdParcelas;
         }

         function precoTotal($valor){
            $total = aplicarJuros($valor);
            return $total;
         }

         function aplicarJuros($valor){
             $juros = ($valor->valorVeiculo * $valor->qtdParcelas * ($valor->valorTaxa/100));
             return $valor->valorVeiculo + $juros;
         }

         $compra = new CompraVeiculo();
            $compra->valorVeiculo = 50000;
            $compra->valorTaxa = 5;
            $compra->qtdParcelas = 12;

            $valorFinal = precoTotal($compra);
            echo " O valor final da compra é de: ".$valorFinal.'</br>' .'</br>';





            class Estatisticas{
                public $base;
                public $altura;
            }

            $ret1 = new Estatisticas();
                $ret1->base = 2;
                $ret1->altura = 2;

            $ret2 = new Estatisticas();
                $ret2->base = 2;
                $ret2->altura = 2;





            class Trigonometria{

                    public function AreaRetangulo($base,$altura){
                        return $base*$altura;
                    }

                    public function RetangulosIguais($Retangulo1,$Retangulo2){

                        $areaR1 = $Retangulo1->base * $Retangulo1->altura;
                        $areaR2 = $Retangulo2->base * $Retangulo2->altura;

                        if($areaR1 === $areaR2){
                            return "Os retângulos são iguais!";
                        }
                        else{
                            return "Os retângulos são diferentes!";
                        }
                    }

            }



            $functions = new Trigonometria();
            $resultado = $functions->AreaRetangulo(5,5);
            $iguais = $functions->RetangulosIguais($ret1,$ret2);


            echo "O resultado é: ".$resultado.'</br>' .'</br>';



            echo $iguais.'</br>' .'</br>';





            $carros = ['camaro','ferrari','porshe','celta'];
            $frutas = array();
            

            //Para adicionar iten a u array eu utilizo este código abaixo   
            $carros[] = "Gol bolinha";

            //outra maneira de adicionar item a um array
           array_push($carros,'Fusca');

            print_r($carros);

            echo"</br>";
            echo"</Br>";





           class Retangs{
               public $base;
               public $altura;
           }


           class Notass{
                public $nota1;
                public $nota2;
                public $nota3;
           }



           class TreinoFocadoA{

               public function Geransequencia($fim){
                  $Lista = array();
                  for($i = 0; $i < $fim; $i++){
                     array_push($Lista,$i);
                  }

                  return $Lista;
               }

 
               public function SequenciaAoQuadrado($numbers){
                   $resultado = array();

                   foreach($numbers as $item){
                       $add = $item * $item;
                     array_push($resultado,$add);
                   }

                   return $resultado;
               }


           }

           $trA = new TreinoFocadoA();
          $resultado = $trA->Geransequencia(10);
          print_r($resultado);

          echo"</br>";
          echo"</br>";

          $numbers = [2,3];
          $quadrado = $trA->SequenciaAoQuadrado($numbers);
          print_r($quadrado);

          echo"</br>";
          echo"</br>";  


          //Constantes no php
          define('NAME', 'Kaique');
          define('AGE',15);
          echo NAME.'</br></br>';
         //
         

        //variavel de variavel
         $nome = 'Guilherme';

         $Guilherme = "bla bla";

         echo $$nome.'</br> </br>';
         //

    


        // ao utilizar operador %, ele será responsável por pegar o resto da divisão Ex: 
        $divi = 10%5;
        echo 'o resultado desta operação é o resto da divisão entre 10 e 5: '.$divi.'</br> </br>';

        //diferente da divisão
        $divis = 10/5;
        echo 'o resultado desta operação é o resultado da diviusão entre 10 e 5: '.$divis.'</br> </br>';

        // ao utilizar o operador **, ele serpa responsável por elevar um número a outro Ex: 
        $re = 10 ** 2;
        echo "10 elevado a 2 é igual a: ".$re.'</br> </br>';

        // = + irá revelar a identidade  real de uma variável, Ex:
        $oi = +'10';
        echo 'a "verdadeira" identidade desta variável é: '.gettype($oi).'</br> </br>';

        $oii = +'12.9 ';
        echo 'a "verdadeira" identidade desta variável é: '.gettype($oii).'</br> </br>';

        // também temos o operador de negação -, ao colocar este operador antes de um valor, este valor se tornará o oposto do que era. EX:
        $ola = 70;
        echo ' A Negação da variável olá é: '.-$ola.'</br> </br>';

        // '' irá executar tudo que está entro dele como se fosse uma stringer
        // "" é mais poserosa,consegue ler comando dentro dela como:nome de variáveis e comandos


        //Exemplo de interpolação: só funciona com "" pois se utilizarmos '' irá ler tudo como se fosse uma string 
        $example = 'Kaique';
        $example2 = 'isabelly';

        echo "{$example} {$example2}".'</br> </br>';


      // Funções string



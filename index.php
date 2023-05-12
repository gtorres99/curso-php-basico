<?php
  
  //$a = 2;
  //$b = 6;
  
 /* if ($a > $b) {
   echo " el valor de a es mayor que el valor de b";
     }else if($a < $b) {
      echo " el valor de a es menor que el valor de b";   
  }else{
   echo " el valor de a es igual que el valor de b";
  }*/
  //$valor = $a > $b ? 'mayor' : ( $a < $b ? 'menor' : 'igual' );
   // echo " el valor de a es $valor que el valor de b";
/*|switch ($a){
   case '1':
      echo "lunes <br>";
      break;
      case '2':
         echo "martes <br>";
         break;
         case '3':
            echo "miercoles <br>";
            break;
            case '4':
               echo "jueves <br>";
               break;
               case '1':
                  echo "lunes <br>";
                  break;
                  case '1':
                     echo "lunes <br>";
                     break;
                     case '1':
                        echo "lunes <br>";
                        break;
}*/
/*echo match ($a){
   1 => "lunes",
   2 => "martes",
   3 => "miercoles",
}*/
/*while ($a <= 10) {
   echo "hola mundo <br>";
   $a++;
}*/
/*do {
   echo "hola------- <br>";
   $a++;
}while ($a < 10);
echo "has salido del bucle";|
$base = 5;
$exp = 4;
$resultado = 1;
for ($i = 0; $i <= $exp; $i++) {
   $resultado = $resultado * $base;
}
echo " el valor de $base elevado a la $exp es : $resultado";
$filas = 10;
   for ($i = 0; $i <= $filas; $i++) {
   for ($j = 1; $j <= $i; $j++) {
      echo"*";
}
echo "<br>";
}
$nombres = ['ana', 'irid', 'joel', 'juan'];
echo $nombres[2]."<br>";

foreach ($nombres as $indice => $nombre) {
   echo $nombre ." $indice </br>";
}*/
 /*for ($i=1 ; $i <= 20  ; $i++) {
 /* if ($i == 11) {
   break;*/
   /*if ($i == 7 || $i == 15) {
      die;
  }
   echo $i."<br>";
}
echo " saliste del bucle";*/
/*echo "marca de tiempo: " . date ()."<br>";
echo "Riaz cuadrada de 9 es :  " . sqrt(9) . "<br>";
echo "Numero aleatorio entre 10 y 50:  " . rand(10, 50) . "<br>";
echo "numero pi es :  " . pi() . "<br>";*/

/*$numero = 20;
$numerodos = 35;
for ($i=1; $i <=50 ; $i++) {
    if ($i == $numero){
        if($numero <= 28){
            $numero = $numero + 1;
   

        continue;

    }
   }
   var_dump($i == $numero);
 /*  if ($i == $numerodos){        
      if($numerodos <= 43){
          $numerodos = $numerodos + 1;
          continue;
 }
  
 }*/
   /* echo $i."<br>";
    echo $i == $numero . "<br>";
   };*/
   
/*function factorial ($n){
   $resultado = 1;
   for ($i=1; $i <= $n; $i++) {
     $resultado = $resultado * $i;
    }
       echo " el factorial de $n es: $resultado ";
   }
factorial ($n=7);*/


//return es el resultado de la funcion ejemplo:

/*function factorial ($n){
   $resultado = 1;
   for ($i=1; $i <= $n; $i++) {
     $resultado = $resultado * $i;
    }
       return $resultado;
   }
$resultado = factorial ($n=7);
echo "el factorial de $n es : ".$resultado;*/

/*$a = 5;
$b = 10;
function test(&$n){ //$n  afecta las variables 
   $n = $n +10;
   }
test($a) ;
test($b);
echo $a. "<br>";// el resultado es 15
echo $b;//el resultado es 20*/
function valoracion ($nombre , $rating){
   echo "El $nombre tiene rating de $rating";
}
function concatenar(... $palabras){
   $resultado = " ";
   foreach($palabras as $palabra){
      $resultado .= $palabra . " ";
   }
   echo $resultado;
}
concatenar('curso','php','8','desde','cero',);
?>

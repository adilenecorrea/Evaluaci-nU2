<?php
/* CBTIS 89
   Programa que convierte los datos en un arreglo en una cadena de texto, y de forma contrario es decir convierte una cadena de texto a elementos dentro de un arreglo
   Brenda Adilene Correa Antuna
   3°A Programacion Matutino 
*/

echo "** ARREGLOS PRECIOS  **",  "<br>" ,  "<br>";

$arrayPrecios = array (500,400,200,700,100);
$arrayIVA= array ();
$arraySubtotal = array();
$arrayDescuentos = array();
$arrayTotal = array();
$longitud = count($arrayPrecios);

for($i=0; $i<$longitud; $i++)
  { $arrayPrecios[$i]==$arrayPrecios[$i];
echo  "  ", $arrayPrecios[$i];
	  echo "<br>";
  }

echo "** ARREGLO IVA  **",  "<br>" ,  "<br>";

for($i=0; $i<$longitud; $i++)
  { $arrayIVA[$i]=0.16*$arrayPrecios[$i];
echo  "  ", $arrayIVA[$i];
	  echo "<br>";
  }

echo "** ARREGLO SUBTOTAL  **",  "<br>" ,  "<br>";

for($i=0; $i<$longitud; $i++)
  { $arraySubtotal[$i]=$arrayIVA[$i]+$arrayPrecios[$i];
echo  "  ", $arraySubtotal[$i];
	  echo "<br>";
  }  

  echo "** ARREGLO DESCUENTOS  **",  "<br>" ,  "<br>";

for($i=0; $i<$longitud; $i++)
  { $arrayDescuentos[$i]=0.10*$arraySubtotal[$i];
echo  "  ", $arrayDescuentos[$i];
	  echo "<br>";
  }  


  echo "** ARREGLO TOTAL  **",  "<br>" ,  "<br>";

for($i=0; $i<$longitud; $i++)
  { $arrayTotal[$i]=$arraySubtotal[$i]-$arrayDescuentos[$i];
echo  "  ", $arrayTotal[$i];
	  echo "<br>";
  }  
?>
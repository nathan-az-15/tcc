<?php

  $r1BQ1 = $_POST['1BQ1'];
  $r1BQ2 = $_POST['1BQ2'];
  $r1BQ3 = $_POST['1BQ3'];
  $r1BQ4 = $_POST['1BQ4'];
  $r1BQ5 = $_POST['1BQ5'];
  $r1BQ6 = $_POST['1BQ6'];
  $r1BQ7 = $_POST['1BQ7'];
  $r1BQ8 = $_POST['1BQ8'];
  $r1BQ9 = $_POST['1BQ9'];
  $r1BQ10 = $_POST['1BQ10'];
  $t1 = 0;
  $t2 = 0;

  if ($r1BQ1 == 'd'){
    echo "1 - RESPOSTA CORRETA <br>";
    $t1++;
  }
  else {
    echo "1 - RESPOSTA INCORRETA <br>";
  }

  if ($r1BQ2 == 'c'){
    echo "2 - RESPOSTA CORRETA <br>";
    $t1++;
  }
  else {
    echo "2 - RESPOSTA INCORRETA <br>";
  }

  if ($r1BQ3 == 'e'){
    echo "3 - RESPOSTA CORRETA <br>";
    $t1++;
  }
  else {
    echo "3 - RESPOSTA INCORRETA <br>";
  }

  if ($r1BQ4 == 'a'){
    echo "4 - RESPOSTA CORRETA <br>";
    $t1++;
  }
  else {
    echo "4 - RESPOSTA INCORRETA <br>";
  }

  if ($r1BQ5 == 'd'){
    echo "5 - RESPOSTA CORRETA <br>";
    $t1++;
  }
  else {
    echo "5 - RESPOSTA INCORRETA <br>";
  }

  if ($r1BQ6 == 'd'){
    echo "6 - RESPOSTA CORRETA <br>";
    $t2++;
  }
  else {
    echo "6 - RESPOSTA INCORRETA <br>";
  }

  if ($r1BQ7 == 'e'){
    echo "7 - RESPOSTA CORRETA <br>";
    $t2++;
  }
  else {
    echo "7 - RESPOSTA INCORRETA <br>";
  }

  if ($r1BQ8 == 'd'){
    echo "8 - RESPOSTA CORRETA <br>";
    $t2++;
  }
  else {
    echo "8 - RESPOSTA INCORRETA <br>";
  }

  if ($r1BQ9 == 'd'){
    echo "9 - RESPOSTA CORRETA <br>";
    $t2++;
  }
  else {
    echo "9 - RESPOSTA INCORRETA <br>";
  }

  if ($r1BQ10 == 'b'){
    echo "10 - RESPOSTA CORRETA <br>";
    $t2++;
  }
  else {
    echo "10 - RESPOSTA INCORRETA <br>";
  }



  if ((5-$t1)>=3){
    echo "Você errou a maioria das questões de ";
  }
  
?>
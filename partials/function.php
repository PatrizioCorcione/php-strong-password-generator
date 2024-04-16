<?php

$pswLenght = $_GET['pswLenght'];

function randomPassword($pswLenght)
{
  $lettersBool = $_GET['lettersBool'];
  $numbersBool = $_GET['numbersBool'];
  $simbolsBool = $_GET['simbolsBool'];
  $repetitionBool = $_GET['repetitionBool'];
  $letters = ($lettersBool) ? str_split('qwertyuiopasdfghjklzxcvbnm') : [];
  $lettersUpp = ($lettersBool) ? str_split('QWERTYUIOPASDFGHJKLZXCVBNM') : [];
  $numbers = ($numbersBool) ? str_split('1234567890') : [];
  $simbols = ($simbolsBool) ? ['!', '?', '&', '%', '$', '&lt;', '&gt;', '^', '+', '-', '*', '/', '(', ')', '[', ']', '{', '}', '@', '#', '_', '='] : [];
  $possibility = array_merge($simbols, $numbers, $letters, $lettersUpp);
  $passGenereted = '';
  if ($pswLenght > count($possibility) && $repetitionBool) {
    $pswLenght = count($possibility);
  };
  for ($i = 0; $i < intval($pswLenght); $i++) {
    if ($repetitionBool) {
      $n = rand(0, count($possibility) - 1);
      if (!str_contains($passGenereted, $possibility[$n])) {
        $passGenereted .= $possibility[$n];
      } else {
        $i--;
      }
    } else {
      $n = rand(0, count($possibility));
      $passGenereted .= $possibility[$n];
    }
  }
  return $passGenereted;
}

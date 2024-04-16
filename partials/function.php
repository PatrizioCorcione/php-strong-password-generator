<?php
$pswLenght = $_GET['emailLenght'];

function randomPassword($pswLenght)
{
  $lettersBool = $_GET['lettersBool'];
  $numbersBool = $_GET['numbersBool'];
  $simbolsBool = $_GET['simbolsBool'];
  $letters = str_split('qwertyuiopasdfghjklzxcvbnm');
  $lettersUpp = str_split('QWERTYUIOPASDFGHJKLZXCVBNM');
  $numbers = str_split('1234567890');
  $simbols = ['!', '?', '&', '%', '$', '&lt;', '&gt;', '^', '+', '-', '*', '/', '(', ')', '[', ']', '{', '}', '@', '#', '_', '='];
  if ($lettersBool) {
    $possibility = array_merge($letters, $lettersUpp);
  } elseif ($numbersBool) {
    $possibility = array_merge($numbers);
  } elseif ($simbolsBool) {
    $possibility = array_merge($simbols);
  }
  $passGenereted = '';
  for ($i = 0; $i < intval($pswLenght); $i++) {
    $n = rand(0, count($possibility));
    $passGenereted .= $possibility[$n];
  }
  return $passGenereted;
}

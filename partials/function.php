<?php
$pswLenght = $_POST['emailLenght'];
function randomPassword($pswLenght)
{
  $letters = 'qwertyuiopasdfghjklzxcvbnm';
  $lettersUpp = 'QWERTYUIOPASDFGHJKLZXCVBNM';
  $numbers = '1234567890';
  $simbols = '!?&%$^+-*/()[]{}@#_=';
  $possibility = $letters . $lettersUpp . $numbers . $simbols;
  $passGenereted = '';
  for ($i = 0; $i < intval($pswLenght); $i++) {
    $n = rand(0, strlen($possibility));
    $passGenereted .= $possibility[$n];
  }
  return $passGenereted;
}

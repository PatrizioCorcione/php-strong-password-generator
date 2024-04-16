<?php
require_once __DIR__ . '/partials/function.php';
session_start();
if (isset($pswLenght)) {
  $_SESSION['finalPsw'] = randomPassword($pswLenght);
  header('Location: ./partials/succes.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<?php require_once __DIR__ . '/partials/head.php' ?>

<body>
  <div class="container">
    <form method="GET" action="index.php">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Inserisci la lunghezza desiderata</label>
        <input type="text" class="form-control" id="pswLenght" name="pswLenght">
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" id="checkLetters" name="lettersBool">
        <label class="form-check-label" for="flexCheckDefault">
          Lettere
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" id="checkNumbers" name="numbersBool">
        <label class="form-check-label" for="flexCheckDefault">
          Numeri
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" id="checkSimbols" name="simbolsBool">
        <label class="form-check-label" for="flexCheckDefault">
          Simboli
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" id="checkrepetition" name="repetitionBool">
        <label class="form-check-label" for="flexCheckDefault">
          Nessuna Ripetizione
        </label>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>
<?php
require_once __DIR__ . '/partials/function.php';
session_start();
if (isset($pswLenght)) {
  $_SESSION['finalEmail'] = randomPassword($pswLenght);
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
        <input type="text" class="form-control" id="emailLenght" name="emailLenght">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>
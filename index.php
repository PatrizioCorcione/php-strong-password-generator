<?php
require_once __DIR__ . '/partials/function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous' />
  <title>Document</title>
</head>

<body>
  <div class="container">
    <form method="POST" action="index.php">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Inserisci la lunghezza desiderata</label>
        <input type="text" class="form-control" id="emailLenght" name="emailLenght">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <h1><?php echo randomPassword($pswLenght) ?></h1>
</body>

</html>
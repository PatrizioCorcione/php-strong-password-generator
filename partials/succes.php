<?php
session_start();
$realEmail = $_SESSION['finalEmail']
?>

<!DOCTYPE html>
<html lang="en">

<?php require_once __DIR__ . '/head.php' ?>

<body>
  <div class="container">
    <h1><?php echo $realEmail ?></h1>
  </div>
</body>

</html>
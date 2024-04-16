<?php
session_start();
$realPsw = $_SESSION['finalPsw'];
?>

<!DOCTYPE html>
<html lang="en">

<?php require_once __DIR__ . '/head.php' ?>

<body>
  <div class="container">

    <h1>ciccio<?php echo $realPsw ?></h1>
  </div>
</body>

</html>
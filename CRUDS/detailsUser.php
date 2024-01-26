<?php
  include 'actionUser.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP MySQLi CRUD Prepared Statement with upload image</title>
 
</head>
<body>
<div >
    <div >
        <div >
            <h3>DETAJET</h3>
            <hr>
            <?php if (isset($_SESSION['response'])) { ?>
            <div class="alert alert-<?php echo  $_SESSION['res_type']; ?> alert-dismissible text-center">
              <b><?php echo  $_SESSION['response']; ?></b>
            </div>
            <?php } unset($_SESSION['response']); ?>
        </div>
    </div>
     
    <div>
      <div>
        <h2>ID : <?php echo  $vid; ?></h2>
        <h4 >Emri : <?php echo  $vname; ?></h4>
        <h4>Mbiemri : <?php echo  $vemail; ?></h4>
        <h4>Email : <?php echo  $vphone; ?></h4>
        <h4>Password : <?php echo   $vpass; ?></h4>
        <h4>CPassword : <?php echo   $vcpass; ?></h4>
        <h4>Role : <?php echo   $vrole; ?></h4>
      </div>

    </div>
</div>
</body>
</html>
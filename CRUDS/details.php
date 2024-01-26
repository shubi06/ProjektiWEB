<?php
  include 'action.php';
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
        <div>
          <img src="<?php echo  $vphoto; ?>" width="300">
        </div>
        <h4 >Emri : <?php echo  $vname; ?></h4>
        <h4>Eksperienca : <?php echo  $vemail; ?></h4>
        <h4>Sherbimi : <?php echo  $vphone; ?></h4>
      </div>
    </div>
</div>
</body>
</html>
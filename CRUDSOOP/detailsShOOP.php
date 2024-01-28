<?php

      include '../controller/sherbimetController.php';
      $sherbimetController = new sherbimetController($conn);
      $details = $sherbimetController->details();
      extract($details);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Detajet</title>
 
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
        <h4 >Emertimi : <?php echo  $vname; ?></h4>
        <h4>Pershkrimi : <?php echo  $vemail; ?></h4>

      </div>
    </div>
</div>
</body>
</html>
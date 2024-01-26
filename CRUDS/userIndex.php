<?php
  include 'actionUser.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CRUD USERAT</title>
 
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</head>
<body>
<div>
    <div>
        <div>
            <h3>CRUD USERAT </h3>
            <hr>
            <?php if (isset($_SESSION['response'])) { ?>
            <div class="alert alert-<?php echo  $_SESSION['res_type']; ?> alert-dismissible text-center">
              <b><?php echo  $_SESSION['response']; ?></b>
            </div>
            <?php } unset($_SESSION['response']); ?>
        </div>
    </div>
     
    <div>
        <div >
            <div>
              <div>
                SHTO
              </div>
              <div>
                <form action="actionUser.php" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo  $id; ?>">
                  <div>
                    <input type="text" name="emri" value="<?php echo  $emri; ?>" class="form-control" placeholder="Emri" required>
                  </div>
                  <div>
                    <input type="text" name="mbiemri" value="<?php echo  $mbiemri; ?>" class="form-control" placeholder="Mbiemri" required>
                  </div>
                  <div>
                    <input type="email" name="email" value="<?php echo  $email; ?>" class="form-control" placeholder="Email" required>
                  </div>
                  <div>
                    <input type="password" name="password" value="<?php echo  $password; ?>" class="form-control" placeholder="Password" required>
                  </div>
                  <div>
                    <input type="password" name="cpassword" value="<?php echo  $cpassword; ?>" class="form-control" placeholder="Confirm Password" required>
                  </div>
                  <div>
                    <input type="number" name="role_as" value="<?php echo  $role_as; ?>" class="form-control" placeholder="role" required>
                  </div>

                  <!-- <div >
                    <input type="hidden" name="oldimage" value="">
                    <input type="file" name="foto" class="custom-file">
                    <img src="" width="120" class="img-thumbnail">
                  </div> -->
                  <div">
                    <?php if ($update == true) { ?>
                    <input type="submit" name="update" value="Update">
                    <?php } else { ?>
                    <input type="submit" name="add"value="Shto">
                    <?php } ?>
                  </div>
                </form>
              </div>
            </div>
        </div>
        <div>
            <?php
              $query = 'SELECT * FROM users';
              $stmt = $conn->prepare($query);
              $stmt->execute();
              $result = $stmt->get_result();
            ?>
            <div>
            <div>
                LISTA
            </div>
            <div>
            <table id="data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>EMRI</th>
                  <th>MBIEMRI</th>
                  <th>EMAIL</th>
                  <th>PASSWORD</th>
                  <th>CPASSWORD</th>
                  <th>ROLE</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                  <td><?php echo  $row['id']; ?></td>
                  <!-- <td><img src=" ?>" width="25"></td> -->
                  <td><?php echo  $row['emri']; ?></td>
                  <td><?php echo  $row['mbiemri']; ?></td>
                  <td><?php echo  $row['email']; ?></td>
                  <td><?php echo  $row['password']; ?></td>
                  <td><?php echo  $row['cpassword']; ?></td>
                  <td><?php echo  $row['role_as']; ?></td>
        
                  <td>
                    <a href="detailsUser.php?details=<?php echo  $row['id']; ?>" >Details</a> |
                    <a href="actionUser.php?delete=<?php echo  $row['id']; ?>" onclick="return confirm('Do you want delete this record?');">Delete</a> |
                    <a href="userIndex.php?edit=<?php echo  $row['id']; ?>">Edit</a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
            </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#data-table').DataTable({
      paging: true
    });
  });
</script>
</body>
</html>
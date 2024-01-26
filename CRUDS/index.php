<?php
  include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CRUD MJEKU</title>
 
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</head>
<body>
<div>
    <div>
        <div>
            <h3>CRUD MJEKU</h3>
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
                <form action="action.php" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo  $id; ?>">
                  <div>
                    <input type="text" name="titulli" value="<?php echo  $titulli; ?>" class="form-control" placeholder="Emri" required>
                  </div>
                  <div>
                    <input type="text" name="eksperienca" value="<?php echo  $eksperienca; ?>" class="form-control" placeholder="Eksperienca" required>
                  </div>
                  <div>
                    <input type="text" name="sherbimi" value="<?php echo  $sherbimi; ?>" class="form-control" placeholder="Sherbimi" required>
                  </div>
                  <div >
                    <input type="hidden" name="oldimage" value="<?php echo  $foto; ?>">
                    <input type="file" name="foto" class="custom-file">
                    <img src="<?php echo  $foto; ?>" width="120" class="img-thumbnail">
                  </div>
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
              $query = 'SELECT * FROM mjeku';
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
                  <th>FOTO</th>
                  <th>EMRI</th>
                  <th>EKSPERIENCA</th>
                  <th>SHERBIMI</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                  <td><?php echo  $row['id']; ?></td>
                  <td><img src="<?php echo  $row['foto']; ?>" width="25"></td>
                  <td><?php echo  $row['titulli']; ?></td>
                  <td><?php echo  $row['eksperienca']; ?></td>
                  <td><?php echo  $row['sherbimi']; ?></td>
                  <td>
                    <a href="details.php?details=<?php echo  $row['id']; ?>" >Details</a> |
                    <a href="action.php?delete=<?php echo  $row['id']; ?>" onclick="return confirm('Do you want delete this record?');">Delete</a> |
                    <a href="index.php?edit=<?php echo  $row['id']; ?>">Edit</a>
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
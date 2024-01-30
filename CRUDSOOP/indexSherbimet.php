<?php
  include '../controller/sherbimetController.php';
  $sherbimetController = new sherbimetController($conn);
  
  $insert = $sherbimetController->insert();
  $delete=$sherbimetController->delete();
  
  if (isset($_POST['update'])) {
    $sherbimetController->update();
  }
  
  $updateData = $sherbimetController->edit(); 
  $update = !empty($updateData);
  
  $update = isset($updateData['id']);
  $id = $update ? $updateData['id'] : '';
  $emertim = $update ? $updateData['emertim'] : '';
  $pershkrimi = $update ? $updateData['pershkrimi'] : '';
  $fotoSh = $update ? $updateData['fotoSh'] : '';


// Start the session

// Check if the user ID is set in the session
if (isset($_SESSION['user_id'])) {
    // Retrieve the user ID from the session
    $user_id = $_SESSION['user_id'];

    // Now you can use $user_id in your code
    echo "User ID: " . $user_id;
} else {
    // Redirect the user to the login page or handle the case where the user is not logged in
    echo "User ID not found in session.";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRUD SHERBIMET</title>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <div>
        <div>
            <div>
                <h3>CRUD SHERBIMET</h3>
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
                <div>
                    <div>
                        SHTO
                    </div>
                    <div>
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo  $id; ?>">
                            <div>
                                <input type="text" name="emertim" value="<?php echo  $emertim; ?>" class="form-control"
                                    placeholder="Emri" required>
                            </div>
                            <div>
                                <input type="text" name="pershkrimi" value="<?php echo  $pershkrimi; ?>"
                                    class="form-control" placeholder="Eksperienca" required>
                            </div>
                            <div>
                                <input type="hidden" name="oldimage" value="<?php echo  $fotoSh; ?>">
                                <input type="file" name="fotoSh" class="custom-file">
                                <img src="<?php echo  $fotoSh; ?>" width="120" class="img-thumbnail">
                            </div>
                            <div">
                                <?php if ($update == true) { ?>
                                <input type="submit" name="update" value="Update">
                                <?php } else { ?>
                                <input type="submit" name="add" value="Shto">
                                <?php } ?>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div>
            <?php
              $query = 'SELECT * FROM sherbimet';
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
                                <th>EMERTIMI</th>
                                <th>PERSHKRIMI</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo  $row['id']; ?></td>
                                <td><img src="<?php echo  $row['fotoSh']; ?>" width="25"></td>
                                <td><?php echo  $row['emertim']; ?></td>
                                <td><?php echo  $row['pershkrimi']; ?></td>

                                <td>
                                    <a href="detailsShOOP.php?details=<?php echo  $row['id']; ?>">Details</a> |
                                    <a href="indexSherbimet.php?delete=<?php echo  $row['id']; ?>"
                                        onclick="return confirm('Do you want delete this record?');">Delete</a> |
                                    <a href="indexSherbimet.php?edit=<?php echo  $row['id']; ?>">Edit</a>
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
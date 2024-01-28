<?php
include ('../database/dbconnection.php');
 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MESZAHET </title>
 
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</head>
<body>
<div>
    <div>
        <div>
            <h3>MESAZHET</h3>
            <hr>
            <?php if (isset($_SESSION['response'])) { ?>
            <div class="alert alert-<?php echo  $_SESSION['res_type']; ?> alert-dismissible text-center">
              <b><?php echo  $_SESSION['response']; ?></b>
            </div>
            <?php } unset($_SESSION['response']); ?>
        </div>
    </div>
     
   
        </div>
        <div>
            <?php
              $query = 'SELECT * FROM kontakti';
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
                  <th>NR TELEFONIT</th>
                  <th>EMAIL</th>
                  <th>MESAZHI</th>
            
    
                
                </tr>
              </thead>
              <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                  <td><?php echo  $row['id']; ?></td>
                  <td><?php echo  $row['emri']; ?></td>
                  <td><?php echo  $row['mbiemri']; ?></td>
                  <td><?php echo  $row['numri']; ?></td>
                  <td><?php echo  $row['email']; ?></td>
                  <td><?php echo  $row['mesazhi']; ?></td>
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


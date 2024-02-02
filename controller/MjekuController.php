<?php
session_start();

include('../database/dbconnection.php');


if (isset($_SESSION['auth_user']['id'])) {
    $userId = $_SESSION['auth_user']['id'];
    echo "User ID: " . $userId;
} else {
    echo "No user ID found in session.";
}


class MjekuController
{
    private $conn;

    private $id;
    private $titulli;
    private  $eksperienca;
    private $sherbimi;
    private $foto;
    private $product_categories;
   

    public function __construct($conn)
    {
        $this->conn = $conn;
  
    }

   


    public function insert()
    {
        if (isset($_POST['add'])) {
            $titulli = $_POST['titulli'];
            $eksperienca = $_POST['eksperienca'];
            $sherbimi = $_POST['sherbimi'];

            $foto = $_FILES['foto']['name'];
            $upload = "CRUDSOOP/uploads/" . $foto;

            $query = "INSERT INTO mjeku (titulli, eksperienca, sherbimi, foto) VALUES (?, ?, ?,?)";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("ssss", $titulli, $eksperienca, $sherbimi, $foto);
            $stmt->execute();
            move_uploaded_file($_FILES['foto']['tmp_name'], $upload);

            header('location:indexMjeku.php');
            $_SESSION['response'] = "Successfully Inserted to the database!";
            $_SESSION['res_type'] = "success";
        }
    }

    public function delete()
    {
        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];

            $sql = "SELECT foto FROM mjeku WHERE id=?";
            $stmt2 = $this->conn->prepare($sql);
            $stmt2->bind_param("i", $id);
            $stmt2->execute();
            $result2 = $stmt2->get_result();
            $row = $result2->fetch_assoc();

            $imagepath = $row['foto'];
            unlink($imagepath);

            $query = "DELETE FROM mjeku WHERE id=?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("i", $id);
            $stmt->execute();

            header('location:indexMjeku.php');
            $_SESSION['response'] = "Successfully Deleted!";
            $_SESSION['res_type'] = "danger";
        }
    }

    public function edit()
    {
        $update = false;
        if (isset($_GET['edit'])) {
            $id = $_GET['edit'];

            $query = "SELECT * FROM mjeku WHERE id=?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();

            return $row;
        }

    }

   public function update()
{
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $titulli = $_POST['titulli'];
        $eksperienca = $_POST['eksperienca'];
        $sherbimi = $_POST['sherbimi'];
        $oldimage = $_POST['oldimage'];

        // Merrni emrin e përdoruesit nga sesioni
        $userId = $_SESSION['auth_user']['id'];

        if (isset($_FILES['foto']['name']) && ($_FILES['foto']['name'] != "")) {
            $newimage = "CRUDSOOP/uploads/" . $_FILES['foto']['name'];
            unlink($oldimage);
            move_uploaded_file($_FILES['foto']['tmp_name'], $newimage);
        } else {
            $newimage = $oldimage;
        }

        $query = "UPDATE mjeku SET titulli=?, eksperienca=?, sherbimi=?, foto=?, ndryshimi=? WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssii", $titulli, $eksperienca, $sherbimi, $newimage, $userId, $id);
        $stmt->execute();
        

        $_SESSION['response'] = "Updated Successfully!";
        $_SESSION['res_type'] = "primary";
        header('location:indexMjeku.php');
    }
}


   
    public function details()
    {
        $vid = $vname = $vemail = $vphone = $vphoto = '';

        if (isset($_GET['details'])) {
            $id = $_GET['details'];
            $query = "SELECT * FROM mjeku WHERE id=?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();

            $vid = $row['id'];
            $vname = $row['titulli'];
            $vemail = $row['eksperienca'];
            $vphone = $row['sherbimi'];
            $vphoto = $row['foto'];
        }

        return compact('vid', 'vname', 'vemail', 'vphone', 'vphoto');
    }

 


   
}
?>

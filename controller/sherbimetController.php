<?php
session_start();
include('../database/dbconnection.php');


class sherbimetController
{
    private $conn;
    private $id;
    private $emertim;
    private $pershkrimi;
    private $fotoSh;
    private $product_categories;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

   


    public function insert()
    {
        if (isset($_POST['add'])) {
            $emertim=$_POST['emertim'];
            $pershkrimi=$_POST['pershkrimi'];
           
     
            $fotoSh=$_FILES['fotoSh']['name'];
            $upload="uploads/".$fotoSh;
     
            $query="INSERT INTO sherbimet (emertim,pershkrimi,fotoSh) VALUES (?,?,?)";
            $stmt = $this->conn->prepare($query);

            $stmt->bind_param("sss",$emertim,$pershkrimi,$fotoSh);
            $stmt->execute();
            move_uploaded_file($_FILES['fotoSh']['tmp_name'], $upload);
     
            header('location:indexSherbimet.php');
            $_SESSION['response']="Successfully Inserted to the database!";
            $_SESSION['res_type']="success";
        }
    }

    public function delete()
    {
        if (isset($_GET['delete'])) {
            $id=$_GET['delete'];
 
            $sql="SELECT fotoSh FROM sherbimet WHERE id=?";
            $stmt2=$this->conn->prepare($sql);
            $stmt2->bind_param("i",$id);
            $stmt2->execute();
            $result2=$stmt2->get_result();
            $row=$result2->fetch_assoc();
     
            $imagepath=$row['fotoSh'];
            unlink($imagepath);
     
            $query="DELETE FROM sherbimet WHERE id=?";
            $stmt=$this->conn->prepare($query);
            $stmt->bind_param("i",$id);
            $stmt->execute();
     
            header('location:indexSherbimet.php');
            $_SESSION['response']="Successfully Deleted!";
            $_SESSION['res_type']="danger";
        }
    }

    public function edit()
    {
        $update = false;
        if (isset($_GET['edit'])) {
            $id=$_GET['edit'];
 
            $query="SELECT * FROM sherbimet WHERE id=?";
            $stmt=$this->conn->prepare($query);
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $result=$stmt->get_result();
            $row=$result->fetch_assoc();
     
       
            return $row;
        }

    }

    public function update()
    {
        if (isset($_POST['update'])) {
            $id=$_POST['id'];
            $emertim=$_POST['emertim'];
            $pershkrimi=$_POST['pershkrimi'];
            $oldimage=$_POST['oldimage'];
     
            if(isset($_FILES['fotoSh']['name'])&&($_FILES['fotoSh']['name']!="")){
                $newimage="uploads/".$_FILES['fotoSh']['name'];
                unlink($oldimage);
                move_uploaded_file($_FILES['fotoSh']['tmp_name'], $newimage);
            }
            else{
                $newimage=$oldimage;
            }
            $query="UPDATE sherbimet SET fotoSh=?,emertim=?,pershkrimi=? WHERE id=?";
            $stmt=$this->conn->prepare($query);
            $stmt->bind_param("ssss",$newimage,$emertim,$pershkrimi,$id);
            $stmt->execute();
     
            $_SESSION['response']="Updated Successfully!";
            $_SESSION['res_type']="primary";
            header('location:indexSherbimet.php');
        }
    }
    public function details()
    {
        $vid = $vname = $vemail = $vphone = $vphoto = '';

        if (isset($_GET['details'])) {
            $id=$_GET['details'];
            $query="SELECT * FROM sherbimet WHERE id=?";
            $stmt=$this->conn->prepare($query);
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $result=$stmt->get_result();
            $row=$result->fetch_assoc();
     
            $vid=$row['id'];
            $vname=$row['emertim'];
            $vemail=$row['pershkrimi'];
            $vphoto=$row['fotoSh'];
        }

        return compact('vid', 'vname', 'vemail', 'vphone', 'vphoto');
    }
   
}
?>

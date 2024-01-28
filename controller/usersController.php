<?php
session_start();
include('../database/dbconnection.php');


class usersController
{
    private $conn;

    private  $update=false;
    private  $id;
    private  $emri;
    private   $mbiemri;
    private   $email;
    private   $password;
    private   $cpassword;
    private $role_as;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

   


    public function insert()
    {
        if (isset($_POST['add'])) {
            $emri=$_POST['emri'];
            $mbiemri=$_POST['mbiemri'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $cpassword=$_POST['cpassword'];
            $role_as=$_POST['role_as'];
     
            // $foto=$_FILES['foto']['name'];
            // $upload="ProjektiWEB/CRUDS/uploads/".$foto;
     
            $query="INSERT INTO users (emri,mbiemri,email,password,cpassword,role_as) VALUES (?,?,?,?,?,?)";
            $stmt=$this->conn->prepare($query);
            $stmt->bind_param("ssssss",$emri,$mbiemri,$email,$password,$cpassword,$role_as);
            $stmt->execute();
            // move_uploaded_file($_FILES['foto']['tmp_name'], $upload);
     
            header('location:indexUsers.php');
            $_SESSION['response']="Successfully Inserted to the database!";
            $_SESSION['res_type']="success";
    }
}

    public function delete()
    {
        if (isset($_GET['delete'])) {
            $id=$_GET['delete'];
         
            $query="DELETE FROM users WHERE id=?";
            $stmt=$this->conn->prepare($query);
            $stmt->bind_param("i",$id);
            $stmt->execute();
     
            header('location:indexUsers.php');
            $_SESSION['response']="Successfully Deleted!";
            $_SESSION['res_type']="danger";
    }
    }
    public function edit()
    {
        $update = false;
        if (isset($_GET['edit'])) {
            $id=$_GET['edit'];
 
            $query="SELECT * FROM users WHERE id=?";
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
            $emri=$_POST['emri'];
            $mbiemri=$_POST['mbiemri'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $cpassword=$_POST['cpassword'];
            $role_as=$_POST['role_as'];
    
    
            $query="UPDATE users SET emri=?, mbiemri=?, email=?, password=?, cpassword=?, role_as=? WHERE id=?";
            $stmt=$this->conn->prepare($query);
            $stmt->bind_param("ssssssi",$emri,$mbiemri,$email,$password,$cpassword,$role_as,$id);
            $stmt->execute();
     
            $_SESSION['response']="Updated Successfully!";
            $_SESSION['res_type']="primary";
            header('location:indexUsers.php');
        }
    }
    public function details()
    {
        $vid = $vname = $vemail = $vphone = $vpass = $vcpass = $vrole = '';

        if (isset($_GET['details'])) {
            $id=$_GET['details'];
            $query="SELECT * FROM users WHERE id=?";
            $stmt=$this->conn->prepare($query);
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $result=$stmt->get_result();
            $row=$result->fetch_assoc();
     

       
            $vid=$row['id'];
            $vname=$row['emri'];
            $vemail=$row['mbiemri'];
            $vphone=$row['email'];
            $vpass=$row['password'];
            $vcpass=$row['cpassword'];
            $vrole=$row['role_as'];
        }

        return compact('vid', 'vname', 'vemail', 'vphone', 'vpass','vcpass','vrole');
    }


   
}
?>

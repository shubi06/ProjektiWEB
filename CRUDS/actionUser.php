<?php
    session_start();
    include ('../database/dbconnection.php');
 
    
    $update=false;
    $id="";
    $emri="";
    $mbiemri="";
    $email="";
    $password="";
    $cpassword="";
    $role_as="";
 
    if(isset($_POST['add'])){
        $emri=$_POST['emri'];
        $mbiemri=$_POST['mbiemri'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        $role_as=$_POST['role_as'];
 
        // $foto=$_FILES['foto']['name'];
        // $upload="ProjektiWEB/CRUDS/uploads/".$foto;
 
        $query="INSERT INTO users (emri,mbiemri,email,password,cpassword,role_as) VALUES (?,?,?,?,?,?)";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("ssssss",$emri,$mbiemri,$email,$password,$cpassword,$role_as);
        $stmt->execute();
        // move_uploaded_file($_FILES['foto']['tmp_name'], $upload);
 
        header('location:userIndex.php');
        $_SESSION['response']="Successfully Inserted to the database!";
        $_SESSION['res_type']="success";
    }
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
 
        // $sql="SELECT foto FROM mjeku WHERE id=?";
        // $stmt2=$conn->prepare($sql);
        // $stmt2->bind_param("i",$id);
        // $stmt2->execute();
        // $result2=$stmt2->get_result();
        // $row=$result2->fetch_assoc();
 
        // $imagepath=$row['foto'];
        // unlink($imagepath);
 
        $query="DELETE FROM users WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("i",$id);
        $stmt->execute();
 
        header('location:userIndex.php');
        $_SESSION['response']="Successfully Deleted!";
        $_SESSION['res_type']="danger";
    }
    if(isset($_GET['edit'])){
        $id=$_GET['edit'];
 
        $query="SELECT * FROM users WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();
 
        $id=$row['id'];
        $emri=$row['emri'];
        $mbiemri=$row['mbiemri'];
        $email=$row['email'];
        $password=$row['password'];
        $cpassword=$row['cpassword'];
        $role_as=$row['role_as'];
        $update=true;
    }
    if(isset($_POST['update'])){
        $id=$_POST['id'];
        $emri=$_POST['emri'];
        $mbiemri=$_POST['mbiemri'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        $role_as=$_POST['role_as'];




        // $oldimage=$_POST['oldimage'];
        // if(isset($_FILES['foto']['name'])&&($_FILES['foto']['name']!="")){
        //     $newimage="../ProjektiWEB/CRUDS/uploads/".$_FILES['foto']['name'];
        //     unlink($oldimage);
        //     move_uploaded_file($_FILES['foto']['tmp_name'], $newimage);
        // }
        // else{
        //     $newimage=$oldimage;
        // }

        $query="UPDATE users SET emri=?, mbiemri=?, email=?, password=?, cpassword=?, role_as=? WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("ssssssi",$emri,$mbiemri,$email,$password,$cpassword,$role_as,$id);
        $stmt->execute();
 
        $_SESSION['response']="Updated Successfully!";
        $_SESSION['res_type']="primary";
        header('location:userIndex.php');
    }
 
    if(isset($_GET['details'])){
        $id=$_GET['details'];
        $query="SELECT * FROM users WHERE id=?";
        $stmt=$conn->prepare($query);
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


?>
<?php
    session_start();
    include ('../database/dbconnection.php');
 
    
    $update=false;
    $id="";
    $titulli="";
    $eksperienca="";
    $sherbimi="";
    $foto="";
    $product_categories="";
 
    if(isset($_POST['add'])){
        $titulli=$_POST['titulli'];
        $eksperienca=$_POST['eksperienca'];
        $sherbimi=$_POST['sherbimi'];
 
        $foto=$_FILES['foto']['name'];
        $upload="ProjektiWEB/CRUDS/uploads/".$foto;
 
        $query="INSERT INTO mjeku (titulli,eksperienca,sherbimi,foto)VALUES(?,?,?,?)";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("ssss",$titulli,$eksperienca,$sherbimi,$foto);
        $stmt->execute();
        move_uploaded_file($_FILES['foto']['tmp_name'], $upload);
 
        header('location:index.php');
        $_SESSION['response']="Successfully Inserted to the database!";
        $_SESSION['res_type']="success";
    }
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
 
        $sql="SELECT foto FROM mjeku WHERE id=?";
        $stmt2=$conn->prepare($sql);
        $stmt2->bind_param("i",$id);
        $stmt2->execute();
        $result2=$stmt2->get_result();
        $row=$result2->fetch_assoc();
 
        $imagepath=$row['foto'];
        unlink($imagepath);
 
        $query="DELETE FROM mjeku WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("i",$id);
        $stmt->execute();
 
        header('location:index.php');
        $_SESSION['response']="Successfully Deleted!";
        $_SESSION['res_type']="danger";
    }
    if(isset($_GET['edit'])){
        $id=$_GET['edit'];
 
        $query="SELECT * FROM mjeku WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();
 
        $id=$row['id'];
        $titulli=$row['titulli'];
        $eksperienca=$row['eksperienca'];
        $sherbimi=$row['sherbimi'];
        $foto=$row['foto'];
 
        $update=true;
    }
    if(isset($_POST['update'])){
        $id=$_POST['id'];
        $titulli=$_POST['titulli'];
        $eksperienca=$_POST['eksperienca'];
        $sherbimi=$_POST['sherbimi'];
        $oldimage=$_POST['oldimage'];
 
        if(isset($_FILES['foto']['name'])&&($_FILES['foto']['name']!="")){
            $newimage="../ProjektiWEB/CRUDS/uploads/".$_FILES['foto']['name'];
            unlink($oldimage);
            move_uploaded_file($_FILES['foto']['tmp_name'], $newimage);
        }
        else{
            $newimage=$oldimage;
        }
        $query="UPDATE mjeku SET titulli=?,eksperienca=?,sherbimi=?,foto=? WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("ssssi",$titulli,$eksperienca,$sherbimi,$newimage,$id);
        $stmt->execute();
 
        $_SESSION['response']="Updated Successfully!";
        $_SESSION['res_type']="primary";
        header('location:index.php');
    }
 
    if(isset($_GET['details'])){
        $id=$_GET['details'];
        $query="SELECT * FROM mjeku WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();
 
        $vid=$row['id'];
        $vname=$row['titulli'];
        $vemail=$row['eksperienca'];
        $vphone=$row['sherbimi'];
        $vphoto=$row['foto'];
    }



?>
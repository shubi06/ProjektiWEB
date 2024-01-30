<?php 
session_start();
include ('database/dbconnection.php');

if(isset($_POST['register_btn'])) 
{
    $emri=mysqli_real_escape_string($conn,$_POST['emri']);
    $mbiemri=mysqli_real_escape_string($conn,$_POST['mbiemri']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $passwordperserite=mysqli_real_escape_string($conn,$_POST['passwordperserite']);


    //a osht emaila veqse e regjistruar
    $check_email_query = "SELECT email FROM users WHERE email='$email' ";
    $check_email_query_run = mysqli_query($conn, $check_email_query);

    if(mysqli_num_rows($check_email_query_run)>0) 
    {
        $_SESSION['message'] = "Email veqse eshte e regjistruar";
        header('Location: register.php');
    }

    else{
    if($password == $passwordperserite) 
    {
        //I insertojme te dhenat

        $insert_query = "INSERT INTO users (emri,mbiemri,email,password,cpassword) VALUES ('$emri','$mbiemri','$email','$password','$passwordperserite')";
        $insert_query_run = mysqli_query($conn,$insert_query);

        if($insert_query_run) 
        {
            $_SESSION['message']='U regjistruat me sukses';
            header('Location: index.php');
        }
        else
        {
            $_SESSION['message']= "Diqka shkoi gabim";
            header('Location: register.php');
        }
    }
    else 
    {
        $_SESSION['message']= "Passwordat nuk perputhen";
        header('Location: register.php');
    }
    }
}


else if (isset($_POST['login_btn'])) 
{


    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    $login_query = "SELECT * FROM users WHERE email='$email' AND password = '$password' ";
    $login_query_run= mysqli_query ($conn, $login_query);

    if(mysqli_num_rows($login_query_run) > 0 ) 
    {
        $_SESSION['auth'] = true;
    
        $userdata = mysqli_fetch_array($login_query_run);
        $useremri = $userdata['emri'];
        $useremail = $userdata['email'];
        $role_as = $userdata['role_as'];
        
        $_SESSION['auth_user'] = [
            'emri' => $useremri,
            'email'=> $useremail 
        ];
    
        $_SESSION['role_as']=$role_as;
    
        if($role_as == 1) {
            $_SESSION['message']='Mire se vini ne Dashboard';
            header('Location: dashboard.php');
        } else {
            $_SESSION['message']='U kyqet me sukses';
            header('Location: index.php');
        }
    } else {
        $_SESSION['message'] = "Gabim";
        header('Location: login.php');
    }
    
}
?>
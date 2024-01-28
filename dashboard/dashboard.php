<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <link
    rel="stylesheet"
    href="dashboard.css"
  />

 <style>
    @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
    
    * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: 'Campton', sans-serif;
}

.info-msg {
        margin: 10px 0;
        padding: 10px;
        border-radius: 3px 3px 3px 3px;
    }
    .info-msg {
  color: #059;
  background-color: #BEF;
}



.header {
  padding: 10px 80px;
  background-image: linear-gradient(to bottom right, #00c6ff, #0072ff);


}


.navigimi {
  display: flex;
  justify-content: space-between;
  flex-direction: row;
  align-items: center;
}


.navigimi ul {
  display: flex;
  flex-direction: row;
  list-style: none;
  align-content: center;
  align-items: center;
}

.navigimi ul>li {
  padding: 10px;
}

.navigimi a {
  font-size: 1.2em;
  font-family: 'Campton', sans-serif;
  text-decoration: none;
  color: white;
}


.regj {
  background-color: white;
  color: #1C9FA7;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-weight: bold;
  cursor: pointer;
}
 </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <title>ADMIN DASHBOARD</title>

  
    
</head>
<body>
 
    <header class="header" >
        <div class="navigimi">
        <div class="nav-start">
       
    
            <ul>

               <li>  <img  style="width: 70px; height: 60px;" src="logo-bardh.png" alt=""></a> </li>
               <li>   <b>ADMIN DASHBOARD</b></a> </li> 
          
               
            
             </ul>


        </div>
        
        
        <div class="nav-end">
           <ul>
        <li> <a href="logout.php" > <button class="regj"> SIGN OUT</button></a> </li>
        </ul>
        </div>
        </div>

    </header>
    <?php if(isset($_SESSION['message'])) {  ?>
    <div class="info-msg">
  <i class="fa fa-info-circle"></i>
   <?= $_SESSION['message']; ?>
</div>
<?php
    unset($_SESSION['message']);
    }
    ?>
 

    <div class=boxat>
 
    <a href="../CRUDSOOP/indexMjeku.php" target=”_blank”><button class="button">CRUD MJEKU</button></a>
    <a href="../CRUDSOOP/indexSherbimet.php" target=”_blank”> <button class="button">CRUD Sherbimin</button>
    <a href="../CRUDSOOP/indexUsers.php" target=”_blank”>  <button class="button">CRUD Userat</button>
    <a href="../CRUDSOOP/mesazhetDashboard.php" target=”_blank”><button class="button">Mesazhet nga Kontakti</button>
    <a href="../CRUDSOOP/terminiDashboard.php" target=”_blank”> <button class="button">Terminet e caktuara</button>


    </div>
</html>
<?php

session_start();
// include ('middleware/adminMiddleware.php');


include('./CRUDSOOP/MjekuFront.php');


include ('./database/dbconnection.php');

$select_query = "SELECT * FROM `mjeku` ORDER BY titulli";
$result_query = mysqli_query($conn, $select_query); 

$desiredCategoryId ='';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">

    <link rel="stylesheet" href="lidhja_me_css.css">

    <title>Stafi ynë</title>
</head>

<body>


    <header class="header">
        <div class="navigimi">
            <div class="nav-start">


                <ul>

                    <li> <a href="index.php"><img style="width: 70px; height: 60px;" src="images/logo-bardh.png" alt=""></a>
                    </li>
                    <li> <a href="index.php">Grieta</a> </li>
                    <li> <a href="sherbimet.php" target=”_blank”>Shërbimet</a> </li>
                    <li> <a href="Stafiyne.php" target="_blank">Stafi</a></li>
                    <li> <a href="termini.php" target="_blank">Termini</a></li>
                    <li> <a href="about-us.php" target=”_blank”>Rreth nesh</a></li>
                    <li> <a href="book-an-appointment.php" target=”_blank”>Kontakti</a></li>




                </ul>


            </div>
            <?php 
            if(isset($_SESSION['auth'])) 
            {   
        ?>

            <ul>
                <li> <a href="logout.php"> <button class="regj"> DIL</button></a> </li>
            </ul>

            <?php 
            }
            else {
                ?>

            <div class="nav-end">
                <ul>
                    <li> <a href="login.php" target=”_blank”> <button class="regj"> Kyqu</button></a> </li>
                    <li> <a href="register.php" target=”_blank”> <button class="regj"> Regjistrohu</button></a> </li>
                </ul>
            </div>
            <?php 
            }
            ?>


        </div>

    </header>
    <section>


        <div class="services" style="background-color: #f2f2f2;">
            <div class="Teksti">
                <p><span>STAFI</span> YNË</p>
            </div>


            <div class="rubrikat">
                <!-- <div class="card1">
                    <div class="image1"> <img src="DOKTORI1.png" alt=""></div>
                     <div class="content2">
                        
                       <a href="#">
                         <span class="title1">
                           Dr. John Doe
                         </span>
                       </a>
                   
                       <p class="desc">
                        7 vjet eksperiencë pune.
                       </p>
                   
                       <a class="action" href="#">
                         KARDIOLOG
                        
                       </a>
      
                     </div>
                   </div> -->

                <div class="card1">
                    <?php
        while ($row = mysqli_fetch_assoc($result_query)) {
          $mjekuObj = new Mjeku($row);
            
            $mjekuObj->generateProductCard($desiredCategoryId); 
        }
        ?>
                </div>


                <!-- <div class="card1">
                    <div class="image1"> <img src="DOKTORI3.png" alt=""></div>
                     <div class="content2">
                        
                       <a href="#">
                         <span class="title1">
                           Dr. Maria Joshua
                         </span>
                       </a>
                   
                       <p class="desc">
                        4 vjet eksperiencë pune.
                       </p>
                   
                       <a class="action" href="#">
                         INFERMIERE
                        
                       </a>
                     </div>
                   </div>

                   <div class="card1">
                    <div class="image1"> <img src="DOKTORI4.png" alt=""></div>
                     <div class="content2">
                        
                       <a href="#">
                         <span class="title1">
                           Dr. Will Bank
                         </span>
                       </a>
                   
                       <p class="desc">
                        4 vjet eksperiencë pune.
                       </p>
                   
                       <a class="action" href="#">
                         OFTAMOLOG
                        
                       </a>
                     </div>
                   </div>

                   <div class="card1">
                    <div class="image1"> <img src="DOKTORI6.png" alt=""></div>
                     <div class="content2">
                        
                       <a href="#">
                         <span class="title1">
                           Dr. Aysha Sess
                         </span>
                       </a>
                   
                       <p class="desc">
                        2 vjet eksperiencë pune.
                       </p>
                   
                       <a class="action" href="#">
                         ORL
                        
                       </a>
                     </div>
                   </div>

                   <div class="card1">
                    <div class="image1"> <img src="DOKTORI5.png" alt=""></div>
                     <div class="content2">
                        
                       <a href="#">
                         <span class="title1">
                            Dr. Kevin Bystron
                         </span>
                       </a>
                   
                       <p class="desc">
                        3 vjet eksperiencë pune.
                       </p>
                   
                       <a class="action" href="#">
                           
                           NDIHMA E PARË
                       </a>
                     </div>
                   </div>

                   <div class="card1">
                    <div class="image1"> <img src="DOKTORI7.png" alt=""></div>
                     <div class="content2">
                        
                       <a href="#">
                         <span class="title1">
                            Dr. Tristene Ling
                         </span>
                       </a>
                   
                       <p class="desc">
                        4 vjet eksperiencë pune.
                       </p>
                   
                       <a class="action" href="#">
                         INFERMIERE
                        
                       </a>
                     </div>
                   </div>

                   <div class="card1">
                    <div class="image1"> <img src="DOKTORI8.png" alt=""></div>
                     <div class="content2">
                        
                       <a href="#">
                         <span class="title1">
                            Dr. Alan Floriano
                         </span>
                       </a>
                   
                       <p class="desc">
                        8 vjet eksperiencë pune.
                       </p>
                   
                       <a class="action" href="#">
                         STOMATOLOG
                        
                       </a>
                     </div>
                   </div> -->

                <!-- <div class="card1">
                    <div class="image1"> <img src="DOKTORI9.png" alt=""></div>
                     <div class="content2">
                        
                       <a href="#">
                         <span class="title1">
                            Dr. Scott Baity
                         </span>
                       </a>
                   
                       <p class="desc">
                        1 vjet eksperiencë pune.
                       </p>
                   
                       <a class="action" href="#">
                         KUJDES INTENZIV
                        
                       </a>
                     </div>
                   </div> -->







            </div>

        </div>

    </section>


    <section class="klasaefooterit">
        <div class="main999">
            <div class="d1">
                <div class="g">
                    <div style="display: flex; align-items: center; margin-top: -3px;">
                        <img src="images/logo-color.png" style="width: 40px;" alt="+logo">
                        <h1 style="color: #389c84; padding-left: 7px;">Grieta Hospital</h1>
                    </div>
                    <p style="margin-top: 2px;">
                        Grieta është një platformë inovative shëndetësore
                        që sjell një eksperiencë të re dhe të përmirësuar për pacientët.
                    </p>
                </div>
            </div>
            <div class="d1">
                <div class="g2" style="margin-left: 80px;">
                    <h1 style="color: #389c84; ">Menu</h1>
                    <div class="okok1">
                        <p class="okok">Grieta</p>
                        <p class="okok">Sherbimet</p>
                        <p class="okok">Stafi</p>
                        <p class="okok">Termini</p>
                        <p class="okok">Rreth nesh</p>
                        <p class="okok">Kontakti</p>
                    </div>
                </div>
            </div>
            <div class="d1">
                <div class="g3">
                    <h1 style="color:#389c84;">Sherbimet</h1>
                    <p class="okok2">Kujdesi Intenziv</p>
                    <p class="okok2">Ndihma e parë</p>
                    <p class="okok2">Medikamente</p>
                    <p class="okok2">Konsulta Psikologjike</p>
                    <p class="okok2">Stomatologji</p>
                    <p class="okok2">Oftamologji</p>
                    <p class="okok2">ORL</p>
                </div>
            </div>
            <div class="d1">
                <div class="g4">
                    <h1 style="padding-left: 20px;color:#389c84;">Get Into Touch</h1>
                    <div>
                        <form>
                            <input type="email" id="eemaiInputt" required placeholder="Email Address"
                                style="display: flex; text-decoration: none; color: black; width: 260px; height: 35px; font-size: 1.2em; font-family:'Times New Roman', Times, serif;   padding-top:8px ;margin-bottom: 20px; margin-top: 10px;  padding-left: 16px; border-radius: 12px;background-color: #f8f4f4; "><label
                                for="error-email" id="errorInputEmaili" style="padding-left: 5px;"></label>
                            <input type="submit" required onclick="validimiFOOTER()" value="Subscribe now"
                                style="display: flex; text-decoration: none;color: black;width: 260px; font-size: 1.2em; font-family:'Times New Roman', Times, serif; height: 35px;padding-top:8px;border-radius:12px;  padding-left: 16px; background-color:rgb(0, 128, 128);">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <hr>
        <br>
        <br>
        <p class="Copyright" style="padding-left: 550px; margin-top: 2px; padding-bottom: 10px; margin-bottom: 10px;">
            Copyright © 2023 Get Appointment All Right Reserved</p>



    </section>

    <script>
    let EemailREGEX = /\w[a-z || 0-9 || A-Z]+@+\w[a-z]{3,10}[._-]{1}\w{3}/;



    function validimiFOOTER() {
        let iiinputEmail = document.getElementById('eemaiInputt');
        let emAilError = document.getElementById('errorInputEmaili');
        emAilError.innerText = '';

        if (!EemailREGEX.test(iiinputEmail.value)) {
            emAilError.style.color = '#FF0000';
            emAilError.innerText = 'Wrong Email';
            alert("Ju Lutemi Plotesoni Emailen Sic Duhet !!");
            return;
        } else if (EemailREGEX.test(iiinputEmail.value)) {
            emAilError.style.color = '#58FF00';
            emAilError.innerText = 'Successfully Email';
            alert("Ju Keni Plotesuar Emailen Sic Duhet !!");
            return;
        }

    }
    </script>







</body>

</html>
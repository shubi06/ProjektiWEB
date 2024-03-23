<?php

session_start();
// include ('middleware/adminMiddleware.php');


include('./CRUDSOOP/SherbimetFront.php');


include ('./database/dbconnection.php');

$select_query = "SELECT * FROM `sherbimet` ORDER BY id";
$result_query = mysqli_query($conn, $select_query); 

$desiredCategoryId='18';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="lidhja_me_css.css">

    <title>Sherbimet</title>
</head>

<body>


    <header class="header">
        <div class="navigimi">
            <div class="nav-start">


                <ul>

                    <li> <a href="index.php"><img style="width: 70px; height: 60px;" src="1.png" alt=""></a>
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


        <div class="services">
            <div class="Teksti">
                <p ><span>SHËRBIMET</span> TONA</p>
            </div>

            <div class="rubrikat">


                <div class="card">
                    <!-- <img style="height: 130px; width: 130px;" src="firstaid.png" alt="">
                    <div class="card__content">
                      <p class="card__title">Kujdes Intenziv</p>
                      <p class="card__description">Këto shërbime janë të ofruara nga një ekip mjekësor i specializuar dhe të kualifikuar,
                        i cili është në dispozicion 24 orë,7 ditë në javë. Pacientët që kanë nevojë për kujdes intensiv kanë mundësinë të monitorohen dhe trajtohen nga distancë përmes teknologjive të avancuara.</p>
                    </div> -->
                    <?php
        while ($row = mysqli_fetch_assoc($result_query)) {
          $sherbimetObj = new Sherbimet($row);
            
            $sherbimetObj->generateProductCard($desiredCategoryId); 
        }
        ?>



                </div>


                <!-- <div class="card">
                        <img style="height: 130px; width: 130px;" src="ambulance.png" alt="">
                        <div class="card__content">
                          <p class="card__title">Ndihma e parë</p>
                          <p class="card__description"> është një shërbim kritik që siguron reagim të menjëhershëm për emergjenca shëndetësore. Përmes këtij shërbimi, pacientët kanë mundësinë të kërkojnë dhe të marrin ndihmë urgjente me një thirrje të shpejtë ose përmes platformes të dedikuar online.  </p>
                        </div>
                      </div>
                   
           
                <div class="card">
                    <img style="height: 130px; width: 130px;" src="barnat.png" alt="">
                    <div class="card__content">
                      <p class="card__title">Medikamente</p>
                      <p class="card__description">  Përmes kësaj platforme, pacientët mund të shfletojnë informacione rreth medikamenteve, dozave të rekomanduara, dhe të marrin këshillat e nevojshme nga ekipi mjekësor në lidhje me trajtimin e tyre.  
                        </p>
                    </div>
                  </div>
    
            
             
                
                <div class="card">
                    <img style="height: 130px; width: 130px;" src="truri.png" alt="">
                    <div class="card__content">
                      <p class="card__title">Konsulta Psikologjike</p>
                      <p class="card__description">Grieta përcjell një angazhim të fortë ndaj mirëqenies emocionale të pacientëve përmes ofrimit të këshillave psikologjike nga një ekip i kualifikuar i psikologëve.</p>
                    </div>
                  </div>

                  <div class="card">
                    <img style="height: 130px; width: 130px;" src="dhembi.png" alt="">
                    <div class="card__content">
                      <p class="card__title">Stomatologji</p>
                      <p class="card__description">Në spitalin tonë, ofrojmë shërbime stomatologjike të avancuara për të mbrojtur shëndetin oral të pacientëve tanë. Stomatologët tanë të kualifikuar dhe të përvojuar janë të përkushtuar për të siguruar trajtimin më të mirë dhe më të personalizuar për çdo pacient.</p>
                    </div>
                  </div>

                  <div class="card">
                    <img style="height: 130px; width: 130px;" src="SYRI.png" alt="">
                    <div class="card__content">
                      <p class="card__title">Oftalmologji</p>
                      <p class="card__description">Oftalmologët tanë të kualifikuar janë të përkushtuar për të mbrojtur dhe përmirësuar shikimin e pacientëve përmes diagnostikës së saktë, trajtimit të specializuar dhe këshillave për mirëmbajtjen e përgjithshme të shëndetit okular.
                    </p>
                    </div>
                  </div>

                  <div class="card">
                    <img style="height: 130px; width: 130px;" src="hunda.png" alt="">
                    <div class="card__content">
                      <p class="card__title">ORL</p>
                      <p class="card__description">Në spitalin tonë, ofrojmë shërbime të avancuara ORL për të adresuar çdo çështje shëndetësore që lidhet me këto organe.
                        Otorinolaringologët tanë të specializuar janë të përkushtuar për të siguruar trajtimin më të mirë dhe më të personalizuar për pacientët tanë. </p>
                    </div>
                  </div>
             
                  <div class="card">
                    
                    <img style="height: 130px; width: 130px;" src="zemra.png" alt="">
                    <div class="card__content">
                      <p class="card__title">Kardiologji</p>
                      <p class="card__description">Në spitalin tonë, ofrojmë shërbime të specializuara kardiologjike për të mbrojtur dhe përmirësuar shëndetin kardiovaskular të pacientëve tanë. ërfshirë në këto shërbime janë testimet e zemrës, monitorimi i tensionit të gjakut, dhe interpretimi i rezultateve të analizave laboratorike.</p>
                    </div>
                
                  </div>
                 -->



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
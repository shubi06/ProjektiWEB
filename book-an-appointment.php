<?php  

session_start();
include ('database/dbconnection.php');


if(isset($_POST['submit'])){
    $emri=$_POST['emri'];
    $mbiemri=$_POST['mbiemri'];
    $numri=$_POST['numri'];
    $email=$_POST['email'];
    $mesazhi=$_POST['mesazhi'];
   
    
   

   

    $query="INSERT INTO kontakti (emri,mbiemri,numri,email,mesazhi) VALUES (?,?,?,?,?)";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("sssss",$emri,$mbiemri,$numri,$email,$mesazhi);
    $stmt->execute();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakti</title>

    <link rel="stylesheet" href="lidhja_me_css.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <section class="1002"
        style="background-color:#f2f2f2; padding-bottom: 100px; margin-bottom: -9px; width: 1524px; margin-left: -4px;">

        <header class="header">
            <div class="navigimi">
                <div class="nav-start">


                    <ul>

                        <li> <a href="index.php"><img style="width: 70px; height: 60px;" src="1.png"
                                    alt=""></a> </li>
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
                        <li> <a href="register.php" target=”_blank”> <button class="regj"> Regjistrohu</button></a>
                        </li>
                    </ul>
                </div>
                <?php 
            }
            ?>


            </div>

        </header>

        <h1 class="titulli" style="padding-left: 668px; font-size: 50px;margin-top: 120px; color: #008080;">Kontakti
        </h1>

        <div class="kryesori111">
            <div class="boxi111">
                <div style="padding-top: 20px;">
                    <div class="mrenda-phone1" style="padding-top: 40px;">
                        <a href="about-us.html" target="_blank">
                            <img src="images/tel.png" style="width: 140px; height:135px; margin-left: 90px; margin-top: -15px;"
                                alt="tel-logo">
                        </a>
                        <div style="margin-left: 25px;">
                            <a href="about-us.html" target="_blank" style="color: black;">
                                <p style="margin-left: 40px; width: 100px; margin-left: 110px; margin-top: 2px;">
                                    <strong>Phone</strong></p>
                            </a>
                            <div clas="tt" style="padding-left: 105px; margin-top: 2px; ">
                                <ul>
                                    <li><strong>0111111</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="boxi111">
                <div style="padding-top: 20px;">
                    <div class="mrenda-message1" style="padding-top: 40px;">
                        <a href="book-an-appointment.html" target="_blank" style="color: black;">
                            <img src="images/email.png" style="width: 140px;
    height: 135px;
    margin-left: 90px;
    margin-top: -15px" alt="tel-logo">
                            <p style="padding-left: 125px; margin-top: 5px;"><strong>Message</strong></p>
                        </a>
                        <div clas="tt" style="padding-left:50px;">
                            <p><strong>Email:im64863@ubt-uni.net</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="boxi111">
                <div style="padding-top: 20px;">
                    <div class="mrenda-message1" style="padding-top: 40px;">
                        <a href="iframe.html" target="_blank"><img src="images/loc.png" style="width: 140px;
      height: 135px;
      margin-left: 90px;
      margin-top: -25px" alt="tel-logo"></a>
                        <a href="iframe.html" target="_blank">
                            <p style="padding-left: 124px; margin-top: 5px;  color: black;"><strong>Location</strong>
                            </p>
                        </a>
                        <div clas="tt" style="padding-left: 18px;">
                            <p style="padding-left: 20px;"><strong
                                    style="padding-top: -4px; padding-left: 20px;">Address:Muharrem Ibraimi</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="second">
            <div class="divv2">

                <form action="" method="POST">
                    <input class="inputat" style="background-color:rgb(0, 128, 128);border: none;margin-top: 35px;background: transparent;
      outline: none; margin-left: 35px; font-size: 1.2em; font-family:'Times New Roman', Times, serif;" type="text"
                        id="emri" name="emri" placeholder="Shkruani emrin" required><label style="margin-right: 10px;"
                        id="nameerror2"></label>
            </div>
            <div class="divv2">
                <input class="inputat" id="email" type="text" name="mbiemri" placeholder="Shkruani mbiemrin" style=" color: black;
      background-color: silver;  background-color:#008080;  background-color:rgb(0, 128, 128);
    border: none;
    margin-top: 35px;
    background: transparent;
    outline: none; font-size: 1.2em; font-family:'Times New Roman', Times, serif;" required><label
                    id="emailerror2"></label>
            </div>
            <div class="divv2">
                <input class="inputat" type="text" id="phone" name="numri" placeholder="Shkruani numrin e telefonit"
                    style="width: 200px;  background-color:rgb(0, 128, 128);
      border: none;
      margin-top: 35px;
      background: transparent;
      outline: none; font-size: 1.2em; font-family:'Times New Roman', Times, serif;" required><label id="Numbererror2"
                    style="margin-left: 5px;"></label>
            </div>
            <div class="divv2">
                <input class="inputat" style="background-color:rgb(0, 128, 128);
      border: none;
      margin-top: 35px;
      background: transparent;
      outline: none; font-size: 1.2em; font-family:'Times New Roman', Times, serif;" type="email" id="service"
                    name="email" placeholder="Shkruani emailen" required><label id="Serviceerror2"></label>
            </div>

        </div>
        <div class="nder" style="padding-left: 20px;">
            <input class="input-ne-veti" id="input-1" type="textarea" name="mesazhi" placeholder="Shkruani mesazhin"
                style=" border: none; outline: none; background: transparent; margin-left: 115px; font-size: 1.2em; font-family:'Times New Roman', Times, serif;"
                required><label id="Emaileerror3"></label>
        </div>
        <input class="input-ne-veti" id="input-2" type="submit" onclick="validimiKontakti()" name="submit"
            value="Submit"
            style="display: flex; text-decoration: none; color: black; width: 200px; margin: 20px; height: 30px; padding-top: 2px; border-radius: 12px; background-color: rgb(0, 128, 128); padding-left: 70px; margin-left: 670px; font-size: 1.2em; font-family:'Times New Roman', Times, serif;">
        </form>

    </section>

    <script>
    function validimiKontakti() {

        let nameRegex = /^[A-z]{1}\w[a-z]{2,10}/;
        let EmailRegex = /\w[a-z || 0-9 || A-Z]+@+\w[a-z]{3,10}[._-]{1}\w{3}/;
        let PhoneRegex = /[0-9]{3}[-+]{1}[0-9]{3}[-+]{1}[0-9]{3}[-+]{1}[0-9]{3}/;
        let ServiceRegex = /[a-z || A-Z]{4,25}/;

        let emriInput = document.getElementById('emri');
        let emailInput = document.getElementById('email');
        let phoneInput = document.getElementById('phone');
        let serviceInput = document.getElementById('service');
        let emailInputAgain = document.getElementById('input-1');

        let nameERRORI = document.getElementById('nameerror2');
        let Emailierrori = document.getElementById('emailerror2');
        let Numbererror2 = document.getElementById('Numbererror2');
        let Serviceerror2 = document.getElementById('Serviceerror2');
        let Emaileerror3 = document.getElementById('Emaileerror3');

        nameERRORI.innerText = '';
        Emailierrori.innerText = '';
        Numbererror2.innerText = '';
        Serviceerror2.innerText = '';
        Emaileerror3.innerText = '';


        if (nameRegex.test(emriInput.value)) {
            nameERRORI.style.color = '#58FF00';
            nameERRORI.innerText = ' Correct Name';
            if (!EmailRegex.test(emailInput.value) && !PhoneRegex.test(phoneInput.value) && !ServiceRegex.test(
                    serviceInput.value) && !EmailRegex.test(emailInputAgain.value)) {
                Emailierrori.style.color = 'red';
                Numbererror2.style.color = 'red';
                Serviceerror2.style.color = 'red';
                Emaileerror3.style.color = 'red';
                Emailierrori.innerText = 'Wrong Email';
                Numbererror2.innerText = 'Wrong Number';
                Serviceerror2.innerText = 'Wrong Sevice';
                Emaileerror3.innerText = 'Wrong Email';
                alert("Ju lutemi shkruani ashtu sic duhet te dhenat !!");
                return false;
            }
        }

        if (EmailRegex.test(emailInput.value) && EmailRegex.test(emailInputAgain.value)) {
            Emailierrori.style.color = '#58FF00';
            Emailierrori.innerText = 'Correct Email';
            Emaileerror3.style.color = '#58FF00';
            Emaileerror3.innerText = 'Correct Email';
            if (!nameRegex.test(emriInput.value) && !PhoneRegex.test(phoneInput.value) && !ServiceRegex.test(
                    serviceInput.value)) {
                nameERRORI.style.color = 'red';
                nameERRORI.innerText = ' Wrong Name';
                Numbererror2.style.color = 'red';
                Serviceerror2.style.color = 'red';
                Numbererror2.innerText = 'Wrong Number';
                Serviceerror2.innerText = 'Wrong Sevice';
                alert("Ju lutemi shkruani ashtu sic duhet te dhenat !!");
                return false;
            }
        }

        if (PhoneRegex.test(phoneInput.value)) {
            Numbererror2.style.color = '#58FF00';
            Numbererror2.innerText = 'Correct Number';
            if (!nameRegex.test(emriInput.value) && !EmailRegex.test(emailInput.value) && !EmailRegex.test(
                    emailInputAgain.value) && !ServiceRegex.test(serviceInput.value)) {
                nameERRORI.style.color = 'red';
                nameERRORI.innerText = ' Wrong Name';
                Serviceerror2.style.color = 'red';
                Serviceerror2.innerText = 'Incorrect Sevice';
                Emailierrori.style.color = 'red';
                Emaileerror3.style.color = 'red';
                Emailierrori.innerText = 'Incorrect Email';
                Emaileerror3.innerText = 'Incorrect Email';
                alert("Ju lutemi shkruani ashtu sic duhet te dhenat !!");
                return false;
            }
        }

        if (ServiceRegex.test(serviceInput.value)) {
            Serviceerror2.style.color = '#58FF00';
            Serviceerror2.innerText = 'Correct Service';
            if (!nameRegex.test(emriInput.value) && !EmailRegex.test(emailInput.value) && !EmailRegex.test(
                    emailInputAgain.value) && !PhoneRegex.test(phoneInput.value)) {
                nameERRORI.style.color = 'red';
                nameERRORI.innerText = ' Wrong Name';
                Numbererror2.style.color = 'red';
                Numbererror2.innerText = 'Incorrect Number';
                Emailierrori.style.color = 'red';
                Emaileerror3.style.color = 'red';
                Emailierrori.innerText = 'Incorrect Email';
                Emaileerror3.innerText = 'Incorrect Email';
                alert("Ju lutemi shkruani ashtu sic duhet te dhenat !!");
                return false;
            }
        }


        if (nameRegex.test(emriInput.value) && EmailRegex.test(emailInput.value) && EmailRegex.test(emailInputAgain
                .value) && PhoneRegex.test(phoneInput.value) && ServiceRegex.test(serviceInput.value)) {
            nameERRORI.style.color = '#58FF00';
            nameERRORI.innerText = ' Correct Name';
            Numbererror2.style.color = '#58FF00';
            Numbererror2.innerText = 'Correct Number';
            Emailierrori.style.color = '#58FF00';
            Emaileerror3.style.color = '#58FF00';
            Emailierrori.innerText = 'Correct Email';
            Emaileerror3.innerText = 'Correct Email';
            Serviceerror2.style.color = '#58FF00';
            Serviceerror2.innerText = 'Correct Service';
            alert("Ju keni shkruajtur ashtu sic duhet te dhenat !!");
            return true;
        }

        if (!nameRegex.test(emriInput.value) && !EmailRegex.test(emailInput.value) && !EmailRegex.test(emailInputAgain
                .value) && !PhoneRegex.test(phoneInput.value) && !ServiceRegex.test(serviceInput.value)) {
            nameERRORI.style.color = 'red';
            nameERRORI.innerText = ' Incorrect Name';
            Numbererror2.style.color = 'red';
            Numbererror2.innerText = 'Incorrect Number';
            Emailierrori.style.color = 'red';
            Emaileerror3.style.color = 'red';
            Emailierrori.innerText = 'Incorrect Email';
            Emaileerror3.innerText = 'Incorrect Email';
            Serviceerror2.style.color = 'red';
            Serviceerror2.innerText = 'Incorrect Service';
            alert("Ju lutemi shkruani ashtu sic duhet te dhenat !!");
            return false;
        }
    }
    </script>

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
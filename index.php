<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="lidhja_me_cssSH.css">




    <title>Grieta Hospital</title>



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



    <main>
        <div class="content">
            <div class="textbox">

                <div class="pjesa1">
                    <h2>Spitali më i vlerësuar <br> <span> në Europë. </span>
                        <div class="paragrafi">
                            <p>Grieta është një platformë inovative shëndetësore që sjell një eksperiencë të re dhe
                                të përmirësuar për pacientët. </p>
                        </div>
                        <a style="text-decoration: none;" href="Termini.php" target="_blank"> <button class="btn"> CAKTO
                                TERMININ </button>
                    </h2> </a>
                </div>

            </div>
        </div>

    </main>




    <section1>

        <div class="services">
            <div class="Teksti">
                <p><span>SHËRBIMET</span> TONA</p>
            </div>

            <div class="rubrikat">

                <div class="card">
                    <img style="height: 130px; width: 130px;" src="images/firstaid.png" alt="">
                    <div class="card__content">
                        <p class="card__title">Kujdes Intenziv</p>
                        <p class="card__description">Këto shërbime janë të ofruara nga një ekip mjekësor i specializuar
                            dhe të kualifikuar,
                            i cili është në dispozicion 24 orë,7 ditë në javë. Pacientët që kanë nevojë për kujdes
                            intensiv kanë mundësinë të monitorohen dhe trajtohen nga distancë përmes teknologjive të
                            avancuara.</p>
                    </div>
                </div>


                <div class="card">
                    <img style="height: 130px; width: 130px;" src="images/ambulance.png" alt="">
                    <div class="card__content">
                        <p class="card__title">Ndihma e parë</p>
                        <p class="card__description"> është një shërbim kritik që siguron reagim të menjëhershëm për
                            emergjenca shëndetësore. Përmes këtij shërbimi, pacientët kanë mundësinë të kërkojnë dhe të
                            marrin ndihmë urgjente me një thirrje të shpejtë ose përmes platformes të dedikuar online.
                        </p>
                    </div>
                </div>


                <div class="card">
                    <img style="height: 130px; width: 130px;" src="images/barnat.png" alt="">
                    <div class="card__content">
                        <p class="card__title">Medikamente</p>
                        <p class="card__description"> Përmes kësaj platforme, pacientët mund të shfletojnë informacione
                            rreth medikamenteve, dozave të rekomanduara, dhe të marrin këshillat e nevojshme nga ekipi
                            mjekësor në lidhje me trajtimin e tyre.
                        </p>
                    </div>
                </div>




                <div class="card">
                    <img style="height: 130px; width: 130px;" src="images/truri.png" alt="">
                    <div class="card__content">
                        <p class="card__title">Konsulta Psikologjike</p>
                        <p class="card__description">Grieta përcjell një angazhim të fortë ndaj mirëqenies emocionale të
                            pacientëve përmes ofrimit të këshillave psikologjike nga një ekip i kualifikuar i
                            psikologëve.</p>
                    </div>
                </div>


            </div>
        </div>



    </section1>

    <section2>

        <div class="services1">
            <div class="fototesliderit">
                <img id="slideshow" />

            </div>




        </div>

    </section2>




    <!-- ILIRI -->
    <!-- ILIRI -->
    <!-- ILIRI -->
    <!-- ILIRI -->





    <section class="medical-l">

        <div class="Teksti">
            <p><span>KLIENTËT</span> TANË</p>
        </div>

        <div class="thonjezat1">
            <img src="images/th1.png" style="height: 200px; width: 200px;" alt="">
        </div>

        <div class="Klienti1">
            <div class="boxxxi">
                <div class="fotoKl1"><img src="images/klient2.png" style="height: 200px; width: 200px;" alt=""></div>
                <div class="emridhembiemri">
                    <p>Sam Mohins</p>
                </div>
                <div class="pershkrimi">
                    <p>Do të doja të shprehë falënderimin tim për kujdesin dhe shërbimet
                        e ofruara nga stafi juaj gjatë vizitës sime.
                        Fillimisht, më bëri përshtypje pozitivja atmosfera e pastër
                        dhe tërësisht të pajisur me pajisje të fundit mjekësore.
                        Përdorimi i teknologjisë së fundit në mjekësi është një avantazh i madh
                        dhe ndihmoi në një diagnozë dhe trajtim më të saktë.


                    </p>
                </div>

            </div>
        </div>

        <div class="Klienti2">
            <div class="boxxxi">
                <div class="fotoKl2"><img src="images/klient3.png" style="height: 200px; width: 200px;" alt=""></div>
                <div class="emridhembiemri">
                    <p>Miss Allna</p>
                </div>
                <div class="pershkrimi">
                    <p>Do të doja të shprehë falënderimin tim për kujdesin dhe shërbimet
                        e ofruara nga stafi juaj gjatë vizitës sime.
                        Fillimisht, më bëri përshtypje pozitivja atmosfera e pastër
                        dhe tërësisht të pajisur me pajisje të fundit mjekësore.
                        Përdorimi i teknologjisë së fundit në mjekësi është një avantazh i madh
                        dhe ndihmoi në një diagnozë dhe trajtim më të saktë.


                    </p>
                </div>

            </div>
        </div>
        <div class="thonjezat2">
            <img src="images/th2.png" style="height: 200px; width: 200px;" alt="">
        </div>




        <div class="Teksti">
            <p><span>RRETH</span> NESH</p>
        </div>
        <div></div>

        <div class="container999">
            <div class="box999" id="id999">
                <div class="kryesori-inside-1">
                    <div class="mbrenda-1shit" id="inside-1"><img clas="imazhi1"
                            style=" width: 300px; border-radius: 16px;" src="images/foto7.png" alt="foto  e spitalit">
                    </div>
                    <div class="mbrenda-1shit" id="inside-2"><img clas="imazhi2"
                            style=" width: 300px; border-radius: 16px;" src="images/foto5.png" alt="foto  e spitalit">
                    </div>
                    <div class="mbrenda-1shit" id="inside-3"><img clas="imazhi3"
                            style=" width: 300px; border-radius: 16px;" src="images/foto6.png" alt="foto  e spitalit">
                    </div>
                    <div class="mbrenda-1shit" id="inside-4"><img clas="imazhi3"
                            style=" width: 300px; border-radius: 16px;" src="images/foto8.png" alt="foto  e spitalit">
                    </div>
                </div>
            </div>
            <div class="box999" id="id2">
                <h1 class="provide" style="color:#1C9FA7; font-size: 30px; margin-top: 80px;">SPITALI GRIETA</h1>
                <div class="provide" id="c2">
                    <br>

                    <p class="animate__animated animate__bounce animate__repeat-2" id="tektsti999"
                        style="margin-top: 30px;">Grieta është një platformë inovative shëndetësore
                        që sjell një eksperiencë të re dhe të përmirësuar për pacientët. .</p>
                </div>

                <div class="provide" id="c3" style="font-weight: 400px;">
                    <ul>
                        <li>&#10132; Top Mjekët Specialis</li>
                    </ul>
                    <ul>
                        <li>&#10132;Shëndeti juaj, prioriteti ynë</li>
                    </ul>
                    <ul>
                        <li>&#10132;Trajtim me kualitetin më të mirë në rajon</li>
                    </ul>
                    <ul>
                        <li>&#10132;Shërbime mjekësore online</li>
                    </ul>
                    <ul>
                        <li>&#10132; 24/7 Pranim i thirrjeve</li>
                    </ul>

                </div>

            </div>
        </div>


        <br>

        <section class="klasaefooterit">
            <div class="main999">
                <div class="d1">
                    <div class="g">
                        <div style="display: flex; align-items: center; margin-top: -3px;">
                            <img src="images/logo-color.png" style="width: 40px;" alt="+logo">
                            <h1 style="color: #1C9FA7; padding-left: 7px;">Grieta Hospital</h1>
                        </div>
                        <p style="margin-top: 2px;">
                            Grieta është një platformë inovative shëndetësore
                            që sjell një eksperiencë të re dhe të përmirësuar për pacientët.
                        </p>
                    </div>
                </div>
                <div class="d1">
                    <div class="g2" style="margin-left: 80px;">
                        <h1 style="color: #1C9FA7; ">Menu</h1>
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
                        <h1 style="color:#1C9FA7;">Sherbimet</h1>
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
                                    style="display: flex; text-decoration: none; color: black; width: 260px; height: 35px; font-size: 1.2em; font-family:'Times New Roman', Times, serif;   padding-top:8px ;margin-bottom: 20px; margin-top: 10px;  padding-left: 16px; border-radius: 12px;background-color: #1C9FA7; "><label
                                    for="error-email" id="errorInputEmaili" style="padding-left: 5px;"></label>
                                <input type="submit" required onclick="validimiFOOTER()" value="Subscribe now"
                                    style="display: flex; text-decoration: none;color: black;width: 260px; font-size: 1.2em; font-family:'Times New Roman', Times, serif; height: 35px;padding-top:8px;border-radius:12px;  padding-left: 16px; background-color:#1C9FA7;">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <hr>

            <p class="Copyright"
                style="padding-left: 550px; margin-top: 2px; padding-bottom: 10px; margin-bottom: 10px;">Copyright ©
                2023 Get Appointment All Right Reserved</p>



        </section>




    </section>


    <script>
    let i = 0;
    let imgArray = ['images/doktori1.jpg', 'images/doktori2.jpg', 'images/doktori3.jpg', 'images/doktori4.jpg'];

    function changeImg() {
        document.getElementById('slideshow').src = imgArray[i];

        if (i < imgArray.length - 1) {
            i++;
        } else {
            i = 0;
        }
        setTimeout("changeImg()", 3000);
    }
    document.addEventListener(onload, changeImg());


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
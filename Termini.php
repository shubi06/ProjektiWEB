<?php  

session_start();
include ('database/dbconnection.php');


if(isset($_POST['butonicakto'])){
    $emri=$_POST['emri'];
    $mbiemri=$_POST['mbiemri'];
    $nr=$_POST['nr'];
    $sherbimi=$_POST['sherbimi'];
    $ora=$_POST['ora'];
    $data=$_POST['data'];
    
   

   

    $query="INSERT INTO terminet (emri,mbiemri,nr,sherbimi,ora,data) VALUES (?,?,?,?,?,?)";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("ssssss",$emri,$mbiemri,$nr,$sherbimi,$ora,$data);
    $stmt->execute();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="lidhja_me_css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Termini</title>
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

    <div class="background1">

        <div class="CaktoTerminin">
            <h2>CAKTO TERMININ</h2>
        </div>

        <div class="forma">
            <div class="forma1">
                <img style="height: 130px; width: 130px;" src="images/tel.png" alt="">
                <p>Telefoni</p>
                <p><span>+383 45 594 178</span></p>
            </div>
            <div class="forma1">
                <img style="height: 130px; width: 130px;" src="images/email.png" alt="">
                <p>Email</p>
                <p><span>info@grietahospital.com</span></p>
            </div>
            <div class="forma1">
                <img style="height: 130px; width: 130px;" src="images/loc.png" alt="">
                <p>Lokacioni</p>
                <p><span>Rruga Filan Fisteku, Gjilan</span></p>
            </div>
        </div>



        <form action="" method="POST">

            <div class="inputet">
                <div class="inputet1">
                    <label for="namePaError">Emri</label>
                    <input id="emriInputT" type="text" name="emri">
                    <label id="nameerrorR"></label>
                </div>
                <div class="inputet1">
                    <label for="surnamePaError">Mbiemri</label>
                    <input id="mbiemriINput" type="text" name="mbiemri">
                    <label id="mbiemriErrorR"></label>
                </div>
            </div>


            <div class="inputet3">
                <div class="inputet1">
                    <label for="telephone">Numri i telefonit</label>
                    <input id="telInput" type="tel" value="" name="nr">
                    <label id="NumberErroR2"></label>
                </div>
                <div class="inputet1">
                    <label for="username">Sherbimi</label>

                    <select name="sherbimi" id="sherbimetInput" required>
                        <option value="">Zgjedh Sherbimin !</option>

                        <option value="Kujdesi Intenziv">Kujdesi Intenziv</option>
                        <option value="Ndihma e parë">Ndihma e parë</option>
                        <option value="Medikamente">Medikamente</option>
                        <option value="Konsulta Psikologjike">Konsulta Psikologjike</option>
                        <option value="Stomatologji">Stomatologji</option>
                        <option value="Oftalmologji">Oftalmologji</option>
                        <option value="ORL">ORL</option>
                        <option value="Kardiologji">Kardiologji</option>
                    </select>
                    <label id="sherbimError" for="sherbimi101"></label>
                </div>
            </div>





            <div class="inputet5">
                <div class="inputet1">
                    <label for="username">Ora</label>

                    <input id="timeInput" type="time" name="ora">
                    <label id="erorrOra" for="Erorr"></label>
                </div>
                <div class="inputet1">
                    <label for="username">Data</label>
                    <input id="data" type="date" name="data">
                    <label id="ErrorData" for="Erorr"></label>
                </div>
            </div>
            <div class="butonicakto"> <button type="submit" name="butonicakto"
                    style="    width: 100px; height: 30px; background-color: white; border: none;"
                    onclick="return TERMINIvalidation()" value="Cakto"></div>
        </form>





        <script>
        let NAmmeRegexx = /^[A-Z]\w[a-z]{2,10}/;
        let SUrnameRegexx = /^[A-Z]{1}\w[a-z]{3,16}/;
        let NUmberRegexx = /[0-9]{3}[-+]{1}[0-9]{3}[-+]{1}[0-9]{3}[-+]{1}[0-9]{3}/;
        let SHerbimiRegexx = /^[A-Z]{1,3}\w+[ ]\w{1,30}/;
        let sherbimitjeterRegex = /^[A-Z]{1,3}[a-zA-Z]{1,30}/;


        function TERMINIvalidation() {
            var nAmeiNputi = document.getElementById('emriInputT');
            var SUrnameiNputi = document.getElementById('mbiemriINput');
            var NumberiNputi = document.getElementById('telInput');
            var sHerbimiNputi = document.getElementById('sherbimetInput');

            var orAiNputi = document.getElementById('timeInput');
            var orAiNputiERROR = document.getElementById('erorrOra');
            var DAtaiNputi = document.getElementById('data');

            var nAmeiNputiERROR = document.getElementById('nameerrorR');
            var SUrnameiNputiERROR = document.getElementById('mbiemriErrorR');
            var NumberiNputiERROR = document.getElementById('NumberErroR2');
            var sHerbimiNputiERROR = document.getElementById('sherbimError');
            var DAtaiNputiERROR = document.getElementById('ErrorData');


            nAmeiNputiERROR.innerText = '';
            SUrnameiNputiERROR.innerText = '';
            NumberiNputiERROR.innerText = '';
            sHerbimiNputiERROR.innerText = '';
            orAiNputiERROR.innerText = '';
            DAtaiNputiERROR.innerText = '';

            if (NAmmeRegexx.test(nAmeiNputi.value)) {
                nAmeiNputiERROR.style.color = '#58FF00';
                nAmeiNputiERROR.innerText = 'Correct Name';
                if (SUrnameRegexx.test(SUrnameiNputi.value)) {
                    SUrnameiNputiERROR.style.color = '#58FF00';
                    SUrnameiNputiERROR.innerText = 'Correct Surname';
                }
                if (NUmberRegexx.test(NumberiNputi.value)) {
                    NumberiNputiERROR.style.color = '#58FF00';
                    NumberiNputiERROR.innerText = 'Correct Number';
                }
                if (SHerbimiRegexx.test(sHerbimiNputi.value)) {
                    sHerbimiNputiERROR.style.color = '#58FF00';
                    sHerbimiNputiERROR.innerText = 'Correct Service';
                }

                if (sherbimitjeterRegex.test(sHerbimiNputi.value)) {
                    sHerbimiNputiERROR.style.color = '#58FF00';
                    sHerbimiNputiERROR.innerText = 'Correct Service';
                }


                if (orAiNputi.value !== '') {
                    orAiNputiERROR.style.color = '#58FF00';
                    orAiNputiERROR.innerText = 'Correct Clock';
                }


                if (DAtaiNputi.value !== '') {
                    DAtaiNputiERROR.style.color = '#58FF00';
                    DAtaiNputiERROR.innerText = 'Correct DATE';
                    alert("Emri Mbiemri Numri Telefonit Sherbimi Ora Data jane mire !!");
                    return true;
                }
            }

            if (NAmmeRegexx.test(nAmeiNputi.value)) {
                nAmeiNputiERROR.style.color = '#58FF00';
                nAmeiNputiERROR.innerText = 'Correct Name';
                if (!SUrnameRegexx.test(SUrnameiNputi.value)) {
                    SUrnameiNputiERROR.style.color = 'red';
                    SUrnameiNputiERROR.innerText = 'Wrong Surname';
                }
                if (!NUmberRegexx.test(NumberiNputi.value)) {
                    NumberiNputiERROR.style.color = 'red';
                    NumberiNputiERROR.innerText = 'Wrong Number';
                }
                if (!SHerbimiRegexx.test(sHerbimiNputi.value)) {
                    sHerbimiNputiERROR.style.color = 'red';
                    sHerbimiNputiERROR.innerText = 'Wrong Service';
                }

                if (!sherbimitjeterRegex.test(sHerbimiNputi.value)) {
                    sHerbimiNputiERROR.style.color = 'red';
                    sHerbimiNputiERROR.innerText = 'Wrong Service';

                }

                if (orAiNputi.value == '') {
                    orAiNputiERROR.style.color = 'red';
                    orAiNputiERROR.innerText = 'Wrong Clock';
                }


                if (DAtaiNputi.value == '') {
                    DAtaiNputiERROR.style.color = 'red';
                    DAtaiNputiERROR.innerText = 'Wrong DATE';
                    alert("Ju lutemi rishikoni te dhenat  !!");
                    return false;
                }
            }


            if (SUrnameRegexx.test(SUrnameiNputi.value)) {
                SUrnameiNputiERROR.style.color = '#58FF00';
                SUrnameiNputiERROR.innerText = 'Correct Surname';
                if (!NAmmeRegexx.test(nAmeiNputi.value)) {
                    nAmeiNputiERROR.style.color = 'red';
                    nAmeiNputiERROR.innerText = 'Wrong Name';
                }
                if (!NUmberRegexx.test(NumberiNputi.value)) {
                    NumberiNputiERROR.style.color = 'red';
                    NumberiNputiERROR.innerText = 'Wrong Number';
                }
                if (!SHerbimiRegexx.test(sHerbimiNputi.value)) {
                    sHerbimiNputiERROR.style.color = 'red';
                    sHerbimiNputiERROR.innerText = 'Wrong Service';
                }

                if (!sherbimitjeterRegex.test(sHerbimiNputi.value)) {
                    sHerbimiNputiERROR.style.color = 'red';
                    sHerbimiNputiERROR.innerText = 'Wrong Service';

                }

                if (orAiNputi.value == '') {
                    orAiNputiERROR.style.color = 'red';
                    orAiNputiERROR.innerText = 'Wrong Clock';
                }


                if (DAtaiNputi.value == '') {
                    DAtaiNputiERROR.style.color = 'red';
                    DAtaiNputiERROR.innerText = 'Wrong DATE';
                    alert("Ju lutemi rishikoni te dhenat  !!");
                    return false;
                }
            }



            if (NUmberRegexx.test(NumberiNputi.value)) {
                NumberiNputiERROR.style.color = '#58FF00';
                NumberiNputiERROR.innerText = 'Correct Number';
                if (!NAmmeRegexx.test(nAmeiNputi.value)) {
                    nAmeiNputiERROR.style.color = 'red';
                    nAmeiNputiERROR.innerText = 'Wrong Name';
                }
                if (!SUrnameRegexx.test(SUrnameiNputi.value)) {
                    SUrnameiNputiERROR.style.color = 'red';
                    SUrnameiNputiERROR.innerText = 'Wrong Surname';
                }
                if (!SHerbimiRegexx.test(sHerbimiNputi.value)) {
                    sHerbimiNputiERROR.style.color = 'red';
                    sHerbimiNputiERROR.innerText = 'Wrong Service';
                }

                if (!sherbimitjeterRegex.test(sHerbimiNputi.value)) {
                    sHerbimiNputiERROR.style.color = 'red';
                    sHerbimiNputiERROR.innerText = 'Wrong Service';

                }

                if (orAiNputi.value == '') {
                    orAiNputiERROR.style.color = 'red';
                    orAiNputiERROR.innerText = 'Wrong Clock';
                }


                if (DAtaiNputi.value == '') {
                    DAtaiNputiERROR.style.color = 'red';
                    DAtaiNputiERROR.innerText = 'Wrong Date';
                    alert("Ju lutemi rishikoni te dhenat  !!");
                    return false;
                }
            }

            if ((SHerbimiRegexx.test(sHerbimiNputi.value) || sherbimitjeterRegex.test(sHerbimiNputi.value))) {
                sHerbimiNputiERROR.style.color = '#58FF00';
                sHerbimiNputiERROR.innerText = 'Correct Service';
                // if(sherbimitjeterRegex.test(sHerbimiNputi.value)){
                // sHerbimiNputiERROR.style.color='#58FF00';
                // sHerbimiNputiERROR.innerText='Correct Service';
                // }
                if (!NAmmeRegexx.test(nAmeiNputi.value)) {
                    nAmeiNputiERROR.style.color = 'red';
                    nAmeiNputiERROR.innerText = 'Wrong Name';
                }
                if (!SUrnameRegexx.test(SUrnameiNputi.value)) {
                    SUrnameiNputiERROR.style.color = 'red';
                    SUrnameiNputiERROR.innerText = 'Wrong Surname';
                }
                if (!NUmberRegexx.test(NumberiNputi.value)) {
                    NumberiNputiERROR.style.color = 'red';
                    NumberiNputiERROR.innerText = 'Wrong Number';
                }

                if (orAiNputi.value == '') {
                    orAiNputiERROR.style.color = 'red';
                    orAiNputiERROR.innerText = 'Wrong Clock';
                }


                if (DAtaiNputi.value == '') {
                    DAtaiNputiERROR.style.color = 'red';
                    DAtaiNputiERROR.innerText = 'Wrong Date';
                    alert("Ju lutemi rishikoni te dhenat !!");
                    return false;
                }
            }



            if (orAiNputi.value !== '') {
                orAiNputiERROR.style.color = '#58FF00';
                orAiNputiERROR.innerText = 'Correct Clock';
                if (!NAmmeRegexx.test(nAmeiNputi.value)) {
                    nAmeiNputiERROR.style.color = 'red';
                    nAmeiNputiERROR.innerText = 'Wrong Name';
                }
                if (!SUrnameRegexx.test(SUrnameiNputi.value)) {
                    SUrnameiNputiERROR.style.color = 'red';
                    SUrnameiNputiERROR.innerText = 'Wrong Surname';
                }
                if (!NUmberRegexx.test(NumberiNputi.value)) {
                    NumberiNputiERROR.style.color = 'red';
                    NumberiNputiERROR.innerText = 'Wrong Number';
                }

                if (!SHerbimiRegexx.test(sHerbimiNputi.value)) {
                    sHerbimiNputiERROR.style.color = 'red';
                    sHerbimiNputiERROR.innerText = 'Wrong Service';
                }

                if (!sherbimitjeterRegex.test(sHerbimiNputi.value)) {
                    sHerbimiNputiERROR.style.color = 'red';
                    sHerbimiNputiERROR.innerText = 'Wrong Service';

                }

                if (DAtaiNputi.value == '') {
                    DAtaiNputiERROR.style.color = 'red';
                    DAtaiNputiERROR.innerText = 'Wrong Date';
                    alert("Ju lutemi rishikoni te dhenat  !!");
                    return false;
                }
            }


            if (DAtaiNputi.value !== '') { //DAtaiNputi.value==''
                DAtaiNputiERROR.style.color = '#58FF00';
                DAtaiNputiERROR.innerText = 'Correct Date';
                if (!NAmmeRegexx.test(nAmeiNputi.value)) {
                    nAmeiNputiERROR.style.color = 'red';
                    nAmeiNputiERROR.innerText = 'Wrong Name';
                }
                if (!SUrnameRegexx.test(SUrnameiNputi.value)) {
                    SUrnameiNputiERROR.style.color = 'red';
                    SUrnameiNputiERROR.innerText = 'Wrong Surname';
                }
                if (!NUmberRegexx.test(NumberiNputi.value)) {
                    NumberiNputiERROR.style.color = 'red';
                    NumberiNputiERROR.innerText = 'Wrong Number';
                }

                if (!SHerbimiRegexx.test(sHerbimiNputi.value)) {
                    sHerbimiNputiERROR.style.color = 'red';
                    sHerbimiNputiERROR.innerText = 'Wrong Service';
                }

                if (!sherbimitjeterRegex.test(sHerbimiNputi.value)) {
                    sHerbimiNputiERROR.style.color = 'red';
                    sHerbimiNputiERROR.innerText = 'Wrong Service';

                }

                if (orAiNputi.value == '') {
                    orAiNputiERROR.style.color = 'red';
                    orAiNputiERROR.innerText = 'Wrong Clock';
                    alert("Ju lutemi rishikoni te dhenat  !!");
                    return false;
                }
            }


            if (DAtaiNputi.value == '') {
                DAtaiNputiERROR.style.color = 'red';
                DAtaiNputiERROR.innerText = 'Wrong Date';
                if (!NAmmeRegexx.test(nAmeiNputi.value)) {
                    nAmeiNputiERROR.style.color = 'red';
                    nAmeiNputiERROR.innerText = 'Wrong Name';
                }
                if (!SUrnameRegexx.test(SUrnameiNputi.value)) {
                    SUrnameiNputiERROR.style.color = 'red';
                    SUrnameiNputiERROR.innerText = 'Wrong Surname';
                }
                if (!NUmberRegexx.test(NumberiNputi.value)) {
                    NumberiNputiERROR.style.color = 'red';
                    NumberiNputiERROR.innerText = 'Wrong Number';
                }

                if (!SHerbimiRegexx.test(sHerbimiNputi.value) || !sherbimitjeterRegex.test(sHerbimiNputi.value)) {
                    sHerbimiNputiERROR.style.color = 'red';
                    sHerbimiNputiERROR.innerText = 'Wrong Service';
                }

                if (orAiNputi.value == '') {
                    orAiNputiERROR.style.color = 'red';
                    orAiNputiERROR.innerText = 'Wrong Clock';
                    alert("Ju lutemi rishikoni te dhenat te gjithat !!");
                    return false;
                }
            }
        }


        </script>






        <footer>
            <section class="klasaefooterit">
                <div class="main999">
                    <div class="d1">
                        <div class="g">
                            <div style="display: flex; align-items: center; margin-top: -3px;">
                                <img src="images/logo-bardh.png" style="width: 40px;" alt="+logo">
                                <h1 style="color: #ffffff; padding-left: 7px;">Grieta Hospital</h1>
                            </div>
                            <p style="margin-top: 2px;">
                                Grieta është një platformë inovative shëndetësore
                                që sjell një eksperiencë të re dhe të përmirësuar për pacientët.
                            </p>
                        </div>
                    </div>
                    <div class="d1">
                        <div class="g2" style="margin-left: 80px;">
                            <h1 style="color: #ffffff; ">Menu</h1>
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
                            <h1 style="color:#ffffff;">Sherbimet</h1>
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
                            <h1 style="padding-left: 20px;color:#ffffff;">Get Into Touch</h1>
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
                <p class="Copyright"
                    style="padding-left: 550px; margin-top: 2px; padding-bottom: 10px; margin-bottom: 10px;">Copyright ©
                    2023 Get Appointment All Right Reserved</p>



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
                    emAilError.style.color = 'green';
                    emAilError.innerText = 'Successfully Email';
                    alert("Ju Keni Plotesuar Emailen Sic Duhet !!");
                    return;
                }

            }
            </script>

        </footer>




        <!-- <script>
    
        function validimiKontakti1(){ --nuk bon kshtu 
    
    let nameRegex=/^[A-Z]{1}\w[a-z]{2,10}/;
    let surnameRegex=/^[A-Z]{1}\w[a-z]{2,10}/;
    let PhoneRegex=/[0-9]{3}[-+]{1}[0-9]{3}[-+]{1}[0-9]{3}[-+]{1}[0-9]{3}/;

    
    let emriInput=document.getElementById('emri');
    let surnameInput=document.getElementById('mbiemri');
    let phoneInput=document.getElementById('tel');
    
    let nameERRORI=document.getElementById('nameerror2');
    let mbiemrierrori=document.getElementById('mbiemrierror2');
    let Numbererror2=document.getElementById('Numbererror2');
    
    
    nameERRORI.innerText='';
    mbiemrierrori.innerText='';
    Numbererror2.innerText='';
    
    
    
      if(!nameRegex.test(emriInput.value) && !PhoneRegex.test(phoneInput.value) && !surnameRegex.test(surnameInput.value)){
        nameERRORI.style.color='#FF0000';
        mbiemrierrori.style.color='#FF0000';
        Numbererror2.style.color='#FF0000';
        
        nameERRORI.innerText='Wrong Name';
        mbiemrierrori.innerText='Wrong Surname';
        Numbererror2.innerText='Wrong Number';
        alert('Ju lutemi shkruani te dhenat e sakta !');
        return;
      }
      
    else if(nameRegex.test(emriInput.value) && PhoneRegex.test(phoneInput.value) && surnameRegex.test(surnameInput.value)){
        nameERRORI.style.color='#26FF00';
        mbiemrierrori.style.color='#26FF00';
        Numbererror2.style.color='#26FF00';
    
    
        
        nameERRORI.innerText='Successfully Name';
        mbiemrierrori.innerText='Successfully Email';
        Numbererror2.innerText='Successfully Number';
      
        alert('Urime ju keni shenuar te dhenat ne menyren e duhur !');
        return ;
    }
    } -->

        <!-- </script> -->




</body>

</html>
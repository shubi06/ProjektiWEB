<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register-form</title>

    <link rel="stylesheet" href="lidhja_me_css.css">

    <style>
    @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');

    .info-msg {
        margin: 10px 0;
        padding: 10px;
        border-radius: 3px 3px 3px 3px;
    }

    .info-msg {
        color: #059;
        background-color: #BEF;
    }
    </style>

</head>

<body class="klasaeregister">

    <div class="topkryesori" style="background-color: #d6c7c7;">
        <?php if(isset($_SESSION['message'])) {  ?>
        <div class="info-msg">
            <i class="fa fa-info-circle"></i>
            <?= $_SESSION['message']; ?>
        </div>
        <?php
    unset($_SESSION['message']);
    }
    ?>
        <div class="fotodok" style="margin-left:300px; margin-top: 72px;">

        </div>
        <div class="meirendesishmi" style="margin-right: 299px; padding-bottom: 10px;">

            <form action="authcode.php" class="klasa" method="POST">

                <div class="NEFILLIM" style="margin-top: 80px; 
        margin-left: 150px; font-size: 44px; font-family:Arial, Helvetica, sans-serif;">
                    <p>Regjistrohu</p>
                </div>


                <div class="emri" style="display: flex; align-items: center;">
                    <input class="inputat2222" type="text" id="emri" name="emri" placeholder="Emri :" required><label
                        style="padding-left: 20px;" id="idname-error"></label>
                </div>

                <div class="mbiemri" style="display: flex; align-items: center;">
                    <input class="inputat2222" type="text" id="mbiemri" name="mbiemri" placeholder="Mbiemri:"
                        required><label style="padding-left: 20px;" id="idmbiemri"></label>
                </div>

                <div class="password" style="display: flex; align-items: center;">
                    <input class="inputat2222" type="password" id="password" name="password" placeholder="Passwordi:"
                        required><label style="padding-left: 20px;" id="idpasswordi"></label>
                </div>

                <div class="password2" style="display: flex; align-items: center;">
                    <input class="inputat2222" type="password" id="passwordperserite" name="passwordperserite"
                        placeholder="Perserite Passwordin:" required> <label style="padding-left: 20px; display: flex;"
                        id="idperseritepsw"></label>
                </div>

                <div class="emaili" style="display: flex; align-items: center;">
                    <input class="inputat2222" type="email" id="email" name="email" placeholder="Emaili :"
                        required><label style="padding-left: 20px;" id="idEmail-error"></label>
                </div>

                <div class="signup" style="display: flex; align-items: center;">
                    <input class="submit" id="submitButton" name="register_btn"
                        style="border: none; background: transparent; margin-right: 25px;" type="submit" name="submit"
                        onclick=" return validimi()" placeholder="signup" value="Signup" required> <label
                        style="padding-left: 110px;" id="idname-error"></label>
                </div>

                <div class="already" style=" margin-left: 90px;     margin-top: 10px;">
                    <p style="font-size: 15px;">Already have an account?<a href="login.html" target="_blank"
                            style="text-decoration: none;"> Login</a></p>
                </div>

                <div class="or" style=" margin-left: 80px; margin-top: 10px;">
                    <p
                        style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                        OR
                    <p>
                </div>


                <div class="gmail">
                    <img class="imazhii13" src="images/logo-facebook.png" alt="logo fb">
                    <p class="paragraph11"> <a href="http://facebook.com" target="_blank">Login with Facebook</a></p>
                </div>



                <div class="gmail" id="fundi">
                    <img class="imazhii" src="images/gmail-icon.svg" alt="logo gamil">
                    <p class="paragraph11"> <a href="http://gmail.com" target="_blank">Login with Gmail</a></p>
                </div>

                <div class="fundi">

                </div>


            </form>

        </div>

    </div>



    <script>
    //duhet te jene te dhena te caktuara qe te funksionoj si duhet kjo forme    EMRI DUHET TE JETE: Ilir   MBIEMRI: Misini  Passwordi:passwordiABC12 RE-Passwordi:passwordiABC12  Emaili:iilirmisini4@gmail.com
    let nameRegex = /^[A-Z]{1}\w[a-z]{2,10}/;
    let passwordRegex = /[a-zA-Z]{7,15}[0-9]{1,5}/;
    let EmailRegex = /\w[a-z || 0-9 || A-Z]+@+\w[a-z]{3,10}[._-]{1}\w{3}/;
    let MbiemriRegex = /^[A-Z]{1}\w[a-z]{3,16}/;

    function validimi() {
        //duhet te jene te dhena te caktuara qe te funksionoj si duhet kjo forme    EMRI DUHET TE JETE: Ilir   MBIEMRI: Misini  Passwordi:passwordiABC12 RE-Passwordi:passwordiABC12  Emaili:iilirmisini4@gmail.com
        let nameinput = document.getElementById('emri');
        let mbiemriInput = document.getElementById('mbiemri');
        let password = document.getElementById('password');
        let passwordperseriteInput = document.getElementById('passwordperserite');
        let emailInput = document.getElementById('email');

        let nameError = document.getElementById('idname-error');
        let MbiemriError = document.getElementById('idmbiemri');
        let passwordiError = document.getElementById('idpasswordi');
        let passwordiperseriteError = document.getElementById('idperseritepsw');
        let emailError = document.getElementById('idEmail-error');


        nameError.innerText = '';
        MbiemriError.innerText = '';
        passwordiError.innerText = '';
        passwordiperseriteError.innerText = '';
        emailError.innerText = '';

        //duhet te jene te dhena te caktuara qe te funksionoj si duhet kjo forme  EMRI DUHET TE JETE: Ilir   MBIEMRI: Misini  Passwordi:passwordiABC12 RE-Passwordi:passwordiABC12  Emaili:iilirmisini4@gmail.com
        if (nameRegex.test(nameinput.value)) {
            nameError.style.color = '#58FF00';
            nameError.innerText = 'Correct Name';
            if (!MbiemriRegex.test(mbiemriInput.value) && !passwordRegex.test(password.value) && !passwordRegex.test(
                    passwordperseriteInput.value) && !EmailRegex.test(emailInput.value)) {
                MbiemriError.style.color = 'red';
                passwordiError.style.color = 'red';
                passwordiperseriteError.style.color = 'red';
                emailError.style.color = 'red';

                MbiemriError.innerText = 'Wrong Surname';
                passwordiError.innerText = 'Wrong Password';
                passwordiperseriteError.innerText = 'Wrong Password Again';
                emailError.innerText = 'Wrong Email';
                alert("Ju lutemi mbushni te dhenat me saktesi !");
                return false;
            }
        }

        if (MbiemriRegex.test(mbiemriInput.value)) { //nameRegex.test(nameinput.value)
            MbiemriError.style.color = '#58FF00';
            MbiemriError.innerText = 'Correct Surname';
            if (!nameRegex.test(nameinput.value) && !passwordRegex.test(password.value) && !passwordRegex.test(
                    passwordperseriteInput.value) && !EmailRegex.test(emailInput.value)) {
                nameError.style.color = 'red';
                nameError.innerText = 'Wrong Name';

                passwordiError.style.color = 'red';
                passwordiperseriteError.style.color = 'red';
                emailError.style.color = 'red';
                passwordiError.innerText = 'Wrong Password';
                passwordiperseriteError.innerText = 'Wrong Password Again';
                emailError.innerText = 'Wrong Email';
                alert("Ju lutemi mbushni te dhenat me saktesi !");
                return false;
            }
        }

        if (passwordRegex.test(password.value) && passwordRegex.test(passwordperseriteInput
            .value)) { //shenim qe te jete register forma ne menyre profesionale e strukturar mire dy inputet e passwordave duhet te jene te shenuara per te llogaritur passwordi si i sakte
            passwordiError.style.color = '#58FF00';
            passwordiError.innerText = 'Correct Password';
            passwordiperseriteError.style.color = '#58FF00';
            passwordiperseriteError.innerText = 'Correct Password Again';
            if (!nameRegex.test(nameinput.value) && !MbiemriRegex.test(mbiemriInput.value) && !EmailRegex.test(
                    emailInput.value)) {
                MbiemriError.style.color = 'red';
                MbiemriError.innerText = 'Wrong Surname';
                nameError.style.color = 'red';
                nameError.innerText = 'Wrong Name';
                emailError.style.color = 'red';
                emailError.innerText = 'Wrong Email';
                alert("Ju lutemi mbushni te dhenat me saktesi !");
                return false;
            }
        }


        if (EmailRegex.test(emailInput.value)) {
            emailError.style.color = '#58FF00';
            emailError.innerText = 'Correct Email';
            if (!nameRegex.test(nameinput.value) && !MbiemriRegex.test(mbiemriInput.value) && !passwordRegex.test(
                    password.value) && !passwordRegex.test(passwordperseriteInput.value)) {
                MbiemriError.style.color = 'red';
                MbiemriError.innerText = 'Wrong Surname';
                nameError.style.color = 'red';
                nameError.innerText = 'Wrong Name';
                passwordiError.style.color = 'red';
                passwordiError.innerText = 'Incorrect Password';
                passwordiperseriteError.style.color = 'red';
                passwordiperseriteError.innerText = 'Incorrect Password Again';
                alert("Ju lutemi mbushni te dhenat me saktesi !");
                return false;
            }
        }


        if (nameRegex.test(nameinput.value) && MbiemriRegex.test(mbiemriInput.value) && passwordRegex.test(password
                .value) && passwordRegex.test(passwordperseriteInput.value) && EmailRegex.test(emailInput.value)) {
            MbiemriError.style.color = '#58FF00';
            MbiemriError.innerText = 'Correct Surname';
            nameError.style.color = '#58FF00';
            nameError.innerText = 'Correct Name';
            passwordiError.style.color = '#58FF00';
            passwordiError.innerText = 'Correct Password';
            passwordiperseriteError.style.color = '#58FF00';
            passwordiperseriteError.innerText = 'Correct Password Again';
            emailError.style.color = '#58FF00';
            emailError.innerText = 'Correct Email';
            alert("Ju keni mbushur te dhenat me saktesi !!");
            return true;
        }

        if (!nameRegex.test(nameinput.value) && !MbiemriRegex.test(mbiemriInput.value) && !passwordRegex.test(password
                .value) && !passwordRegex.test(passwordperseriteInput.value) && !EmailRegex.test(emailInput.value)) {
            MbiemriError.style.color = 'red';
            MbiemriError.innerText = 'Incorrect Surname';
            nameError.style.color = 'red';
            nameError.innerText = 'Incorrect Name';
            passwordiError.style.color = 'red';
            passwordiError.innerText = 'Incorrect Password';
            passwordiperseriteError.style.color = 'red';
            passwordiperseriteError.innerText = 'Incorrect Password Again';
            emailError.style.color = 'red';
            emailError.innerText = 'Incorrect Email';
            alert("Ju lutemi mbushni te dhenat me saktesi !!");
            return false;
        }
    }
    </script>



</body>

</html>
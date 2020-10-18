<?php
  include "config.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <title><?php echo $lang['order'] ?></title>
  </head>
  <body class="pt-3 body-order">
    <div class="container" id="order">
        <div class="row align-items-center justify-content-center">
            <h3 class="my-2 text-center"><?php echo $lang['order-form'] ?></h2>
        </div>
        <form action="includes/process.inc.php" method="post" class="form" id="form">
            <div class="form-control">
                <label><?php echo $lang['name'] ?></label>
                <input name="first" type="text" id="name">
                <small><?php echo $lang['errName'] ?></small>
            </div>
            <div class="form-control">
                <label><?php echo $lang['last'] ?></label>
                <input name="last" type="text" id="last-name">
                <small><?php echo $lang['errLast'] ?></small>
            </div>
            <div class="form-control">
                <label><?php echo $lang['team'] ?></label>
                <input name="team" type="text" id="team">
                <small><?php echo $lang['errTeam'] ?></small>
            </div>
            <div class="form-control">
                <label>Email</label>
                <input name="email" type="email" id="email">
                <small><?php echo $lang['errEmail'] ?></small>
            </div>
            <div class="form-control">
                <label><?php echo $lang['phone'] ?></label>
                <input name="phone" type="tel" id="phone">
                <small><?php echo $lang['errPhone'] ?></small>
            </div>
            <div class="row align-items-center justify-content-center pt-3">
                <button name="form-submit" type="submit" class="btn"><?php echo $lang['send'] ?></button>
            </div>
        </form>
    </div>
  </body>
  <script>
        const form = document.getElementById('form');
        const name = document.getElementById('name');
        const lastName = document.getElementById('last-name');
        const team = document.getElementById('team');
        const email = document.getElementById('email');
        const phone = document.getElementById('phone');
        
        form.addEventListener('submit', (e) => {
            var errNum = 0;
            //checkInputs();
            const nameVal = name.value.trim();
            const lastNameVal = lastName.value.trim();
            const teamVal = team.value.trim();
            const emailVal = email.value.trim();
            const phoneVal = phone.value.trim();

            var patternName = /^[A-Z][a-z]{2,15}$/;
            var patternLastName = /^[A-Za-z]{2,20}$/;
            var patternTeam = /^[A-Za-z]{2,30}$/;
            var patternPhone = /^[0-9]{6,20}$/;
            var patternEmail = /^[a-zA-Z0-9._]+@[a-zA-Z]+\.[a-zA-Z]{2,5}$/;


            if(patternName.test(nameVal) == false){
                setErrorFor(name);
                errNum++;
            }else{
                setSuccessFor(name);
            }

            if(patternLastName.test(lastNameVal) == false){
                setErrorFor(lastName);
                errNum++;
            }else{
                setSuccessFor(lastName);
            }

            if(patternTeam.test(teamVal) == false){
                setErrorFor(team);
                errNum++;
            }else{
                setSuccessFor(team);
            }

            if(patternPhone.test(phoneVal) == false){
                setErrorFor(phone);
                errNum++;
            }else{
                setSuccessFor(phone);
            }

            if(patternEmail.test(emailVal) == false){
                setErrorFor(email);
                errNum++;
            }else{
                setSuccessFor(email);
            }
            if(errNum > 0){
                e.preventDefault();
            }
        });
        
        function setErrorFor(input){
            const formControl = input.parentElement;
            formControl.className = 'form-control error';
        }

        function setSuccessFor(input){
            const formControl = input.parentElement;
            formControl.className = 'form-control success';
        }

    </script>
</html>
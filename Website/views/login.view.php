<!doctype html>
<html lang="en">
<?php $title = "Login" ?>
<?php include "includes/head.view.php" ?>
<body>
<?php include "includes/nav.view.php" ?>
<script>
    function inputCheckLogin(){
        var name = document.getElementById("name").value;
        var password = document.getElementById("password").value;
        var empty = ""

        if(name == empty || password == empty){
            alert("Vul een gebruikersnaam of wachtwoord in");
            event.preventDefault();
        }else{
            return true;
        }
    }
</script>
<div class="wrapper">
    <div class="container max-container">
        <div class="row">
            <div class="col-md-12">
                <div class="login_inner">
                    <form action="/login" method="post" onsubmit="inputCheckLogin()">
                        <div class="error" >
                            <?= isset($_SESSION["login_incorrect"]) ? $_SESSION["login_incorrect"] : ''; ?>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 text text-center">
                                <h2>log in</h2>
                            </div>
                        </div>
                        <div class="form-group name-group <?= isset($_SESSION["login_incorrect"]) ? 'error' : ''; ?>">
                            <input name="username" type="text" class="form-control form-control-sm"  id="name" placeholder="Gebruikersnaam" value="<?= isset($_POST["username"]) ? $_POST["username"] : ""?>">
                        </div>

                      


                        <div class="form-group password-group">
                            <input type="password" name="password" class="form-control form-control-sm"  id="password"   placeholder="Wachtwoord">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary" placeholder="lorem ipsum">Submit</button>
                        <p>Heeft u geen account? <a href='/register'>Registreer dan nu</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.view.php" ?>
</body>
</html>
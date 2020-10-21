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



                        <div class="has_icon form-group name-group <?= isset($_SESSION["login_incorrect"]) ? 'error' : ''; ?>">
                            <span class="fa fa-user form-control-login"></span>
                            <input name="username" type="text" class="form-control form-control-sm"  id="name" placeholder="username" value="<?= isset($_POST["username"]) ? $_POST["username"] : ""?>">
                        </div>

                      


                        <div class=" has_icon form-group password-group">
                            <span class="fa fa-shield form-control-login"></span>
                            <input type="password" name="password" class="form-control form-control-sm"  id="password"   placeholder="password">
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" name="submit" class="btn login_button " placeholder="lorem ipsum">Submit
                                </button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-center text-block">
                                 <p style="font-size: 13px;">Don’t have an account?<a href='/register'>Sign up</a>.</p>
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.view.php" ?>
</body>
</html>
<?php
$title = "Logout";
include "includes/head.view.php";

session_destroy();
?>
<body>
<meta http-equiv="refresh" content="3;url=/" />
<?php include "includes/nav.view.php" ?>

<div class="space">
</div>

<div class="space">
</div>

<div class="space">
</div>

<div class="w3-container w3-center w3-animate-left text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="zebi text-b">
                    <h1 >you are logged out
<br>
                    </h1>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="gezeik text-b">
                    <p>
                        we look forward to seeing you back soon
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.view.php" ?>
</body>
</html>
ert<div class="nav-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-md-12 col-sm-12 col-lg-12">
                <div class="row">
                    <div class="col-xs-4 col-md-4 col-sm-4 col-lg-4 d-flex justify-content-start">
                        <nav class=" navbar-dark ">
                            <div id="myNav" class="overlay">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <div class="overlay-content">
                                    <a href="/">Home</a>
                                    <a href="/about">About</a>
                                    <?php  if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
                                    <a href="/course">Courses</a>
                                    <?php } ?>
                                    <a href="/contact">Contact</a>
                                </div>
                            </div>
                            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                        </nav>
                    </div>
                    <div class="col-xs-4 col-md-4 col-sm-4 col-lg-4 image d-flex justify-content-center">
                                <img src="/asset/img/WFFLIX.svg" role="button">
                    </div>
                    <div class="col-xs-4 col-md-4 col-sm-4 col-lg-4">
                        <div class="row">
                            <?php  if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
                            <div class="logout">
                                <div class="row">
                                    <div class="logout button">
                                        <a href="/logout" class="btn btn-primary" type="submit">logout</a>
                                    </div>
                                </div>
                            </div>
                            <?php }else{ ?>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 text-right buttons">
                                        <a href="/login" class="btn btn-primary" type="submit">login</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 buttons">
                                        <a href="/register" class="btn btn-primary" type="submit">register</a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

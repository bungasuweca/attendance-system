<?php

require_once('./components/top-bootstrap.php');

?>

<body>
    <!-- Navbar -->
    <header>
        <div class="navbar navbar-expand-lg bg-body-tertiary shadow-sm rounded">
            <div class="container-fluid">
                <div class="col-lg-1"></div>
                <div class="navbar-brand fw-bold">AttendEase</div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="col-lg-4"></div>
                    <div class="navbar-nav">
                        <div class="nav-item">
                            <a href="#" class="nav-link mx-1">Home</a>
                        </div>
                        <div class="nav-item">
                            <a href="#" class="nav-link mx-1">About Us</a>
                        </div>
                        <div class="nav-item">
                            <a href="#" class="nav-link mx-1">Features</a>
                        </div>
                        <div class="nav-item">
                            <a href="#" class="nav-link mx-1">Contact</a>
                        </div>
                    </div>

                    <!-- Log In & Sign Up -->
                    <div class="col-lg-3"></div>
                    <a href="login.php" class="btn btn-outline mx-3">Log In</a>
                    <a href="register.php" class="btn btn-blue">Sign Up</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Jumbotron -->
    <div class="jumbotron"
        style="background-image: url('../assets/img/jumbotron-img.svg'); background-size: cover; background-repeat: no-repeat; ">
        <div class="container py-5">
            <div class="row d-flex align-items-center">
                <div class="col-12 col-lg-7">
                    <h1>AttendEase</h1>
                    <p>The new way to Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Asperiores sunt,
                        aspernatur temporibus quae, odio expedita eveniet sint nulla quisquam assumenda consequatur
                        omnis, cupiditate nobis nisi molestiae et iste quaerat. Provident
                    </p>
                    <a href="admin-index.php" class="btn btn-blue">Try it for Free</a>
                </div>
                <div class="col-12 col-lg-5 text-center">
                    <img src="../assets/img/attendance.svg" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- About Us -->
    <div class="wrapper bg-abu mt-5">
        <div class="container py-5">
            <div class="align-items-center">
                <h1 class="text-center">About Us</h1>
                <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, hic! Ea explicabo
                    distinctio cum aliquam, doloribus unde, omnis dicta vel eos fugit, aperiam qui? Dolore sed aliquid
                    provident harum
                    optio.Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Facere voluptatibus perspiciatis optio aspernatur temporibus itaque
                    quibusdam possimus maiores autem exercitationem, dicta vero enim eligendi ipsa eius porro, id
                    sapiente in!
                </p>
            </div>
        </div>
    </div>

    <?php

    require_once('./components/footer.php');

    ?>

    <?php

    require_once('./components/bottom-bootstrap.php');

    ?>
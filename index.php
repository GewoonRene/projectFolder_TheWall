<!doctype html>
<html lang="nl" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Ren&eacute; Huiberts & Job Filipsen">
    <meta name="description" content="Een plek om je foto's en idee&euml;n te delen!">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <link rel="stylesheet" type="text/css" href="styles/navigation.css">
    <link rel="stylesheet" type="text/css" href="styles/modal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Homepage - 'The Wall'</title>
</head>
<body>
    <div class="container">

        <!-- HEADER -->

        <div class="logo">
            <a href="index.php"><img id="logo" src="media/images/LOGO.jpg"></a> </div>

        <div class="navbar">
            <div class="dropdown">
                <button class="dropbtn">Username
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <button class="myBtn" id="login" type="button">Login</button>
                    <button class="myBtn" id="register" type="button">Register</button>
                </div>
            </div>

            <a href="uploadImage.php">Image Upload</a>
            <a href="index.php">Homepage</a>
        </div>

        <hr class="style14">

        <!-- BODY -->

        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>

                <img src="media/images/user.png" class="user">
                <h2>Log In Here</h2>
                <form>
                    <p>Email</p>
                    <input type="text" name="" placeholder="Enter Email" autofocus>
                    <p id="ww">Password</p>
                    <input type="password" name="" placeholder="••••••"><br><br>
                    <input type="submit" name="" value="Sign In"><br><br>
                    <a href="#">Forget Password</a>
                </form>
            </div>
        </div>

        <div id="myModal2" class="modal">
            <div class="modal-content">
                <span class="close2">&times;</span>
                <img src="media/images/user.png" class="user">
                <h2>Register Here</h2>
                <form method="post" action="process_registration.php">
                    <p>Username<p>
                        <input type="text" name="username" placeholder="Enter Username">
                    <p>Email</p>
                    <input type="email" name="mailadres" placeholder="Enter Email">
                    <p>Password</p>
                    <input type="password" name="password" placeholder="••••••">
                    <p>Confirm Password</p>
                    <input type="password" name="password_repeat" placeholder="••••••">
                    <input type="submit" name="submit_registration" value="Sign Up">
                </form>
            </div>
        </div>

        <div class="banner-slideshow">
            <div class="mySlides fade"><img src="media/images/1-4.gif" style="width:100%"></div> <!--PLACEHOLDER-->
            <div class="mySlides fade"><img src="media/images/2-4.gif" style="width:100%"></div> <!--PLACEHOLDER-->
            <div class="mySlides fade"><img src="media/images/3-4.gif" style="width:100%"></div> <!--PLACEHOLDER-->
            <div class="mySlides fade"><img src="media/images/4-4.gif" style="width:100%"></div> <!--PLACEHOLDER-->

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <hr class="style14">

    </div>

    <script src="scripts/slideshow.js"></script>
    <script src="scripts/modaalVenster.js" defer></script>

</body>
</html>
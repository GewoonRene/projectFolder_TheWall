<!doctype html>
<html lang="nl" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Ren&eacute; Huiberts & Job Filipsen">
    <meta name="description" content="Een plek om je foto's en idee&euml;n te delen!">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="styles/homepage.css">
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
                <button class="dropbtn">User_name
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">My Profile</a>
                    <a href="uploadImage.php">Image Upload</a>
                    <a href="#">Settings</a>
                </div>
            </div>

            <a href="#news">Feed</a>
            <a href="homepage.php">Homepage</a>
            <button id="myBtn" type="button">Start Upload</button>

        </div>

        <!-- BODY -->

        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>

                <img src="media/images/user.png" class="user">
                <h2>Log In Here</h2>
                <form>
                    <p>Email</p>
                    <input type="text" name="" placeholder="Enter Email">
                    <p>Password</p>
                    <input type="password" name="" placeholder="••••••"><br><br>
                    <input type="submit" name="" value="Sign In"><br><br>
                    <a href="#">Forget Password</a>
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

    </div>

    <script src="scripts/slideshow.js"></script>
    <script src="scripts/modaalVenster.js"></script>

</body>
</html>
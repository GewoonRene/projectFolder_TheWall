<!doctype html>
<html lang="nl" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Ren&eacute; Huiberts & Job Filipsen">
    <meta name="description" content="Een plek om je foto's en idee&euml;n te delen!">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="styles/inlogpage.css">
    <title>Homepage</title>
</head>
<body>
    <div class="container">

        <div id="popup">
            <div class="loginBox">
                <img src="media/images/user.png" class="user">
                <h2>Log In Here</h2>
                <form>
                    <p>Email</p>
                    <input type="text" name="" placeholder="Enter Email">
                    <p>Password</p>
                    <input type="password" name="" placeholder="••••••">
                    <input type="submit" name="" value="Sign In">
                    <a href="homepage.php">Forget Password</a> <!-- <a> to homepage </a> == PLACEHOLDER -->
                </form>
            </div>
            <div id="background-popup"></div>
        </div>


        <div class="nav">

                <!--<div class="logo">-->
                    <!--<a href="index.php">LOGO</a> </div>-->

            <ul class="nav-bar">

                <div class="search-container">
                    <form action="searchAction.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>

                <li><a href="index.php">Startpagina</a></li>
                <li><a href="uploadImage.php">Upload Image</a></li>
                <li><a href="index.php">Feed</a></li>
                <li><a href="index.php">User_name</a></li>
            </ul>
        </div>

        <div class="banner-slideshow">
            <div class="mySlides fade"><img src="media/images/1-4.gif" style="width:100%"></div>
            <div class="mySlides fade"><img src="media/images/2-4.gif" style="width:100%"></div>
            <div class="mySlides fade"><img src="media/images/3-4.gif" style="width:100%"></div>
            <div class="mySlides fade"><img src="media/images/4-4.gif" style="width:100%"></div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <div class="masonry">
            <div class="masonry-layout__panel">
                <div class="masonry-layout__panel-content">
                    <!-- IMAGE, TITLE & DESCRIPTION HIERR  -->
                </div></div>
            <div class="masonry-layout__panel">
                <div class="masonry-layout__panel-content">
                    <!-- IMAGE, TITLE & DESCRIPTION HIERR  -->
                </div></div>
            <div class="masonry-layout__panel">
                <div class="masonry-layout__panel-content">
                    <!-- IMAGE, TITLE & DESCRIPTION HIERR  -->
                </div></div>
        </div>
    </div>

    <script src="scripts/slideshow.js"></script>
    <script src="scripts/loginScreen.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"></script>
</body>
</html>
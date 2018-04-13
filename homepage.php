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

    <div class="nav">

        <div class="logo">
        <a href="index.php"><img id="logo" src="media/images/LOGO.jpg"></a> </div>

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
        <div class="mySlides fade"><img src="media/images/1-4.gif" style="width:100%"></div> <!--PLACEHOLDER-->
        <div class="mySlides fade"><img src="media/images/2-4.gif" style="width:100%"></div> <!--PLACEHOLDER-->
        <div class="mySlides fade"><img src="media/images/3-4.gif" style="width:100%"></div> <!--PLACEHOLDER-->
        <div class="mySlides fade"><img src="media/images/4-4.gif" style="width:100%"></div> <!--PLACEHOLDER-->

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <div class="grid">
        <div class="item photo">
            <img class="photothumb" src="https://www.andybarefoot.com/codepen/images/dogs/dog2.jpg">
        </div>

        <div class="item photo">
            <img class="photothumb" src="https://www.andybarefoot.com/codepen/images/dogs/dog2.jpg">
        </div>

        <div class="item photo">
            <img class="photothumb" src="https://www.andybarefoot.com/codepen/images/dogs/dog2.jpg">
        </div>

        <div class="item photo">
            <img class="photothumb" src="https://www.andybarefoot.com/codepen/images/dogs/dog2.jpg">
        </div>

        <div class="item photo">
            <img class="photothumb" src="https://www.andybarefoot.com/codepen/images/dogs/dog2.jpg">
        </div>
    </div>

</div>
<script src="scripts/slideshow.js"></script>
</body>
</html>
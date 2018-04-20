<!doctype html>
<html lang="nl" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Ren&eacute; Huiberts & Job Filipsen">
    <meta name="description" content="Een plek om je foto's en idee&euml;n te delen!">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="styles/uploadImage.css">
    <link rel="stylesheet" type="text/css" href="styles/navigation.css">
    <title>Image Upload  - 'The Wall'</title>
</head>
<body>

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
            <h1>Drop or Drag your Image here</h1>

            <form method="post" action="proces/process_upload.php" enctype="multipart/form-data">
                <label><img id="upload" src="#" alt="uploaded_image"><br>
                    <input id="file_upload" type="file" name="uploaded_image"
                           accept="image/gif, image/jpeg, image/png" onchange="readURL(this);"></label><br><br>
                <label>Title:
                    <input name="title:"/></label><br>
                <label>Description:
                    <input name="description"/></label><br><br>
                <input type="submit" name="submit_image" value="Image Uploaden"/>
            </form>
        </div>
    </div>

    <div class="content">
        <h1>Upload en deel jouw afbeeldingen</h1>
        <p>Sleep en plak waar je wilt en start het uploaden van de afbeeldingen direct. 16 MB limiet.</p>
        <button id="myBtn" type="button">Start Upload</button>

    </div>

<script src="scripts/modaalVenster.js"></script>

</body>
</html>
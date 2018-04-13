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
    <title>Homepage</title>
</head>
<body>
    <form method="post" action="homepage.php" enctype="multipart/form-data"><br>
        <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
        <input type="file" name="image">

        <br><br><label>Title:</label>
        <input type="text" name="title">

        <br><br><label>Description:</label>
        <textarea name="description" placeholder="Voer hier uw text toe."></textarea>

        <br><br><input type="submit" name="submit" value="Upload image">
    </form>

    <?php
    $_FILES['image']['title'];
    $_FILES['image']['MAX_FILE_SIZE'];
    $_FILES['image']['tmp_name'];
    $_FILES['image']['error'];

    if(isset($_POST['submit'])) {
        $dbc = mysqli_connect('localhost', 'root', '', '24649_db') or die('### Error Connecting ###');
        $description = mysqli_real_escape_string($dbc,trim($_POST['description']));

        $temp = $_FILES['image']['tmp_name'];
        $target = 'images/' . time() . $_FILES['image']['name'];

        if (!empty($description)) {
            if(!move_uploaded_file($temp, $target)) {
                echo '<br> Gelukt!';
            }
        }
    }
    ?>
</body>
</html>
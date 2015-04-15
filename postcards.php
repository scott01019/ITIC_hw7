<?php 
require_once('user_only_auth.php'); 
require_once('db_connect.php');
require_once('functions.php');

if(isset($_SESSION['username']) && isset($_POST['title']) && isset($_POST['text']) && isset($_POST['filter']))
{    
    $name = sanitizeString($db, $_SESSION['username']);
    $title = sanitizeString($db, $_POST['title']);
    $text = sanitizeString($db, $_POST['text']);
    $time = $_SERVER['REQUEST_TIME'];
    $file_name = $time . '.jpg';
    $filter = sanitizeString($db, $_POST['filter']);

    if ($_FILES)
    {
        $tmp_name = $_FILES['upload']['name'];
        $dstFolder = 'users';
        move_uploaded_file($_FILES['upload']['tmp_name'], $dstFolder . DIRECTORY_SEPARATOR . $file_name);
        //echo "Uploaded image '$file_name'<br /><img src='$dstFolder/$file_name'/>";
    }

    SavePostToDB($db, $name, $title, $text, $time, $file_name, $filter);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Photogram!</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href='css/styles.css' rel='stylesheet'>

        <!-- Custom styles for this template -->
        <link href="css/navbar-fixed-top.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class='container'>
            <?php require 'nav_user.php'; ?>
            <div class="jumbotron">
                <h1>Click the button below to upload an image!</h1>
                <p><a class="btn btn-primary btn-lg" href="upload.php" role="button">Upload an Image!</a></p>
            </div>
            <?php echo getPostcards($db); ?>
        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
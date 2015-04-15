<?php
require_once 'user_only_auth.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<title>Image filtering</title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
    
    <link rel="stylesheet" href="css/styles.css">
	
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body onload="initialize();">
	<div class="container">
        <?php require_once('nav_user.php'); ?>    
		<div class="row" style="margin-top: 100px;">
			<div id="formParent" class="col-md-6 col-md-offset-3">
				<form id="form" class="form-horizontal" method="POST" action="postcards.php" enctype="multipart/form-data">
                    <div class='row'>
                        <div class='form-group col-md-4'>
                            <span class='btn btn-default btn-file'>
                                Browse for Image<input type="file" id="upload" name="upload" accept="image/*">
                            </span>
                        </div>

                        <div class='form-group col-md-3'>
                            <select id='filterSelect' class='form-control' name='filter'>
                                <option value='original'>No Filter</option>
                                <option value='1977'>Seventies</option>
                                <option value='Amaro'>Amaro</option>                           
                                <option value='Brannan'>Brannan</option>                            
                                <option value='Earlybird'>Earlybird</option> 
                                <option value='Grayscale'>Grayscale</option>                          
                                <option value='Hefe'>Hefe</option>
                                <option value='Hudson'>Hudson</option>                            
                                <option value='Inkwell'>Inkwell</option>
                                <option value='Kelvin'>Kelvin</option>
                                <option value='LoFi'>LoFi</option>
                                <option value='Mayfair'>Mayfair</option>
                                <option value='NashVille'>NashVille</option>
                                <option value='Nostalgia'>Nostalgia</option>
                                <option value='Rise'>Rise</option>
                                <option value='Sierra'>Sierra</option>
                                <option value='Sutro'>Sutro</option>
                                <option value='Toaster'>Toaster</option>
                                <option value='Valencia'>Valencia</option>
                                <option value='Walden'>Walden</option>
                                <option value='Willow'>Willow</option>
                                <option value='XPro2'>XPro2</option>
                            </select>
                        </div>
                    </div>

                    <div id='image-container'>
                        <img id='img' name='image' src='/' width='100%'>
                    </div>
                    <br>

                    <div class='row'>
                        <div class='form-group'>
                            <label for="title" class="control-label">Title</label>
                            <div>
                                <input type="text" class="form-control" id="title" name="title" maxlength="20" size="20" value="" required placeholder="Title" autofocus>
                            </div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='form-group'>
                            <label for="text" class="control-label">Text</label>
                            <div>
                                <textarea class="form-control" id="text" name="text" maxlength="140" placeholder="140 characters" style='resize: none'></textarea>
                            </div>
                        </div>
                    </div>

                    <input type="submit" value="Create my postcard!" class="btn btn-primary col-md-offset-1">
				</form>
			</div>
		</div>
	</div>

	<!-- JavaScript placed at bottom for faster page loadtimes. -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
    <script src='js/globals.js'></script>
    <script src='js/utility.js'></script>
    <script src='js/filters.js'></script>
    <script src='js/custom_filters.js'></script>

</body>
</html>
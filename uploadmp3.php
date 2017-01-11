<html lang="en">
<header>
<title>Bangla Music Hub</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</header>


<body>

<!-- Navbar -->
	<div class="col-sm-12">
    <div class="spad">
    </div>
    </div>
	<div class="col-sm-1">
    <img class="res_icon" src="img/bmh_ico.png">
    </div>
    <div class="col-sm-6">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
        	
			
				<div class="navbar-header">
					<a class="navbar-brand" href="flashmp3player/index.html">Bangla Music Hub</a>
				</div>
				<div>
					<ul class="nav navbar-nav">
						<li><a href="index.html">Home</a></li>
						<li><a href="storelogin.php">Store</a></li>
						<li><a href="sharelogin.php">Share</a></li>
						<li><a href="flashmp3player/index.html">Music Player</a></li>
						<li><a href="rating.php.html">Rating</a></li>
					</ul>
				</div>
	</nav>
	
	
    </div>
    <div class="col-sm-3">
    </div>
	<div class="col-sm-2">
            	<div class="fasts">
					<ul class="nav navbar-nav" style="background: none; color:#FFF">
						<li><a href="profile.html">Login or Sign Up</a></li>
					</ul>
                </div>
			</div>
		</div>
<!--ends nav-->





 <!--<div class="container func_list">
    	<div class="col-sm-1">
        	<img class="res_icon" src="img/hp.png">
        </div>
        <div class="col-sm-3">
            <p class="ico_text">
			<form action="uploadmp3.php" method="post" enctype="multipart/form-data">
			<label for="file"><span>Filename:</span></label>
			<input type="file" name="file" id="file" /> 
			</br>
			<input type="submit" name="submit" value="Submit" />
			</form>
			</p>
        </div>
        
    </div>-->
 <div class= "albumarts">
 <h1 style="font-family: Cursive"> upload successful!!</h1>
</div>



<!--<div id="fb-root"></div>-->



<?php
// make a folder upload to move your file
if(isset($_POST['submit']))
{
$allowedExts = array("mp3", "mp4", "wma");
//echo $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
$fileName = $_FILES['file']['name'];
$extension = substr($fileName, strrpos($fileName, '.') + 1); // getting the info about the image to get its extension
 
/*if ((($_FILES["file"]["type"] == "video/mp4")|| ($_FILES["file"]["type"] == "audio/mp3")|| ($_FILES["file"]["type"] == "audio/wma")|| ($_FILES["file"]["type"] == "image/pjpeg")|| ($_FILES["file"]["type"] == "image/gif")|| ($_FILES["file"]["type"] == "image/jpeg")) && ($_FILES["file"]["size"] < 200000) && in_array($extension, $allowedExts))*/
 
if(in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
     echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
 
    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
        echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
       move_uploaded_file($_FILES["file"]["tmp_name"],"flashmp3player/mp3/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "flashmp3player/mp3/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
}
?>

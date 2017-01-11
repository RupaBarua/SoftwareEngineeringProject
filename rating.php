<!DOCTYPE html PUBLIC>
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
						
                        </li>
					</ul>
                </div>
			</div>
		</div>
<!--ends nav-->




<div class="container">
<div class="col-sm-1"></div>
<h3>Some Statistics generated from Survey</h3>
</div>
<div class ="container">
<div class="col-sm-1>
</div>
<div class="col-sm-8">
<table class="table table-striped" border=2>
	<tr> 
	<th>name</th>
	<th>usage</th>
	<th>profit</th>
    <th>rating(1-10)</th>
	</tr>
<?php
require 'connection.php';




$sql = mysqli_query($conn,"SELECT * FROM rating");

echo "";



while($person= mysqli_fetch_array($sql)){
echo "<tr>";
echo "<td>".$person['name']."</td>";
echo "<td>".$person['usage']."</td>";
echo "<td>".$person['profit']."</td>";
echo "<td>".$person['rating(1-10)']."</td>";
echo "</tr>";} ?>
</table>
</div>
</div>
 </body> </html>
	
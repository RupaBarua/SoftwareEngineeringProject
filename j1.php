<html lang="en">
<head>
<!--FOR SIGNING IN PURPOSE-->
  <title>User Profile</title>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  
  
</head>
<body>
<!-- Navbar -->
	<div class="container-fluid">
	<div class="col-sm-12">
    <div class="spad">
    
    
	<div class="col-sm-1">
    <img class="res_icon" src="img/bmh_ico.png">
    </div>
    <div class="col-sm-6">
	
	<nav class="navbar navbar-default">
		<div class="container-fluid">
        	
			
				<div class="navbar-header">
					<a class="navbar-brand" href="index.html">Bangla Music Hub</a>
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
	</div>
    <div class="col-sm-3">
    </div>
	<div class="col-sm-2">
            	<div class="fasts">
					<ul class="nav navbar-nav" style="background: none; color:#FFF">
						<li><a class="active" href="profile.html">Login or Sign Up</a></li>
					</ul>
                </div>
			</div>
    
	</div>
	</div>
	</div>
	<!-- Navbar Ends -->


<div class="container-fluid" >
<div class="col-sm-1"></div>
<div class="col-sm-6 alert alert-danger" style="font-family: 'Cantarell'; font-size: 20px">
<?php
//VIEW OF MEMBER PROFILE ACCOUNT
include"connection.php";
if(isset($_POST["submit"])){
	
	$username=$_POST["name"];
	$password=$_POST["password"];
	
	if(empty($username)||empty($password)){
		echo"You forgot to fill the fields!! Try again!!";
	}
	else{
$pass = mysqli_query($conn,"SELECT Password FROM user WHERE UID='".$username."'");

function login($username, $password) {
	include"connection.php";
	$success= null;
    
    $result = mysqli_query($conn, "SELECT * FROM user WHERE UID='".$username."' AND Password='".$password."'");
    while($row = mysqli_fetch_array($result)) {
        $success = true;
		
    }
	
    if($success == true) {
	$sql = "SELECT link FROM `profilepic` WHERE UID= \"$username\"";
$result = mysqli_query($conn, $sql);

$row = $result->fetch_assoc();
$s = mysqli_query($conn,"SELECT * FROM user WHERE UID='".$username."'");

	if(mysqli_num_rows($s)==0){
echo "<h1><bold>You are not a member yet! If you like to register, look at the top-right corner!<br></bold></h1>";
	}
?>
	
<div class="sm-col-4">
<img src="<?php echo $row['link']; ?>" class="img-thumbnail" width="200" height="200">

</div>

<div class="sm-col-6">
<?php
while($person= mysqli_fetch_array($s)){
echo "<tr>";
echo "USERNAME: <td>".$person['UID']."</td><br>";
echo "NAME: <td>".$person['Name']."</td><br>";
echo "AGE: <td>".$person['Age']."</td><br>";
echo "GENDER: <td>".$person['Gender']."</td><br>";
echo "</tr>";
} 
?>
</div>	
       

  <?php  
header('Location: http://localhost/BMH/store.html') ;  
    } 
	else {
        echo '<div class="alert alert-danger">Oops! It looks like your username and/or password are incorrect. Please try again.</div>';
		echo'<h1><a href= "p.php">Its okay! try again!!</a></h1>';
		
        echo'<h1><a href= "profile.html">If you are not a member! Sign up!</a></h1>';
    }
} 


login($username,$password);

	}

	}
	

?>





</div>

</div>
</body> 
</html>
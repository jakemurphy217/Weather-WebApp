<?php 
 
   $user = 'root';
   $pass = '';
   $db = 'city';
   
   $conn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
   
   if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
   }

   echo "Connected successfully <br> <br>";

   $sql = "SELECT * FROM contact";
	$result = $conn->query($sql);

	if ($result) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "ID: " . $row["id"] . "<br> email: " . $row["emailAdd"]. "<br>" ;
	}
	} else {
	echo "0 results";
	}

	//insert
	if(isset($_POST['save']))

		$sql = "INSERT INTO contact (id, emailAdd)
		VALUES ('".$_POST["id"]."','".$_POST["emailAdd"]."')";

		$result = mysqli_query($conn,$sql);
	


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>current Weather</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="style.css">
</head>
<body id="loginbody">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">City Weather</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="search.php">search</a></li>
      <li><a href="favourite.php">favourite</a></li>
      <li class="active"><a href="login.php">Contact</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
<!-- i could not get the webpage to input information into the contact db
  -->
	<h3>
		If you wish keep up to date with our website please put in your email below and we will get back to you!!
	</h3>
		<h2><b><ul>ADD</ul></b></h2>
	<form action="login.php" method="post"> 
	<label id="first"> ID:</label><br/>
	<input type="text" name="id"><br/>

	<label id="first">email:</label><br/>
	<input type="text" name="emailAdd"><br/>

	

		<button type="submit" name="save" class="btn">add</button>
  </div>

</body>
</html>
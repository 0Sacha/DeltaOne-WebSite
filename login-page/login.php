<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<style type="text/css">

{
	color:white;
}

body {
font-family: Montserrat, Helvetica, sans-serif;
background: #090327;
}

#text{
	height: 25px;
	border-radius: 5px;
	padding: 4px;
	border: solid thin #aaa;
	width: 100%;
}

#button{

	padding: 5px 5px;
	border-radius: 8px;
	padding: 10px;
	width: 100%;
	color: white;
	background-color: darkblue;
	border: none;
}

#box{
	border-radius: 10px;
	background-color: #0099ff;
	margin: auto;
	width: 300px;
	padding: 20px;
}

.form-contact input {
padding: 3.5px 2px;
border-radius: 4px;
margin: 10px 5px;
}

.form-contact {
display: flex;
flex-direction:column; 
color: #fff;
padding: 0px 10px;
margin: 10px 10px;
border-radius: 8px;
font-size: 21px;
border-radius: 15px;
font-weight: bold;
}


.button-contact {
text-align: center;
font-weight: bold;
text-decoration:none;
background: #000;
color:#fff;
}

.button-contact {
padding: 5px 50px;
border-radius: 8px;
}


</style> 

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="user_name"    placeholder="Ton pseudo"><br><br>
			<input id="text" type="password" name="password" placeholder="Ton mot de passe"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>
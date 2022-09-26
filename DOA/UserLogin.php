<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    // header("Location: index.php");
}

if (isset($_POST['submit4'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM officers WHERE Fusname='$email' AND 	Fpsword='$password'";
	if (mysqli_query($conn, $sql)) {
		header("Location: ./OfficerUI.php");
	}else {
	echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
}
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./css/UserLogin.css">

	<title>Login</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="text" placeholder="Username" id="usname" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" id="psword" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit4" class="btn">Login</button> <br>
				<button name="submit5" class="btn" onclick="getInfo()" >Admin Login</button>
			</div>
			
		</form>
	</div>
</body>
<script>
        var objPeople = [{
                username: "admin",
                password: "1234"
            }, {
                username: "admin2",
                password: "1234"
            }, {
                username: "admin3",
                password: "1234"
            }

        ]

        function login(url) {
            window.open("admin_page.php");
        }

        function getInfo() {
            var username = document.getElementById('usname').value
            var password = document.getElementById('psword').value

            for (var i = 0; i < objPeople.length; i++) {

                if (username == objPeople[i].username && password == objPeople[i].password) {
                    console.log(username + " is logged in!!!")
                    login();
                    return
                }
            }
            console.log("incorrect username or password")
        }
    </script>
</html>
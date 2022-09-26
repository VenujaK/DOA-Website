 <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');
:root {
    --green: #21b90d;
    --black: #130f40;
    --light-color: #666;
    --box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
    --border: .2rem solid rgba(0, 0, 0, .1);
    --outline: .1rem solid rgba(0, 0, 0, .1);
    --outline-hover: .2rem solid var(--black);
}

* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: all .2s linear;
}

html {
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 7rem;
}

body {
    background: #eee;
}

section {
    padding: 2rem 9%;
}

.heading {
    text-align: center;
    padding: 2rem 0;
    padding-bottom: 3rem;
    font-size: 3.5rem;
    color: var(--black);
}

.heading span {
    background: var(--green);
    color: #fff;
    display: inline-block;
    padding: .5rem 3rem;
    clip-path: polygon(100% 0, 93% 50%, 100% 99%, 0% 100%, 7% 50%, 0% 0%);
}

.btn {
    margin-top: 1rem;
    display: inline-block;
    padding: .8rem 3rem;
    font-size: 1.7rem;
    border-radius: .5rem;
    border: .3rem solid var(--green);
    color: var(--green);
    cursor: pointer;
    background: none;
}

.btn:hover {
    background: var(--green);
    color: #fff;
}

.header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem 9%;
    background: #fff;
    box-shadow: var(--box-shadow);
}

.header .logo {
    font-size: 0;
    font-weight: bolder;
    color: var(--black);
}

.header .logo {
    color: var(--green);
}

.header .logo img {
    width: 50px;
    height: 50px;
}

.header .navbar a {
    font-size: 1.7rem;
    margin: 0 1rem;
    color: var(--black);
}

.header .navbar a:hover {
    color: var(--green);
}

.header .icons div {
    height: 4.5rem;
    width: 4.5rem;
    line-height: 4.5rem;
    border-radius: .5rem;
    background: #eee;
    color: var(--green);
    font-size: 2rem;
    margin-left: .3rem;
    cursor: pointer;
    text-align: center;
}

.header .icons div:hover {
    background: var(--green);
    color: #fff;
}

#menu-btn {
    display: none;
}

.header .search-form {
    position: absolute;
    top: 110%;
    right: -110%;
    width: 50rem;
    height: 5rem;
    background: #fff;
    border-radius: .5rem;
    overflow: hidden;
    display: flex;
    align-items: center;
    box-shadow: var(--box-shadow);
}

.header .search-form.active {
    right: 2rem;
    transition: .4s linear;
}

.header .search-form input {
    height: 100%;
    width: 100%;
    background: none;
    text-transform: none;
    font-size: 1.6rem;
    color: var(--black);
    padding: 0 1.5rem;
}

.header .search-form label {
    font-size: 2.2rem;
    padding-right: 1.5rem;
    color: var(--black);
    cursor: pointer;
}


.header .search-form label:hover {
    color: var(--green);
}

.header .shopping-cart {
    position: absolute;
    top: 110%;
    right: -110%;
    padding: 1rem;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    width: 35rem;
    background: #fff;
}

.header .shopping-cart.active {
    right: 2rem;
    transition: .4s linear;
}

.header .shopping-cart .box {
    display: flex;
    align-items: center;
    gap: 1rem;
    position: relative;
    margin: 1rem 0;
}

.header .shopping-cart .box img {
    height: 10rem;
}

.header .shopping-cart .box .fa-trash {
    font-size: 2rem;
    position: absolute;
    top: 50%;
    right: 2rem;
    cursor: pointer;
    color: var(--light-color);
    transform: translateY(-50%);
}

.header .shopping-cart .box .fa-trash:hover {
    color: var(--green);
}

.header .shopping-cart .box .content h3 {
    color: var(--black);
    font-size: 1.7rem;
    padding-bottom: 1rem;
}

.header .shopping-cart .box .content span {
    color: var(--light-color);
    font-size: 1.6rem;
}

.header .shopping-cart .box .content .quantity {
    padding-left: 1rem;
}

.header .shopping-cart .total {
    font-size: 2.5rem;
    padding: 1rem 0;
    text-align: center;
    color: var(--black);
}

.header .shopping-cart .btn {
    display: block;
    text-align: center;
    margin: 1rem;
}

.header .login-form {
    position: absolute;
    top: 110%;
    right: -110%;
    width: 35rem;
    box-shadow: var(--box-shadow);
    padding: 2rem;
    border-radius: .5rem;
    background: #fff;
    text-align: center;
}

.header .login-form.active {
    right: 2rem;
    transition: .4s linear;
}

.header .login-form h3 {
    font-size: 2.5rem;
    text-transform: uppercase;
    color: var(--black);
}

.header .login-form .box {
    width: 100%;
    margin: .7rem 0;
    background: #eee;
    border-radius: .5rem;
    padding: 1rem;
    font-size: 1.6rem;
    color: var(--black);
    text-transform: none;
}

.header .login-form p {
    font-size: 1.4rem;
    padding: .5rem 0;
    color: var(--light-color);
}

.header .login-form p a {
    color: var(--green);
    text-decoration: underline;
}
 </style>
 <!-- header section starts  -->

 <header class="header">

<a href="#" class="logo"> <img src="./image/DOA (1).png" alt=""> </a>

<nav class="navbar">
    <a href="./index.php">home</a>
    <a href="./Services.php">Services</a>
    <a href="./ContactUs.php">Contact Us</a>
    <a href="./AboutUs.php">About US</a>

</nav>
<form action="" method="POST" style="float: right;">
<div class="icons" >
    <div class="fas fa-bars" id="menu-btn"></div>
    <div class="fas fa-search" id="search-btn"></div>
    <div class="fas fa-user" id="login-btn" onclick="login() "></div>
</div>
</form>
<div class="container-fluid" id="drop-down-container">
                            <?php
                            if (isset($_POST['search'])) {
                                $text = $_POST['srchtext'];
                                $sql = "SELECT * FROM services WHERE sname LIKE '%{$text}%' LIMIT 5";
                                if ($result = mysqli_query($conn, $sql)) {
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo '<div class="row" style="margin-bottom: 5px; cursor: pointer;">';
                                            echo '<div class="col-md-3">';
                                            echo '</div>';
                                            echo '<div class="col-md-9" style="padding-top:20px"><a onclick="loadServiceS('.$row['SID'].')">' . $row['sname'] . '</a></div>';
                                            echo '</div>';
                                        }
                                        echo '<button id="clear-btn" class="btn btn-sm btn-primary">Clear</button>';
                                    }
                                } else {
                                    echo '<div class="col-md-9" style="padding-top:20px">Services not found</div>';
                                }
                            }
                            ?>
                            
                        </div>
<form action="" class="search-form" method="POST">
    <input type="search" id="search-box" name="srchtext" placeholder="search here..." style="z-index: 1000;">
    <label for="search-box" class="fas fa-search" name="search"></label>
</form>


</div>
<!--  Login Action -->
<?php 


@include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    // header("Location: index.php");
}

if (isset($_POST['submit1'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM officers WHERE Fusname='$email' AND 	Fpsword='$password'";
	if (mysqli_query($conn, $sql)) {
		header("Location: ./OfficerUI.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>


</header>
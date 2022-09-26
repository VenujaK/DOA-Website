<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="./css/ContactUs.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
	
	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Contact Us</h2>
				<input type="text" class="field" id="a" placeholder="Your Name">
				<input type="text" class="field" id="b" placeholder="Your Email">
				<input type="text" class="field" id="c" placeholder="Phone">
				<textarea placeholder="Message" id="d" class="field"></textarea>
				<button class="btn" onclick="cus()">Send</button>
			</div>
		</div>
	</div>
</body>
<script>
	function cus(){
		var a1= document.getElementById('a');
		var a2= document.getElementById('b');
		var a3= document.getElementById('c');
		var a4= document.getElementById('d');
		if(a1==0||a2==0||a3==0||a4==0){
			alert('Thank You For Sharing');
		}else{
			alert('Thank You For Sharingsss');
		}
		
		
	}
</script>
</html>
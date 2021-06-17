<html>
<head>
	<title>Welcome to BUS TICKET RESERVATION SYSTEM</title>
	<style type="text/css">
		body{
			background-image: url("bus1.png");
			background-repeat: no-repeat;
			background-size: cover;
			display: flex;
			animation:ani 5s linear infinite;
		}
		@keyframes ani{
			25%{
				background-image: url("bus2.png");
			}
			60%{
				background-image: url("bus3.png");
			}
		}
		.sub-container{
			width: 500px;
			height: 500px;
			background-color: white;
			margin-left: 600px;
			margin-top: 100px; 		
			border-radius: 30px;
		}
		.sub-container:hover{
			box-shadow:     1px 0px 17px 0px rgba(0, 0, 255, 1);
		}
		ul{
			display: flex;
			list-style: none;
		}
		ul li{
			padding: 40px;
			font-size: 20px;
			font-weight: bold;
			transition: 1s;
			transition-property:background-color;
		}
		ul li:hover{
			background-color: blue;
		}
		form
		{
			color: rgb(0, 230, 230);
			text-align: center;
		}
		a{
			color: rgb(0, 230, 230);
			text-decoration: none;
		}
		input{
			border: none;
		    outline: none;
		    border-bottom: 2px solid blue;		
		    width: 70%;
		}
		#btn1{
			width: 100px;
			color: rgb(0, 230, 230);
			font-weight: bold;	
			background-color: black;
		}
		.container{
			display: flex;
		}
		iframe{
			opacity: 1;
			border-radius:30px; 
		}
	</style>
</head>
	<body>
	   <div class="container">
	   	 <div class="sub-container">
	   	 	<nav>
	   	 		<ul>
	   	 			<li><a href="home.php">| Home</a></li>
	   	 			<li><a href="time.php">| Time</a></li>
	   	 			<li><a href="#">| Location</a></li>
	   	 		</ul>
	   	 	</nav>
			<div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.4995656950555!2d72.80372231490544!3d19.34750998693273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ae78c7a9bb6d%3A0x5d9359dc6802bd97!2sKhop-wadi%20cross!5e0!3m2!1sen!2sin!4v1618208493964!5m2!1sen!2sin" width="500" height="420" style="border:0;" allowfullscreen="" loading="fast"></iframe>
			</div>	   		
	   	 </div>
	   </div>	
	</body>
</html>
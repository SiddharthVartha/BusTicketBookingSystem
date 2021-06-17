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
			opacity: 0.9;
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
			padding: 10px;
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
		#btn2{
			width: 100px;
			margin-top: 100px;
			color: rgb(0, 230, 230);
			font-weight: bold;	
			background-color: black;
		}
		span{
			font-size: 20px;
			font-weight: bold;
		}
	</style>
	<script type="text/javascript">
		function b() {
			window.open("route.php");
		}
	</script>
</head>
	<body>
	   <div class="container">
	   	 <div class="sub-container">
	   	 	<nav>
	   	 		<ul>
	   	 			<li><a href="home.php">| Home</a></li>
	   	 			<li><a href="time.php">| Time</a></li>
	   	 			<li><a href="location.php">| Location</a></li>
	   	 			<li><a href="#">| History</a></li>
	   	 			<li><a href="#">| Admin</a></li>
	   	 		</ul>
	   	 	</nav>
	
	   	 	<form method="post" action="regconnection.php">
	   	 		<br>
		   	 	<h2>Registration</h2><br>	
		   	 	<tr>
					<td><span>Name:</span></td>
					<td><input type="name" name="name" required></td><br></br>
				</tr>
				<br>
		   	 	<tr>
		   	 		<td><span>Email Id:</span></td>
		   	 		<input type="Email Id" name="EmailId" required><br><br>
		   	 	</tr>
		   	 	<br>
		   	 	<button id="btn2" onclick="b()">Submit</button>
	   	    </form>
	   	 </div>
	   </div>	
	</body>
</html>
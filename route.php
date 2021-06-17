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
		
		a{
			color: rgb(0, 230, 230);
			text-decoration: none;
		}
		#select{
			    padding-left: 45px;
    			padding-top: 20px;
			    display: flex;
			    flex-direction: column;

		}
		#bt{
			margin-left: 230px;
			margin-top: 50px; 
		}
	</style>
</head>
	<body>
	   <div class="container">
	   	<form  action="sendotp.php" id="otpsend" method="post">
	   	 <div class="sub-container">
	   	  <div id="select">
	   	  	<h2>Where are you?</h2>
		   	  <select id="sel1">
		   	  	<option value="1" name="Vasai gaon depo" selected>Vasai gaon depo</option>
		   	  	<option value="2" name="Papdi" >Papdi</option>
		   	  	<option value="3" name="Bhabhola">Bhabhola</option>
		   	  	<option value="4" name="Manikpur">Manikpur</option>
		   	  	<option value="5" name="Vasai station">Vasai station</option>
		   	  </select>
		   	  <br>
		   	  <br>
		   	<h2>Choose your Destination</h2>
		   		<select id="sel2">
		   	  	<option value="1" name="Vasai gaon depo" selected>Vasai gaon depo</option>
		   	  	<option value="2" name="Papdi">Papdi</option>
		   	  	<option value="3" name="Bhabhola">Bhabhola</option>
		   	  	<option value="4" name="Manikpur">Manikpur</option>
		   	  	<option value="5" name="Vasai station">Vasai station</option>
		   	  </select>
		   	  <br><br>
		   	<h2>Number of tickets</h2>
		   		<input type="text" autocomplete="off"  name="tkit" required>  
	   	  </div>		
	   	  <br>
	   	  <input name="rs" id="rs" type="hidden">
	   	  <br> 		
	   	  <button id="bt">Book Ticket</button>
	   	 </div>
	   	 </form>
	   </div>
	</body>
	<script>
		let bt1=document.getElementById('bt');
		bt1.addEventListener("click",function(){
		let t1=document.getElementById('sel1');
		let t2=document.getElementById('sel2');
		let s1=t1.options[t1.selectedIndex].value;
		let s2=t2.options[t2.selectedIndex].value;
		console.log(s1)
		console.log(s2)
		if(s1==s2){
			alert("You selected same Source & Destination");
			document.getElementById("otpsend").addEventListener("submit", function(event){
  					event.preventDefault();
			});
		}
		else{
			let rs=Math.abs(s1-s2);
			if (rs==1) {
				document.getElementById('rs').value=20;
			}
			if (rs==2) {
				document.getElementById('rs').value=30;
			}
			if (rs==3) {
				document.getElementById('rs').value=40;
			}
			if (rs==4) {
				document.getElementById('rs').value=50;
			}
			document.getElementById("otpsend").addEventListener("submit", function(event){
  					event.returnValue = true;
			});
			window.open("OTP.php");
		}
		});
	</script>
</html>


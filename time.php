<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=">
  <title>Clock</title>
  <style>
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
    #clock{
      font-family: "Lato", sans-serif;
      color: #30473F;
      margin-top: 30%;
      height: 80px;
      background-color: #37F17F; 
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 50px;
    }
  </style>
</head>

<body>
  <div class="container">
       <div class="sub-container">
        <nav>
          <ul>
            <li><a href="home.php">| Home</a></li>
            <li><a href="#">| Time</a></li>
            <li><a href="location.php">| Location</a></li>
          </ul>
        </nav>
      <div>
        <div id="clock">
        </div>
      </div>
      </div>
      </div>  
  <script>
      function clock() {
      let date = new Date();
      let hrs = date.getHours();
      let mins = date.getMinutes();
      let secs = date.getSeconds();
      let period = "AM";
    
      if (hrs == 0) hrs = 12;
      if (hrs > 12) {
        hrs = hrs - 12;
        period = "PM";
      }
    
      hrs = hrs < 10 ? `0${hrs}` : hrs;
      mins = mins < 10 ? `0${mins}` : mins;
      secs = secs < 10 ? `0${secs}` : secs;
    
      let time = `${hrs}:${mins}:${secs} ${period}`;
      setInterval(clock, 1000);
      document.getElementById("clock").innerText = time;
    }
    
    clock();

  </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Dashboard</title>


<style> 
.text {
    color: white;
    border: double;
    font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 5vw;
    margin: 0 auto;
    padding: 20px;
    width: 30%;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -120%);
    mix-blend-mode: screen;
    }

    .label_text {
    color: white;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 1.1vw;
    margin: 0 auto;
    padding: px;
    width: 10%;
    text-align: center;
    position: absolute;
    top: 38%;
    left: 50%;
    transform: translate(-50%, 100%);
    mix-blend-mode: screen;
    }



  .login_b {
    color: black;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 1.5vw;
    margin: 0 auto;
    padding: 5px;
    width: 10%;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-120%, 50%);
    mix-blend-mode: screen;

  }  
  .guest_b {
    color: black;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 1.5vw;
    margin: 0 auto;
    padding: 5px;
    width: 10%;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(30%, 50%);
    mix-blend-mode: screen;

  }  


body {
    background-image: url(../images/background_image.png);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
}

.top-nav {
    border:ridge;
    background-color: whitesmoke;
    overflow: hidden;
}

.top-nav a {
    font-family: 'Courier New', Courier, monospace;
    float: left;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

.top-nav a:hover {
    background-color: #ddd;
    color: black;
}

.topnav a.active {
background-color: #04AA6D;
color: white;
}


</style>

</head>
<body>
        
        <div class = "top-nav"> 
            <a class = "active" href="#home">Home</a>
            <a href = "#product">Products</a>
            <a href = "#contact">Contact</a>
            <a href = "#about">About</a>
        </div>


        <div class = "text">Makotek</div>
        <div class = "label_text">Computer Services</div>
        <a href ="../pages/login_page.php">
        <button class = "login_b">Login</button>
        </a>

        <a href ="../pages/guest_page.php">
        <button class = "guest_b">Guest</button>
        </a>
    
</body>
</html>
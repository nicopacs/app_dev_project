<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ecommerce</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
body{
    background-image: url(../images/background_image.png);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;




}
.text-center{
    color: white;
    font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 3vw;
    margin: 0 auto;
    padding: 2px;
    width: 50%;

    
    text-shadow:
      
      1px -1px 0 #111,
      -1px 1px 0 #111,
       1px 1px 0 #111;
    }

.form-label{
    color: blanchedalmond;
    font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    padding: .5px;
    margin: 0 auto;
    width: 30%;
    text-shadow:
      
      1px -1px 0 #111,
      -1px 1px 0 #111,
    
}
.form-text{
    color: white;
    font-size: .8vw;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-style: italic;
    padding: 3px;
    margin: 0 auto;
    text-shadow:
      
      1px -1px 0 #111,
      -1px 1px 0 #111,
      1px -1px 0 #111,
}

.login{
    color: wheat;
    font-style: italic;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    padding: 3px;
    margin: 0 auto;
    text-shadow:
      
      1px -1px 0 #000,
}
.btn_sub{

color: black;
border: double;
border-color: black;
font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
font-size: 1vw;
margin: 0 auto;
padding: 5px;
width: 20%;
}
</style>


</head>


<body>
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
    <form class="border shadow p-3 rounded" action="../php/check_login.php" method="post" style="width: 500px">

      <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
          <?= $_GET['error'] ?>
        </div>
      <?php } ?>

      <h1 class=text-center p-3> LOGIN </h1>

      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Never share your email with anyone else.</div>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" aria-describedby="passHelp">
        <div id="passHelp" class="form-text">Never share your password with anyone else.</div>
      </div>

      <a href="register_page.php" class="login"> Create an account</a>
      <br>
      <br>
      <button type="submit" class="btn_sub">Submit</button>
    </form>
  </div>
</body>


</html>
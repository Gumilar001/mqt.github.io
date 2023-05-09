<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="This is a login page template based on Bootstrap 5">
  <title>MQTT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <style type="text/css">
   .form-section {
    float: right; /* mengatur float ke kanan */
    width: 70%; /* mengatur lebar form section menjadi 50% dari lebar halaman */
  }

  .form-left {
    float: left; /* mengatur float ke kanan */
    width: 30%; /* mengatur lebar form section menjadi 50% dari lebar halaman */
  }  
  html{
    height: 100%;
  }

   body {
   background: linear-gradient(to right, #76BDF0, #E496BC);
   min-height: 100%;
   }

   button{
    border-radius: 7px;
    border: #5396E5 1px;
    background-color: #5396E5;
    color: white;
   }

   .blok {
      position: relative; left: 50px;
			background-color: #fff;
			overflow: hidden;
			/* display: flex; */
      width: 1400px;
      height: 70px;
			justify-content: space-between;
			align-items: center;
			padding: 10px;
      border-radius: 8px;
		}

    
</style>
</head>
<body>
<nav class="navbar navbar-expand">
        <div class="container">
          <a class="navbar-brand" href="#"><h1 style="color: black;">MQTT</h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">        
                <nav class="right navbar-nav ms-auto">
              <li class="nav-item-right">
              <button type="button" >
                <img style="margin-right: 5px; margin-bottom: 5px;" src="/image/Turn off.png" width="20px" height="20px">CONNECT</button>
              </li>
            </nav>
          </div>
        </div>
      </nav>
      <ul class="nav justify-content-center blok">
  <li class="nav-item">
    <a class="nav-link active" href="#"><img src="/image/program.png">Program</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><img src="/image/text.png">Text</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><img src="/image/hypertext.png">Hypertext</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"><img src="/image/time.png">time</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#"><img src="/image/temp.png">Temperature</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><img src="/image/ac.png">Animated Character</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><img src="/image/send.png">Send</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"><img src="/image/adjusttime.png">Adjust Time</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><img src="/image/udisk.png">Disk</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"><img src="/image/preview.png">Preview</a>
  </li>
</ul>
<style>
:left {
  width: 100px;
  background-color: #eee;
}

ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

li {
  text-align: left;
}

a {
  display: block;
  padding: 10px;
  color: #333;
  text-decoration: none;
}

a:hover {
  background-color: #ddd;
}</style>
<div class="form-left" style="position: relative; left: 50px;">
<div style="border-radius:8px; position: relative; top: 20px; width: 250px; height: 400px; background-color: #eee;">
<nav class="left">
  <ul>
    <li><a href="#">Menu 1</a></li>
    <li><a href="#">Menu 2</a></li>
    <li><a href="#">Menu 3</a></li>
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
          </ul>
        </li>
    <li><a href="#">Menu 4</a></li>
  </ul>
  <img style="position: relative; top: 150px;" src="/image/min.png">
  <img style="position: relative; top: 150px; left: 190px;" src="/image/plus.png">
</nav>
</div>
</div>
<div class="form-section">
  <img src="/image/1.png">
</div>

</body>
<script type="script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="author" content="Muhamad Nauval Azhar">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="This is a login page template based on Bootstrap 5">
  <title>MQTT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <style type="text/css">
   .form-section {
    float: right; /* mengatur float ke kanan */
    width: 30%; /* mengatur lebar form section menjadi 50% dari lebar halaman */
  }

  .form-left {
    float: left; /* mengatur float ke kanan */
    width: 60%; /* mengatur lebar form section menjadi 50% dari lebar halaman */
  }  

  body {
   background: linear-gradient(to right, #BD0EE9, #76BDF0);
 } 
 .lingkaran{
  width: 200px;
  height: 200px;
  background: #dac52c;
  border-radius: 100%;
  vertical-align: center;
  overflow: hidden;
}

.gambar{
  position: relative;
  z-index: 1;
  top: 0px;
  left: 0px;
}
.tex{
  /*position: absolute;*/
  margin-bottom: 20px;
  /*left: 60px;
  z-index: 2;*/
  color: #fff;
}

.tengah {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
  }

</style>
</head>
<body>

  <section class="h-100" class="body">
    <div class="form-left" style="position: relative;">
      <br><img class="gambar" src="img/Group 1.png" >
      <div style="position: absolute;top: 40px;left: 90px;">
        <br><br><br><h3 style="color: #6430E3;" >Welcome</h3>
        <h1 class="tex">Connect to MQTT to Continue</h2>
        </div>
      </div>
      <div class="container h-100">      
        <div class="form-section">
          <!-- <div class="text-center my-5">
            <div style="width: 300px; height: 300px; border-radius: 50%; background-color: #ccc;">
              <img src="img/Saturn.png" >
            </div>
          </div> -->
          <div class="card shadow-lg" style="top: 100px;right: 120px;">
            <div class="card-body p-5">
              <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                <div class="mb-3" style="margin-top: 120px" >
                  <input placeholder="Username" id="email" type="email" class="form-control" name="email" value="" required autofocus>
                  <div class="invalid-feedback">
                    Email is invalid
                  </div>
                </div>
                <div class="mb-3">
                  <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>
                  <div class="invalid-feedback">
                    Password is required
                  </div>
                </div>

                <div class="tengah" style="margin-top: 100px">
                  <!-- <div class="form-check">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                    <label for="remember" class="form-check-label">Remember Me</label>
                  </div> -->                  
                  <button type="submit" class="btn btn-primary">
                  Login
                  </button>
                </div>                
              </form>
            </div>
            <div class="card-footer py-3 border-0">
              <div class="text-center">
                Don't have an account? <a href="register.html" class="text-dark">Create One</a>                
              </div>
            </div>
          </div>
          <div >
          <img src="img/Vectary texture.png" style="margin-right: 150px;"></div>
          <!-- <div class="text-center mt-5 text-muted">
            Copyright &copy; 2017-2021 &mdash; Your Company  -->
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
<script type="script.js"></script>
</body>
</html>
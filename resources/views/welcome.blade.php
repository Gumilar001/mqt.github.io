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
  float: left;
  position: relative; bottom: 500px; left: 85px;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  background-color: #fff;
  box-shadow: 3px 10px 10px gray;
  text-align: center;
  align-items: center;
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
      <br><img class="gambar" src="/image/1.png" alt="My Image">

      <img style="position: relative; bottom: 950px " src="/image/image1.png">

      <div style="position: absolute;top: 60px;left: 90px;">
        <br><br><br><h3 style="color: #6430E3;" >Welcome</h3>
        <h1 class="tex">Connect to MQTT to Continue</h2>
        </div>
      </div>

      
    <section class="h-100">
      <div class="container h-100">      
        <div class="form-section">
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
                    <a href="/konfig" type="submit" class="btn btn-primary">
                      Connect
                    </a>                              
                </div>                
              </form>
              <div class="card-footer py-3 border-0">
                <div class="text-center">
                  {{-- Don't have an account? <a href="/konek" >Create One</a>  --}}
                  Don't have an account? <a href="/regis" >Sign Up</a>                               
                </div>
              </div>
            </div>
          </div>
          <div >        
        </div>
      </div>
    </div>
    <div class="lingkaran">
      <img src="/image/Saturn.png" width="200px" height="200px">
      <h3 style="position: relative; bottom: 50px;">MQTT</h3>
    </div>
  <img style="position: relative; right: 1100px;" src="/image/image2.png">
  <img style="position: relative; bottom: 420px; left: 100px;" src="/image/image3.png">
  </section>
</body>
</body>
</html>
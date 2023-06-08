<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Sign In</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to right, #BD0EE9, #76BDF0);
        }
        .lingkaran{
            float: center;
            position: relative; bottom: 600px; left: 650px; 
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background-color: #fff;
            box-shadow: 3px 10px 10px gray;
            text-align: center;
            align-items: center;
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
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5" >                    
                </div>
					<div style="position: relative; top: 130px" class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="name">Name</label>
									<input id="name" type="text" class="form-control" name="name" value="" required autofocus>
									<div class="invalid-feedback">
										Name is required	
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="" required>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<p class="form-text text-muted mb-3">
									By registering you agree with our terms and condition.
								</p>

								<div class="tengah">
									<button type="submit" class="btn btn-primary ">
										Register	
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Already have an account? <a href="/welcome" class="text-dark">Login</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div  class="lingkaran">
                        <img style="position: relative; bottom: 10px;" src="/image/Saturn.png" width="200px" height="200px">
                        <h3 style="position: relative; bottom: 60px;">MQTT</h3>
                </div>
	</section>

	<script src="js/login.js"></script>
</body>
</html>

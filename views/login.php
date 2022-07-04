<?php require APP_ROOT . '/views/includes/head_section.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Login</title>
</head>
<body>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign in</p>

                <form action='<?php echo APP_ROOT?>\views\login.php' method="post" class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="username" id="form3Example1c" class="form-control" />
                      <label class="form-label" for="form3Example1c">User Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="password" id="form3Example4c" class="form-control" />
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Login">
                  </div>
                  Not a user?<a class="text-decoration-none" href="<?php echo URL_ROOT ?>/user/register"> Register here</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include APP_ROOT . '/views/includes/footer.php'; ?>



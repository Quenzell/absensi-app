<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Forgot Password</title>

</head>
<style>
  .navbar{
    background-color: #59BDE2;
  }
  .navbar b{
    color: white;
    margin-left: 10px;
    font-size: 17px;
  }
  .card{
    margin-top: 30px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0, 0.2);
  }
  .nav-item{
    background-color: #59BDE2;
    color: white;
    font-weight: bold;
  }
  .btn{
    width: 568px;
    margin-left: 135px;
    height: 30px;
    font-size: 13px;
  }
</style>
<body>
    <nav class="navbar navbar-light">
        <a class="navbar-brand" href="/">
          <img src="https://i.ibb.co/xF71hsd/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
          E-ABSEN POLIWANGI
        </a>
        <a class="nav-item nav-link" href="signup">SIGN UP</a>
      </nav>
      
      <!-- card -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                  Reset Password
              </div>
              <div class="card-body">
                <form method="POST" action="">
                <form>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="form-group row mb-0">
            <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
          </div>
        </div>

</body>
</html>

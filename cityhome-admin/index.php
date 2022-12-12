<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Login Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/custom.css">
</head>
<body id="login">
  <div class="container login">
    <div class="col-md-6 offset-md-3">
      <br>
      <br>
      <br>
      <h3 class="text-center">Admin Login</h3>
      <br>
        <form action="adminLogin.php" method="POST">          
          <div class="form-group">
            <input type="email" name="email" placeholder="Enter Email" class="form-control">
          </div>
          <div class="form-group">
            <input type="password" placeholder="Password" name="pwd" class="form-control">
          </div>
          <button class="btn btn-secondary" name="submit">Login</button>
          <hr>
          <small>Forgot Password? <a href="reset-password.php">Click Here to Reset Password</a></small>
        

      <br>
      <br>
    </div>
  </div>
  <style>
    #forget{
      color: black;
    }
  </style>
  <script>
            $(document).ready(function(){
              $('#forget').on('submit',resetProcess);

              function resetProcess(e){
                  $.ajax({
                    method:"POST",
                    url:"password-reset.php",

                    success:function(successText){
                      window.location.assign('change-pass.php');
                    }
                  });
                }
              }
   </script>
</body>
</html>
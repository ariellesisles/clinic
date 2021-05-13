<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
    <!-- Custom CSS -->
   <style type="text/css">
    #alert,#register-box, #forgot-box{
        display:none;
    } 
   
    *{
        font-family: 'Poppins', sans-serif;
        color:#00D2FF;
       
    }
    /* text field */
    input[type=text],input[type=password],input[type=email] {
        border: 3px solid #00D2FF; 
        -webkit-transition:
        transition: 0.5s;
        outline: none;  
    }

    input[type=text]:focus,input[type=password]:focus {
    border: 3px solid #00D2FF;
    }
     /* text field end */

    
    </style>

</head>
<body class="bg-dark" >
    <div class="container mt-4">
       <div class="row">
        </div>
    </div>

    <!---------------- Login form --------------------->
    
            <div class="row">
            
            <!-- alertbox -->
                <div class="col-lg-4 offset-lg-4 bg-light rounded" id="login-box">
                <a href="index.php"><button type="button" class="m-3 btn btn-outline-primary">Back </button></a>
                <h2 class="text-center mt-2">Student Login </h2>
                <i class="fas fa-user-circle fa-4x d-flex justify-content-center align"></i>
                <form action="" method="post" role="form" class="p-2" id="login-form" >
            <!-- username -->
                <div class="form-group">
                    <label for="username" class="custom-control-label">Username </label> 
                    <input type="text" id="username" name="user" class="form-control" placeholder="Username" required>   
                </div>

            <!-- password -->
            <div class="form-group">
                <label for="password" class="custom-control-label">Password</label>
                <input type="password"  id="password" name="pass" class="form-control" placeholder="Password" required>     
            </div>

            <!-- checkbox -->
            <div class="form-group">
                <div class="custom-control custom-checkbox" style="height: 5rem">
                    <input type="checkbox" name="rem" class="custom-control-input" id="customCheck">
                    <label for="customCheck" class="custom-control-label">Remember Me</label>
                    <a href="#" id="forgot-btn" class="float-right">Forgot Password?</a>
            </div>

            <!-- submit button -->
            <div class="form-group">
                <input type="submit" name="login" id="login" value="Login" class="btn btn-primary btn-block">   
                </div>
                <div class="form-group">
                <p class="text-center">Don't have an account yet?<a href="register.php" id="signup-btn"> Sign-up</a></p>
            </div>
</div>
</form>
</div>
</div>

<!---------------- Forgot Password --------------------->
            <div class="row">
            <!-- alertbox -->
                <div class="col-lg-4 offset-lg-4 bg-light rounded" id="forgot-box">
                <h2 class="text-center mt-2">Reset Password </h2>
                <form action="" method="post" role="form" class="p-2" id="forgot-form">

            <!-- Email @password reset -->
                <div class="form-group">
                    <small class="text-muted">
                        To reset your password, enter your meail address and we will send reset password
                        we will send reset password instructions on your email.
                    <!-- <label for="username" class="custom-control-label">Username </label>  -->
                    <input type="email" id="femail" name="user" class="form-control" placeholder="E-mail" required>   
                </div>

        

            <!-- Back button -->
            <div class="form-group">
                <input type="submit" name="forgot" id="forgot" value="Reset" class="btn btn-primary btn-block">   
                </div>
                <div class="form-group text-center" >
                <a href="#" id="back-btn">Back</a>
            </div>
</div>
</form>
</div>
</div>

</div>
<!-- js query -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- student login page interface -->
<script type="text/javascript">

<!-- student login page interface -->
    $(document).ready(function(){
        $('#signup-btn').click(function(){
            $('#register-box').show();
                $('#login-box').hide();
        });
     <!-- student already registered interface -->
        $('#rlogin-btn').click(function(){
            $('#register-box').hide();
                $('#login-box').show();
        });
        <!-- student forgot password interface -->
        $('#forgot-btn').click(function(){
            $('#login-box').hide();
            $('#forgot-box').show();
        });
        <!-- student forgot password > login interface -->
        $('#back-btn').click(function(){
            $('#forgot-box').hide();
            $('#login-box').show();
        });
         
    }); 
</script>
</body>
</html>
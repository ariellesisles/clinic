<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

<!-- bootstrap cdn -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
 <!-- Custom CSS -->
 
 <style> 
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
            select{ 
                -webkit-transition:
                transition: 0.5s;
                outline: none;
                width:150px;
                border: 3px solid #00D2FF;
                -webkit-border-top-right-radius: 5px;
                -webkit-border-bottom-right-radius: 5px;
                -moz-border-radius-topright: 5px;
                -moz-border-radius-bottomright: 5px;
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
                border-top-left-radius: 5px;
                border-bottom-left-radius: 5px;
                padding:2px;
                height: 40px !important;
                width: 40vh;
                font-size: 14px;
                color: #6C757D !important;
                font-family: 'Poppins', sans-serif;
            }
            select selected{
                color: #6C757D !important;  
            }
       
</style>
    
</head>
<body class="bg-dark">
<div class="row mt-4">

        <!-- Registration form -->
            <!-- alertbox -->
                <div class="col-lg-4 offset-lg-4 bg-light rounded" id="register-box">
                <a href="index.php"><button type="button" class="m-3 btn btn-outline-primary">Back</button></a>
                <h2 class="text-center mt-2">Register</h2>
                <form action="" method="post" role="form" class="p-2" id="register-form">

            <!---------------------------------------------------Personal Information---------------------------->
               <!--Student Number-->
                <div class="tab">Personal Information:
                    <div class="form-group">
                        <span class="input-group-addon"></span>
                        <input name="student_no" placeholder="Student Number" class="form-control" type="text">
                    </div>
                    <div class="row g-3">
                <!-- First name -->
                <div class="form-group col">
                    <input type="text" name="fname" class="form-control" placeholder="First Name" aria-label="First name">
                </div>

                <!-- Middle Name-->
                <div class="col">
                    <input type="text" name="mname" class="form-control" placeholder="Middle name" aria-label="Middle name">
                </div> 

                <!-- Last name -->
                <div class="col">
                    <input type="text" name="lname" class="form-control" placeholder="Last name" aria-label="Last name">
                </div> 
                </div>
            </div>  
            <!--Department-->
                <div class="form-group">
                <div class="row">
                <div class="col">    
                <select name="department" required>
                    <option value="" disabled selected hidden>Department</option>
                    <option value="elementary">Elementary</option>
                    <option value="hs">High School</option>
                    <option value="shs">Senior High School</option>
                    <option value="college">College</option>
                </select>
                </div>
                <!-- Year Level -->
                <div class="col">
                    <input type="text" name="yearlevel" class="form-control" placeholder="Year Level" aria-label="Year level">
                </div> 
               </div>
                

                    <!-------------------------------------------- Contact information ----------------------------->
                    <div class="tab">Contact Information:
                    
                    <!--Phone Number-->
                    <div class="form-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input name="contact_no" placeholder="(ex.+639x-xxxx-xxxx)" class="form-control" type="text">
                    </div>
                    
                    <!-- Email-->
                    <div class="form-group">
                        <!-- <label for="password" class="custom-control-label">Password</label> -->
                        <input type="email"  id="email" name="email" class="form-control" placeholder="E-mail" required>     
                    </div>
                    </div>

                    <!--------------------------------------- Login Information ---------------------------------->
                    <div class="tab">Login Information:
                     <!-- Username -->
                     <div class="form-group">
                        <!-- <label for="password" class="custom-control-label">Password</label> -->
                        <input type="text"  id="uname" name="uname" class="form-control" placeholder="Username" required>     
                      </div>

                    <!-- Password-->
                    <div class="form-group">
                        <!-- <label for="password" class="custom-control-label">Password</label> -->
                        <input type="password"  id="pass" name="pass" class="form-control" placeholder="Password" required>     
                    </div>
 
                    <!--Confirm Password-->
                    <div class="form-group" style="height:5rem">
                        <!-- <label for="password" class="custom-control-label">Password</label> -->
                        <input type="password"  id="cpass" name="cpass" class="form-control" placeholder="Confirm Password" required>     
                    </div>
                    
                    <!----------------------------------Password recovery Questions--------------------------------------->
                    <div class="tab">Password Recovery Questions:
                     <!-- Question1 -->
                     <div class="form-group">
                        <!-- <label for="password" class="custom-control-label">Password</label> -->
                        <input type="text"  id="q1" name="q1" class="form-control" placeholder="What is your mother's maiden name?" required>     
                      </div>
                      <!-- Question2 -->
                      <div class="form-group">
                        <!-- <label for="password" class="custom-control-label">Password</label> -->
                        <input type="text"  id="q2" name="q2" class="form-control" placeholder="What is the name of the town where you were born?" required>     
                      </div>
                      <!-- Question2 -->
                      <div class="form-group">
                        <!-- <label for="password" class="custom-control-label">Password</label> -->
                        <input type="text"  id="q3" name="q3" class="form-control" placeholder="In what city or town did your mother and father meet?" required>     
                      </div>

                     <!------------------------------------------------------------------------------------------------------->
                    

                    <!-- checkbox Terms & conditions -->
                    <div class="form-group">
                        <div class="custom-control custom-checkbox"style="height:2rem">
                        <input type="checkbox" name="rem" class="custom-control-input" id="customCheck2">
                        <label for="customCheck2" class="custom-control-label">I agree to the <a href="#">Terms & Conditions</a></label> 
                    </div>

                    <!-- Register button -->
                    <div class="form-group">
                        <input type="submit" name="register" id="register" value="Register" class="btn btn-primary btn-block">   
                        </div>
                        <div class="form-group">
                        <p class="text-center">Already Registered?<a href="login.php" id="rlogin-btn"> Login Here</a></p>
                    </div>

</div>
            
</form>
</div>
<!-- js query -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</div>
</body>
</html>
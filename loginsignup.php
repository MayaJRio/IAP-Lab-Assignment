<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
       <meta charset="utf-8">
       <title>Login | Sign Up</title>
       <link rel="stylesheet" href="css/style.css">
       <meta name="viewport" content="width=device-width, intial-scale=1.0">
    </head>
    <body>
        <div class="wrapper">
            <div class="title-text">
                <div class="title login">Login</div>
                <div class="title signup">SignUp</div>
            </div>
            
            <div class="form-container">
                <div class="slide-controls">
                    <input type="radio" name="slider" id="login" checked>
                    <input type="radio" name="slider" id="signup">
                    <label for="login" class="slide login">Login</label>
                    <label for="signup" class="slide signup">SignUp</label>
                    <div class="slide-tab"></div>
                </div>
                <div class="form-inner">

                    <form action="index.php" method="post" class="login">
                        <div class="field">
                            <input type="text" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="field">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="pass-link"><a href="#">Forgot Password?</a></div>
                        <div class="field">
                           <input type="submit" name="login" value="Login">
                        </div>
                        <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
                    </form>

                    <form action="index.php" method="post" class="signup">
                        <div class="field">
                            <input type="text" name="fullname" placeholder="Full Name" required>
                        </div>
                        <div class="field">
                            <input type="text" name="emailaddress" placeholder="Email Address" required>
                        </div>
                        <div class="field">
                            <input type="text" name="city" placeholder="City of Residence" required>
                        </div>
                        <div class="field" style="margin-bottom: 50px;">
                            <p>Select a Profile Picture</p>
                            <input type="file" style="padding-top: 10px;">
                        </div>
                        <div class="field">
                            <input type="password" name="password" placeholder="Create Password" pattern=".{8,}"   required title="8 characters minimum" required>
                        </div>
                        <div class="field">
                            <input type="submit" name="register" value="Sign Up">
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        <script>
            const loginText = document.querySelector(".title-text .login");
            const loginForm = document.querySelector("form.login");
            const loginBtn = document.querySelector("label.login");
            const signupBtn = document.querySelector("label.signup");
            const signupLink = document.querySelector("form .signup-link a");
            signupBtn.onclick = (()=>{
              loginForm.style.marginLeft = "-50%";
              loginText.style.marginLeft = "-50%";
            });
            loginBtn.onclick = (()=>{
              loginForm.style.marginLeft = "0%";
              loginText.style.marginLeft = "0%";
            });
            signupLink.onclick = (()=>{
              signupBtn.click();
              return false;
            });
          </script>
      
    </body>
</html>
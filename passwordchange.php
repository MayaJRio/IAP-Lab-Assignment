<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
       <meta charset="utf-8">
       <title>Change Password</title>
       <link rel="stylesheet" href="css/style.css">
       <meta name="viewport" content="width=device-width, intial-scale=1.0">
    </head>
    <body>
        <div class="wrapper">
            <div class="title-text">
                <div class="title reset">Change Password</div>
            </div>
            
            <div class="form-container">
                <div class="form-inner">
                    <form action="index.php" method="post" class="reset">
                        <div class="field">
                            <input type="text" name="email" placeholder="Email" required>
                        </div>
                        <div class="field">
                            <input type="password" name="oldpassword" placeholder="Old Password" required>
                        </div>
                        <div class="field">
                            <input type="password" name="newpassword" placeholder="New Password" required>
                        </div>
                        <div class="field">
                            <input type="password" name="new-password" placeholder="Confirm Password" required>
                        </div>
                        <div class="field">
                           <input type="submit" name="changepassword" value="Change Password">
                        </div>
                        <div class="signup-link">Changed your mind?<a href="profile.php"> Return to profile</a></div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assest/css/style.css" rel="stylesheet" type="text/css">
    <link href="assest/css/responsive.css" rel="stylesheet" type="text/css">
    <title>Registration form</title></title>
    <script defer src="assest/js/app.js"></script>
</head>
<body>
    <section id="wrapper"><!--id wrapper starts from here-->
        <div id="container"><!--id container for signup form starts from here-->
            <h2 class="form-heading">Create Account</h2>
            <form action="assest/tasks/new_user.php" method="post" autocomplete="off" class="user-form">
                <div class="parent-folder"><!-- parent folder for inline input fields -->
                    <div class="input-controller">
                        <label for="firstname">First Name :</label>
                        <input type="text" name="firstname" id="firstname" class="data-field" />
                    </div>

                    <div class="input-controller">
                        <label for="lastname">Last Name :</label>
                        <input type="text" name="lastname" id="lastname" class="data-field" />
                    </div>
                </div><!--class parent-folder ends here-->

                <!------------------------------------------->
                <div class="input-controller">
                        <label for="useremail">Enter Your Email :</label>
                        <input type="email" name="useremail" id="useremail" class="data-field" />
                </div>

                <div class="input-controller">
                        <label for="userpassword">Enter Password :</label>
                        <input type="password" name="userpassword" id="userpassword" class="data-field" />
                </div>

                <div class="input-controller">
                        <label for="retypepass">Retype Password :</label>
                        <input type="password" name="retypepass" id="retypepass" class="data-field" />
                </div>

                <div class="input-controller">
                        <button type="submit" name="register" id="register" class="register-user">Create</button>
                </div>
            </form>
                <p class="login-link">Already have an account ? <a href="login.php">Login Here</a></p>
           <?php 
                if(isset($_GET['usersemptyfields'])){echo '<div id="errorbox">All Fields Are Mendatory!</div>';} 
                else if(isset($_GET['userinvalidfirstname'])){echo '<div id="errorbox">Invalid First Name!</div>';}
                else if(isset($_GET['userinvalidlastname'])){echo '<div id="errorbox">Invalid Last Name!</div>';}
                else if(isset($_GET['userinvalidemail'])){echo '<div id="errorbox">Invalid Email Address!</div>';}
                else if(isset($_GET['userinvalidpassword'])){echo '<div id="errorbox">Invalid Password!</div>';}
                else if(isset($_GET['userretypemismatched'])){echo '<div id="errorbox">Password Does Not Matched!</div>';}
                ?>
        </div><!--id container for signup form ends here-->
       
    </section> <!--id wrapper ends here-->
</body>
</html>
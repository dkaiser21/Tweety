<?php
require_once "backend/initialize.php";


    if(is_post_request()){
        if(isset($_POST['firstName']) && !empty($_POST['firstName'])){
            $fname=FormSanitizer::formSanitizerName($_POST['firstName']);
            $lname=FormSanitizer::formSanitizerName($_POST['lastName']);
            $email=FormSanitizer::formSanitizerString($_POST['email']);
            $password=FormSanitizer::formSanitizerString($_POST['pass']);
            $password2=FormSanitizer::formSanitizerString($_POST['pass2']);
            
            $username=$account->generateUsername($fname,$lname);

            $wasSuccessful=$account->register($fname,$lname,$username,$email,$password,$password2);
            if($wasSuccessful){
                session_regenerate_id();
                $_SESSION['userLoggedIn']=$wasSuccessful;
                if(isset($_POST['remember'])){
                    $_SESSION['rememberMe']=$_POST['remember'];
                    redirect_to(url_for("verification"));
                }
            }
        }
    }
?>
<?php $pageTitle="SignUp | Tweety"; ?>
<?php require_once 'backend/shared/header.php'; ?>
<section class="sign-container">
    <nav class="nav-header-sign__up">
        <ul>
            <li>
                <a href="index.php">
                    <i class="fa fa-twitter"></i>
                        home
                </a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Language:English</a>
            </li>
        </ul>
    </nav>
    <div class="form-container">
        <div class="form-content">
            <div class="header-form-content">
                <h2>create your account<h2>
            </div>
            <form action="sign.php" class="formField" method="POST">
                <div class="form-group">
                <?php echo $account->getErrorMessage(Constant::$firstNameCharacters);  ?> 
</br>
                    <label for="firstName">FirstName</label>
                    <input type="text" name="firstName" id="firstName"  value="<?php getInputValue("firstName") ?>" autocomplete="off" required>
                </div>
                <div class="form-group">
                <?php echo $account->getErrorMessage(Constant::$lastNameCharacters);  ?> 
                </br>
                    <label for="LastName">LastName</label>
                    <input type="text" name="lastName" id="lastName" value="<?php getInputValue("lastName") ?>" autocomplete="off" required> 
                </div>
                <div class="form-group">
                <?php echo $account->getErrorMessage(Constant::$emailInUse);  ?>
                <?php echo $account->getErrorMessage(Constant::$emailInValid);  ?>
                </br>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="<?php getInputValue("email") ?>" autocomplete="off" required>
                </div>
                <div class="form-group">
                <?php echo $account->getErrorMessage(Constant::$passwordDoNotMatch);  ?>
                <?php echo $account->getErrorMessage(Constant::$passwordNotAlphanumeric);  ?>
                <?php echo $account->getErrorMessage(Constant::$passwordLength);  ?> 
                </br>
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="cpass">Confirm Password</label>
                    <input type="password" name="pass2" id="cpass" autocomplete="off" required>
                </div>
                <div class="spassword">
                    <input type="checkbox" class="form-checkbox" id="s-password" onclick="showPassword()">
                    <label for="s-password">Show Password</label>
                </div>
                <div class="form-btn-wrapper">
                    <button type="submit" class="btn-form">SignUp</button>
                    <input type="checkbox" class="form-checkbox" id="check" name="remember" >
                    <label for="check">Remember me</label>
                </div>
        </div>
        <footer class="form-footer">
        <p>Already have an account. <a href="login.php">Login Now</a></p>
    </footer>
    </div>
    
</section>  
<script src="frontend/assets/js/showPassword.js"></script>
<?php $pageTitle="SignUp | Tweety"; ?>
<?php require_once 'backend/shared/header.php'; ?>
<section class="sign-container">
    <nav class="nav-header-sign__up">
        <ul>
            <li>
                <a href="index.php">
                    <i class="fa fa-twitter"><i>
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
            <form action="signUp.php" class="formField">
                <div class="form-group">
                    <label for="firstName">FirstName</label>
                    <input type="text" name="firstName" id="firstName" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="LastName">LastName</label>
                    <input type="text" name="lastName" id="lastName" autocomplete="off"> 
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="cpass">Confirm Password</label>
                    <input type="password" name="pass2" id="cpass" autocomplete="off">
                </div>
                <div class="spassword">
                    <input type="checkbox" class="form-checkbox" id="s-password" >
                    <label for="s-password">Show Password</label>
                </div>
                <div class="form-btn-wrapper">
                    <button type="submit" class="btn-form">SignUp</button>
                    <input type="checkbox" id="check" name="remember">
                    <label for="check">Remember me</label>
                </div>
        </div>
    </div>
    <footer class="form-footer">
        <p>Already have an account. <a href="login.php">Login Now</a></p>
    </footer>
</section>  
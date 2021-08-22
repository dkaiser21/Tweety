
<?php $pageTitle="Login on Tweety | Tweety"; ?>
<?php require_once 'backend/shared/header.php'; ?>
<section class="sign-container">
    <?php require_once 'backend/shared/signNav.php'; ?>
    <div class="form-container">
        <div class="form-content">
            <div class="header-form-content">
                <h2>Login to Tweety<h2>
            </div>
            <form action="sign.php" class="formField">
                <div class="form-group">
                    <label for="un">Username or Email</label>
                    <input type="text" name="un" id="un" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" autocomplete="off">
                </div>
                <div class="spassword">
                    <input type="checkbox" class="form-checkbox" id="s-password" onclick="showPassword()" >
                    <label for="s-password">Show Password</label>
                </div>
                <div class="form-btn-wrapper">
                    <button type="submit" class="btn-form">Log in</button>
                    <input type="checkbox" class="form-checkbox" id="check" name="remember" onclick="showLoginPassword()">
                    <label for="check">Remember me</label>
                </div>
        </div>
        <footer class="form-footer">
        <p>New to Tweety? <a href="sign.php">signup for tweety</a></p>
    </footer>
    </div>
    
</section>  
<script src="frontend/assets/js/showPassword.js"></script>
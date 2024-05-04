<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- SIGN UP -->
    <div class="container" id="signUp">
        <h1 class="form-title">Register</h1>
        <form action="register.php" method="post">
            <div class="inputGroup">
                <i class="fas fa-user"></i>
                <input type="text" id="fName" name="fName" placeholder="hh" required>
                <label for="">First Name</label>
            </div>
            <div class="inputGroup">
                <i class="fas fa-user"></i>
                <input type="text" id="lName" name="lName" placeholder="hh" required>
                <label for="">Last Name</label>
            </div>  
            <div class="inputGroup">
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" placeholder="hh" required>
                <label for="">Email</label>
            </div>
            <div class="inputGroup">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="hh" required>
                <label for="">Password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>
        <p class="or">
            --------------or--------------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Already Have Account ?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>
    <!-- SIGN IN -->
    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form action="register.php" method="post">
              
            <div class="inputGroup">
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" placeholder="hh" required>
                <label for="">Email</label>
            </div>
            <div class="inputGroup">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="hh" required>
                <label for="">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
            --------------or--------------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Don't have account yet ?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>
    <script src="main.js"></script>
</body>
</html>
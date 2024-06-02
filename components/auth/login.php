<?php
require_once "../../config/config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "apoo if";
    // Validate and sanitize input data (not included in this example)
    if ($username !== "" && $password !== "") {
        // Debugging output
        echo "name: " . $username;
        echo "password: " . $password;
        $sql = "SELECT * FROM iconic.user WHERE uusername='$username' AND upassword='$password'";
        
        $result = mysqli_query($conn, $sql);
        // Prepare SQL statement to insert user data into the database
        $row = mysqli_fetch_array($result);
        echo"datta";
        if ($row && $row["usertype"] == "admin") {
            $_SESSION['userId'] = $row["id"];
            $_SESSION['username'] = $username;
            $_SESSION['usertype'] = "admin";
            header("Location: ../dashboard/dashboard.php");
            exit();
        } else {
            $message = "Email or password do not match";
            $_SESSION['loginMessage'] = $message;
            header("Location: login.php");
            exit();
        }

    } else {
        echo "All fields are required.";
    }
} else {
    echo "apoo else";

    // Redirect to signup page if accessed directly without form submission
    // header("Location: signup.php");
    // exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body>
    <section class="card">
        <div class="inner_card_1">
            <nav>
                <div class="logo">
                    <h2>Iconic</h2>
                </div>
                <div class="signup_btn">
                    <p>Don't have an account?</p>
                    <button class="nav_btn"><a href="signup.php">Sign Up</a></button>
                    <button class="nav_btn"><a href="../../index.php">Home</a></button>
                </div>
            </nav>

            <div class="inner_card_1-01">
                <div class="left_card">
                    <h2>Log in</h2>

                    <form method="POST" action="login.php">
                        <label for="username">Username or Email</label>
                        <input type="text" name="username" placeholder="Enter your username or email" id="username" required>

                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Enter your password" id="password" required>

                        <button type="submit" class="form_btn">Log In</button>
                    </form>
                    <div class="forgot_btn">
                        <p>Forgot Password?</p>
                    </div>
                    <div class="signup_btn_mobileScreen">
                        <p>Don't have an account? &nbsp;</p>
                        <a style="color: black;" href="signup.php">Sign Up</a>
                    </div>
                    <div class="social_login_btn">
                        <p>Log in with</p>
                        <a href=""><i class="fa-brands fa-google icons_margin"></i></a>
                        <a href=""><i class="fa-brands fa-facebook icons_margin"></i></a>
                    </div>
                </div>
                <div class="right_card">
                    <img src="book_img_without_bg.png" alt="">
                </div>
            </div>
        </div>
    </section>
</body>
</html>

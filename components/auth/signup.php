<?php
// Include the database connection file
echo"apoo0";
// session_start();
// error_reporting(0);
// error_reporting(E_ALL);
// ini_set('display_errors', 1);


require_once "../../config/config.php";

echo"apoo1";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    echo"apoo if";
    // Validate and sanitize input data (not included in this example)
    if($name !== "" && $username !== "" && $password !== "") {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare SQL statement to insert user data into the database
        $sql = "INSERT INTO user (uname, uusername, upassword) VALUES ('$name', '$username', '$hashed_password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: signup.php");
            // exit();
            echo"chal gya ";
        } else {
            echo"chal nhi ";
            echo "Error: Unable to register user.";
        }
    }
    else{
        echo "All fields are required.";
    }
} else {
    echo"apoo else";

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
                    <p>Already have an account?</p>
                    <button class="nav_btn"><a href="login.php">Log In</a></button>
                    <button class="nav_btn"><a href="../../index.php">Home</a></button>
                </div>
            </nav>

            <div class="inner_card_1-01">

                <div class="right_card ">
                    <img src="book_img_without_bg.png" alt="">
                </div>

                <div class="left_card ">

                    <h2>Sign Up</h2>

                    <form action="signup.php" method="POST">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Enter your username or email" id="username">
                        
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="Enter your username or email" id="username">

                        <label for="password">Create Password</label>
                        <input type="password" name="password" placeholder="Create your password" id="password">

                        <label for="password">Confirm Password</label>
                        <input type="password" name="password" placeholder="Enter your confirm password" id="password">
                        <button class="form_btn"><a href="login.html">Sign Up</a></button>

                        <div class="signup_btn_mobileScreen">
                            <p>Already have an account? &nbsp;</p>
                            <a style="color: black;" href="login.html">Log in</a>
                        </div>
    


                    </form>
            
                </div>
                

            </div>
        </div>
    </section>
</body>

</html>
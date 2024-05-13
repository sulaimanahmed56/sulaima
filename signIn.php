<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        <?php //here under all style of php....pag
        ?>@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap");

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;

            background: url("assets/o1.jpg") no-repeat;
            background-position: center;
            background-size: cover;
        }

        .form-box {
            position: relative;
            width: 400px;
            height: 550px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            backdrop-filter: blur(15px);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h2 {
            font-size: 2em;
            color: #fff;
            text-align: center;
        }

        .inputbox {
            position: relative;
            margin: 30px 0;
            width: 310px;
            border-bottom: 2px solid #fff;
        }

        .inputbox label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: #fff;
            font-size: 1em;
            pointer-events: none;
            transition: 0.5s;
        }

        input:focus~label,
        input:valid~label {
            top: -5px;
        }

        .inputbox input {
            width: 100%;
            height: 40px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            padding: 0 35px 0 5px;
            color: #fff;
        }

        .inputbox ion-icon {
            position: absolute;
            right: 8px;
            color: #fff;
            font-size: 1.2em;
            top: 20px;
        }

        .forget {
            margin: -15px 0 15px;
            font-size: 0.9em;
            color: #fff;
            display: flex;
            justify-content: space-between;
        }

        .forget label input {
            margin-right: 3px;
        }

        .forget label a {
            color: #fff;
            text-decoration: none;
        }

        .forget label a:hover {
            text-decoration: underline;
        }

        button {
            width: 100%;
            height: 40px;
            border-radius: 40px;
            background: #fff;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1em;
            font-weight: 600;
            transition: box-shadow 0.15s;
            /*add shadow*/
        }

        button:hover {
            background-color: rgb(0, 26, 193);
            opacity: 0.5;

            box-shadow: 5px 5px 10px rgba(255, 0, 183, 0.5);
        }

        .register {
            font-size: 0.9em;
            color: #f0f2f0;
            text-align: center;
            margin: 25px 0 10px;
        }

        .register p a {
            text-decoration: none;
            color: #fff;
            font-weight: 600;
        }

        .register p a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value"><?php //Here is starting session for sign in password and useremail
                                    ?>
                <?php
                session_start();
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $useremail = $_POST['useremail'];
                    $password = $_POST['password'];
                    // Here is if statment and php
                    if ($useremail === 'Mohammed@gmail.com' && $password === '555') {
                        $_SESSION['useremail'] = $useremail;
                        header('Location: Home.html');
                        exit();
                    } else {
                        echo "<h3 class='error' >Wrong Email or Password<br>Please try again.</h3>";
                    }
                }
                ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <h2>Login</h2>
                    <h2>Choose your<br> Room with US</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="useremail" require>
                        <label>Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" require><label>Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox" />Remember Me
                            <a href="#">Forgot Password ?</a></label>
                    </div>
                    Email : Mohammed@gmail.com<br>
                    Password: 555 <br><br>
                    <a href="Home.html"><button>Register</button></a>
                </form>

            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>Landing Page</title>
    <style>
        body {
            margin: 0;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-inline: 40px;
        }

        main {
            background-image: url('./assets/university-wallpaper.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 10rem;
        }

        h1 {
            font-size: 5rem;
        }

        table {
            width: 200px;
        }

        table,
        th,
        td {
            border: 3px solid black;
            border-collapse: collapse;
        }

        img {
            opacity: 0;
            transform: translateY(-100%);
            animation: enter 500ms ease-in 400ms forwards;
        }

        @keyframes enter {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        iframe {
            width: 100%;
            height: 700px;
        }

        .button-link {
            display: inline-block;
            padding: 1rem 2rem;
            border-radius: 100px;
            background-color: #34495c;
            color: white;
            text-decoration: none;
            text-transform: capitalize;
            font-weight: 700;
            font-size: 1.5rem;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-block: 4rem;
            padding-top: 1rem;
        }

        .names,
        h1 {
            background-color: rgba(255, 255, 255, .2);
            backdrop-filter: blur(5px);
            padding: 1rem;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header style="background-color: rgba(62, 102, 106,.9);">
        <h3>COMP-270 : WEB DEVELOPMENT</h3>
        <img src="assets/nizwa.png" alt="an image about the sultan" width="300" />
    </header>

    <main align="Center">
        <div>
            <h1>HOTEL BOOKING</h1>
            <div class="names">
                <?php
                echo "<mark>DR.Mohammed Ambu saidi</mark><br>";
                echo "<br>STUDENT: Sulaiman Ahmed Al-Ghfri <br>ID: 17959392";
                echo "<br>STUDENT: Idris Said Altamimi <br>ID: 12753575";
                echo "<br>STUDENT: Anas Yaqoob Alabri <br>ID:14287945";
                echo "<br>STUDENT: Muhanad Salim Albusaidi <br>ID: 15676614<br><br>";
                ?>
            </div>
        </div>
        <video width="750" height="400" controls autoplay>
            <source src="video/oman.mp4" type="video/mp4">
        </video>
    </main>

    <div align='center'>
        <div class="wrapper">
            <h4>You will need the following information to enter the website</h4>
            <table>
                <tr>
                    <th>Email</th>
                    <td>Mohammed@gmail.com</td>
                </tr>
                <tr>
                    <th>Password </th>
                    <td>555</td>
                </tr>
            </table>
        </div>
        <a href="signIn.php" class="button-link">
            visit our website
        </a>
    </div>

    <a style="margin-top: 10rem; margin-bottom: 4rem;" class="button-link" href="#iframe">This our university website</a>
    <div align='center' class="iframe" id="iframe">
        <iframe src="https://www.unizwa.edu.om/" title="description"></iframe>
    </div>

</body>

</html>
<<<<<<< HEAD
<!-- register.php -->
=======
<!-- register.html -->
>>>>>>> 73e9f9f7fd320782a277272f4d28d68e45c3f911
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija - TechGadgets</title>
<<<<<<< HEAD
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        /* Styles moved inside for better readability */
=======
    <style>
>>>>>>> 73e9f9f7fd320782a277272f4d28d68e45c3f911
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
<<<<<<< HEAD
=======

>>>>>>> 73e9f9f7fd320782a277272f4d28d68e45c3f911
        body {
            font-family: Arial, sans-serif;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }
        .register-form {
            max-width: 400px;
            margin: 0 auto;
<<<<<<< HEAD
            padding: 20px;
        }
=======
            margin-top: 5%;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

>>>>>>> 73e9f9f7fd320782a277272f4d28d68e45c3f911
        .register-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }
<<<<<<< HEAD
=======

>>>>>>> 73e9f9f7fd320782a277272f4d28d68e45c3f911
        .register-form label {
            display: block;
            margin-bottom: 10px;
        }
<<<<<<< HEAD
=======

>>>>>>> 73e9f9f7fd320782a277272f4d28d68e45c3f911
        .register-form input[type="text"],
        .register-form input[type="password"],
        .register-form input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
<<<<<<< HEAD
=======

>>>>>>> 73e9f9f7fd320782a277272f4d28d68e45c3f911
        .register-form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
<<<<<<< HEAD
            margin-left: 38%;
=======
>>>>>>> 73e9f9f7fd320782a277272f4d28d68e45c3f911
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }
<<<<<<< HEAD
        h1 {
            font-size: 2rem;
        }
        nav ul {
            list-style: none;
        }
=======

        h1 {
            font-size: 2rem;
        }

        nav ul {
            list-style: none;
        }

>>>>>>> 73e9f9f7fd320782a277272f4d28d68e45c3f911
        nav ul li {
            display: inline-block;
            margin-right: 1rem;
        }
<<<<<<< HEAD
=======

>>>>>>> 73e9f9f7fd320782a277272f4d28d68e45c3f911
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
<<<<<<< HEAD
        #intro {
            background-image: url("/Slike/BG-Register.webp");
            height: 100vh;
            padding-top: 200px;
        }
=======
>>>>>>> 73e9f9f7fd320782a277272f4d28d68e45c3f911
    </style>
</head>
<body>
<header>
<<<<<<< HEAD
    <h1 class="naslov">TechGadgets</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>
</header>
<div id="intro" class="bg-image shadow-2-strong">
    <div class="register-form">
        <h2>Registration</h2>
        <form action="/includes/signup.inc.php" method="post">
            <label for="FullN">Full Name:</label>
            <input type="text" id="FullN" name="name">
            <label for="username">Username:</label>
            <input type="text" id="username" name="uid">
            <label for="password">Password:</label>
            <input type="password" id="password" name="pwd">
            <label for="pwdr">Password Repeat:</label>
            <input type="password" id="pwdr" name="pwdrepeat">
            <label for="email">E-Mail:</label>
            <input type="text" id="email" name="email">
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyfields") {
            echo "<p style = 'margin-left: 875px'>Fill in all fields!</p>";
        } else if ($_GET["error"] == "invaliduid") {
            echo "<p style = 'margin-left: 800px'>Choose a proper username!</p>";
        } else if ($_GET["error"] == "invalidemail") {
            echo "<p style = 'margin-left: 800px'>Choose a proper email!</p>";
        } else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p style = 'margin-left: 800px'>Passwords do not match!</p>";
        } else if ($_GET["error"] == "stmtfailed") {
            echo "<p style = 'margin-left: 800px'>Something went wrong, try again!</p>";
        }else if ($_GET["error"] == "usernametaken") {
            echo "<p style = 'margin-left: 800px'>Username already taken!</p>";
    }else if ($_GET["error"] == "usernametaken") {
        echo "<p style = 'margin: 0 auto'>You have already signed up!</p>";
}
}
    ?>
</div>
<footer>
    <p>© 2024 TechGadgets. All rights reserved.</p>
</footer>
</body>
</html>
=======
        <h1 class = "naslov">TechGadgets</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Registracija</a></li>



            </ul>
        </nav>
    </header>
    <div class="register-form">
        <h2>Registracija</h2>
        <form action="register.php" method="post">
            <label for="username">Uporabniško ime:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Geslo:</label>
            <input type="password" id="password" name="password" required>

            <label for="email">E-pošta:</label>
            <input type="email" id="email" name="email" required>


            <button type="submit">Registracija</button>
        </form>
    </div>
    <footer>
        <p>© 2024 TechGadgets. All rights reserved.</p>
    </footer>
</body>
</html>
>>>>>>> 73e9f9f7fd320782a277272f4d28d68e45c3f911

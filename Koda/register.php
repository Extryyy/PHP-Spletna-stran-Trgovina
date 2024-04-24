<!-- register.html -->
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija - TechGadgets</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

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
            margin-top: 5%;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .register-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .register-form label {
            display: block;
            margin-bottom: 10px;
        }

        .register-form input[type="text"],
        .register-form input[type="password"],
        .register-form input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        .register-form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }

        h1 {
            font-size: 2rem;
        }

        nav ul {
            list-style: none;
        }

        nav ul li {
            display: inline-block;
            margin-right: 1rem;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
<header>
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

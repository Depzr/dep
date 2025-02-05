<!-- views/home.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - MVC Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to My MVC Website</h1>
        <nav>
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=about">About</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Home Page</h2>
        <p>This is the homepage of my simple PHP MVC website.</p>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My MVC Website</p>
    </footer>
</body>
</html>
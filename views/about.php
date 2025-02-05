<!-- views/about.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - MVC Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>About My MVC Website</h>
        <nav>
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=about">About</a></li>
                <li> <a href="index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>About Page</h2>
        <p>This website is created to demonstrate a simple PHP MVC structure.</p>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My MVC Website</p>
    </footer>
</body>
</html>



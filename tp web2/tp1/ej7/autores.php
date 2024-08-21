<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.html">Calculadora</a></li>
            <li><a href="pi.php">Pi</a></li>
            <li><a href="autores.php">Autores</a></li>
        </ul>
    </nav>

    <main class="main_autores">
        <h1>Desarrolladores 🐱‍👓</h1>
        <form method="get" action="infoautores.php" class="form_autores">
            <div class="developer">
                <img src="./imagenes/vt1.png" alt="Edenita">
                <p>Edena - Fullstack developer</p>
                <button type="submit" name="developer" value="edena">Más Información</button>
            </div>
            <div class="developer">
                <img src="./imagenes/chatgpt.png" alt="chatgpt">
                <p>ChatGPT - QA engineer </p>
                <button type="submit" name="developer" value="chatgpt">Más Información</button>
            </div>
            <div class="developer">
                <img src="./imagenes/ishtar.jpg" alt="ishtar">
                <p>Ishtar - Psicologia</p>
                <button type="submit" name="developer" value="ishtar">Más Información</button>
            </div>
            <div class="developer">
                <img src="./imagenes/xampp.png" alt="xmpp">
                <p>XAMPP - Support by APACHE</p>
                <button type="submit" name="developer" value="xampp">Más Información</button>
            </div>
        </form>
    </main>
</body>
</html>

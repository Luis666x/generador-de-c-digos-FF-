<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Bienvenido a nuestra página</h1>
    </header>
    <main>
        <section>
            <h2>¡Gracias por registrarte!</h2>
            <p>Tu cuenta ha sido creada exitosamente.</p>
            <p><a href="index.html">Volver a la página de inicio</a></p>
        </section>
    </main>
    <footer>
        <p>© 2024 Todos los derechos reservados.</p>
    </footer>
</body>
</html>
CSS (styles.css):

css
Copy code
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header, footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
}

main {
    padding: 20px;
}

section {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
}

input[type="text"], input[type="email"], input[type="password"], input[type="submit"] {
    padding: 8px;
    margin-bottom: 10px;
}

input[type="submit"] {
    background-color: #333;
    color: #fff;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #555;
}
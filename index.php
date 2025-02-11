<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los Audaces</title>
    <script  src="script.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background-color: #000;
            /* Fondo negro */
            font-family: sans-serif;
            /* Fuente de letra para el texto */
            overflow-y: scroll;
            /* Habilita el scroll vertical */
        }

        header {
            position: fixed;
            width: 100%;
            background: #333;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: black;
            padding: 10px 20px;
        }

        .logo img {
            height: 50px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            /* justify-content: center; */
        }

        nav li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
        }

        section {
            padding: 100px 20px;
            min-height: 100vh;
        }

        #inicio {
            background: #f4f4f4;
        }

        #juegos {
            background: #e2e2e2;
        }

        #contacto {
            background: #ccc;
        }

        .hero {
            background: #333;
            color: white;
            padding: 50px 20px;
        }

        .btn {
            background: purple;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
        }

        .info {
            background: #f4f4f4;
            padding: 50px 20px;
        }

        footer {
            background: black;
            color: white;
            padding: 10px;
        }

        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                display: none;
            }

            .menu-toggle {
                display: block;
                background: none;
                border: none;
                color: white;
                font-size: 24px;
            }

            nav ul.show {
                display: flex;
            }
        }

        .hide {
            /* visibility: hidden; */
            /**mantiene el espacio y lo oculta */
            display: none;
            /**lo ocuta y no mantiene el espacio  */
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Los Audaces">
        </div>
        <button class="menu-toggle">☰</button>
        <nav>
            <ul>
                <li><a href="#productos">Productos</a></li>
                <li><a href="#juegos">Juegos</a></li>
                <li><a href="#contacto">Contáctanos</a></li>
                <li><a href="#entrar">Entrar</a></li>
                <li><a href="#carrito">🛒</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h1>¡Cambia tu vida con un solo boleto! ¡Participa ya!</h1>
        <button class="btn">Start Now</button>
    </section>

    <section class="info">
        <h2>¡La suerte está de tu lado!</h2>
        <p>Participa en nuestros juegos y gana grandes premios.</p>
    </section>
    <section id="productos" class="hide ">

    </section>
    <footer>
        <p>&copy; 2025 Los Audaces - Todos los derechos reservados.</p>
    </footer>

    <script>
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('nav ul').classList.toggle('show');
        });
    </script>
</body>

</html>
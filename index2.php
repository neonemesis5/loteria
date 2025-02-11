<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los Audaces</title>
    <!-- <link rel="stylesheet" href="style2.css"> -->
    <style>
        /* styles.css */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background-color: #000;
            color: white;
            overflow-y: scroll;
        }

        header {
            position: fixed;
            width: 100%;
            background: black;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            z-index: 1000;
        }

        .logo img {
            height: 100px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
        }

        .section {
            padding: 100px 20px;
            min-height: 100vh;
        }

        .hero {
            background: #333;
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

        .grid {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .item {
            background: #222;
            padding: 15px;
            border-radius: 10px;
        }

        .item img {
            width: 150px;
            height: auto;
            border-radius: 10px;
        }

        footer {
            background: black;
            padding: 10px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                display: none;
            }

            .menu-toggle {
                display: block;
            }

            nav ul.show {
                display: flex;
            }

            .grid {
                flex-direction: column;
                align-items: center;
            }
        }

        .hide {
            display: none;
        }
    </style>
    <script defer src="script2.js"></script>

</head>

<body>
    <header>
        <div class="logo">
            <img src="logo.jpg" alt="Los Audaces">
        </div>
        <button class="menu-toggle">☰</button>
        <nav>
            <ul>
                <li><a href="#" data-section="inicio">Inicio</a></li>
                <li><a href="#" data-section="juegos">Juegos</a></li>
                <li><a href="#" data-section="productos">Productos</a></li>
                <li><a href="#" data-section="contacto">Contáctanos</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="inicio" class="section">
            <div class="hero">
                <h1>¡Cambia tu vida con un solo boleto! ¡Participa ya!</h1>
                <button class="btn">Participar</button>
            </div>
        </section>

        <section id="juegos" class="section hide">
            <h2>Juegos Disponibles</h2>
            <div class="grid">
                <div class="item" id="prod1">
                    <img src="iphone.jpg" alt="iPhone 15 Plus">
                    <p>iPhone 15 Plus</p>
                </div>
                <div class="item" id="prod2">
                    <img src="tv.jpg" alt="TV Samsung 50">
                    <p>TV Samsung 50"</p>
                </div>
                <div class="item" id="prod3">
                    <img src="moto.jpg" alt="Motocicleta KTM 890">
                    <p>Motocicleta KTM 890</p>
                </div>
            </div>
        </section>

        <section id="productos" class="section hide">
            <h2>Nuestros Productos</h2>
            <p>Explora nuestra variedad de productos exclusivos.</p>
        </section>

        <section id="contacto" class="section hide">
            <h2>Contáctanos</h2>
            <p>Para cualquier consulta, contáctanos a través de nuestro formulario.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Los Audaces - Todos los derechos reservados.</p>
    </footer>
</body>

</html>
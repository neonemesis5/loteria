<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los Audaces</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            color: white;
            overflow-y: scroll;
            position: relative;
        }

        /* Fondo del logo */
        body::before {
            content: "";
            background-image: url('logo.jpg'); /* Ruta de tu logo */
            background-size: contain; /* Ajusta el logo al contenedor */
            background-repeat: no-repeat; /* Evita que se repita */
            background-position: center; /* Centra el logo */
            opacity: 0.5; /* Ajusta la opacidad del logo */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Coloca el fondo detrás del contenido */
        }

        header {
            position: fixed;
            width: 100%;
            background: rgba(0, 0, 0, 0.8); /* Fondo semitransparente */
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            z-index: 1000;
        }

        .logo img {
            height: 300px;
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
            position: relative;
            z-index: 1; /* Asegura que el contenido esté sobre el fondo */
        }

        .hero {
            background: rgba(51, 51, 51, 0.8); /* Fondo semitransparente */
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
            background: rgba(34, 34, 34, 0.8); /* Fondo semitransparente */
            padding: 15px;
            border-radius: 10px;
        }

        .item img {
            width: 150px;
            height: auto;
            border-radius: 10px;
        }

        footer {
            background: rgba(0, 0, 0, 0.8); /* Fondo semitransparente */
            padding: 10px;
            position: relative;
            z-index: 1; /* Asegura que el footer esté sobre el fondo */
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

            body::before {
                background-size: cover; /* Ajusta el logo para cubrir toda la pantalla en móviles */
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

    <div class="section hero">
        <h1>Bienvenidos a Los Audaces</h1>
        <p>Explora nuestros juegos y productos.</p>
        <button class="btn">Ver más</button>
    </div>

    <div class="section">
        <h2>Nuestros Juegos</h2>
        <div class="grid">
            <div class="item">
                <img src="juego1.jpg" alt="Juego 1">
                <p>Juego 1</p>
            </div>
            <div class="item">
                <img src="juego2.jpg" alt="Juego 2">
                <p>Juego 2</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 Los Audaces. Todos los derechos reservados.</p>
    </footer>
</body>

</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLOW - Panel de Control</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f7f5f0;
            color: #2c2c2c;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            text-align: center;
            padding: 60px 20px 40px;
        }
        .logo {
            font-size: 3.5rem;
            font-weight: 300;
            letter-spacing: 0.6rem;
            margin-bottom: 10px;
        }
        .tagline {
            font-size: 1rem;
            color: #767676;
            font-style: italic;
        }
        .menu-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            width: 100%;
        }
        .card {
            background: #ffffff;
            border: 1px solid #e6e4df;
            padding: 30px 20px;
            text-align: center;
            text-decoration: none;
            color: #2c2c2c;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.1rem;
            transition: all 0.3s ease;
        }
        .card:hover {
            background-color: #2c2c2c;
            color: #f7f5f0;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <header>
        <h1 class="logo">SLOW</h1>
        <p class="tagline">Gestión escolar simplificada y estructurada.</p>
    </header>

    <main class="menu-container">
        <a href="consultar_alumnos.php" class="card">Alumnos</a>
        <a href="consultar_profesores.php" class="card">Profesores</a>
        <a href="consultar_grupos.php" class="card">Grupos</a>
        <a href="consultar_facturas.php" class="card">Facturación</a>
    </main>

</body>
</html>
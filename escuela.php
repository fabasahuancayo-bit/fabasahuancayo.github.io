<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Bienvenida - Escuela Black Hollow</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
/* 🌈 Fondo general animado */
body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #ffdf00, #ff8c42, #ff4d4d, #4db8ff, #3d89ff, #7fff7f, #52c234, #ff66c4);
    background-size: 400% 400%;
    animation: rainbow 20s ease infinite;
    overflow-x: hidden;
}

@keyframes rainbow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* 🏛️ Columnas laterales */
.columna {
    position: fixed;
    top: 0;
    width: 90px;
    height: 100vh;
    background-size: cover;
    background-repeat: no-repeat;
    opacity: 0.9;
    z-index: 1;
}
.col-left { left: 0; background-image: url('img/columna.png'); }
.col-right { right: 0; background-image: url('img/columna.png'); }

/* 🖼️ Encabezado con imagen institucional */
header {
    position: relative;
    height: 300px;
    background: url('assets/img/fon_escuela.jpg') no-repeat center center;
    background-size: cover;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: white;
    text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
    border-bottom: 5px solid #ff8c42;
    z-index: 2;
}

header::after {
    content: "";
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.35);
    z-index: 1;
}

header h1 {
    font-size: 2.8em;
    z-index: 2;
    margin: 10px 0 0 0;
}

header img {
    width: 110px;
    border-radius: 50%;
    z-index: 2;
    box-shadow: 0 0 20px rgba(0,0,0,0.4);
    border: 3px solid white;
}

/* 🎨 Menú de navegación colorido */
nav {
    background: white;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    padding: 15px;
    gap: 20px;
    border-bottom: 5px solid #ff4d4d;
    z-index: 2;
    position: relative;
}

nav a {
    text-decoration: none;
    font-weight: bold;
    font-size: 17px;
    padding: 10px 18px;
    border-radius: 12px;
    color: white;
    transition: all 0.3s ease;
    box-shadow: 0 3px 8px rgba(0,0,0,0.2);
}

/* Colores diferentes para cada enlace */
nav a[href*="escuela.php"]      { background: linear-gradient(45deg, #ffdf00, #ffb400); }
nav a[href*="institucion.php"]  { background: linear-gradient(45deg, #ff8c42, #ffb382); }
nav a[href*="nivel.php"]        { background: linear-gradient(45deg, #ff4d4d, #ff8080); }
nav a[href*="academico.php"]    { background: linear-gradient(45deg, #4db8ff, #6fd3ff); }
nav a[href*="vida_escolar.php"] { background: linear-gradient(45deg, #3d89ff, #6ca9ff); }
nav a[href*="padres_estudiantes.php"] { background: linear-gradient(45deg, #7fff7f, #52c234); }
nav a[href*="contacto.php"]     { background: linear-gradient(45deg, #ff66c4, #ff8fe8); }
nav a[href*="login.php"]        { background: linear-gradient(45deg, #9b59b6, #c27af0); }

nav a:hover {
    transform: scale(1.1);
    filter: brightness(1.2);
    box-shadow: 0 6px 15px rgba(0,0,0,0.3);
}

/* 📜 Contenido principal */
.contenido {
    background: rgba(255, 255, 255, 0.95);
    width: 70%;
    margin: 50px auto;
    padding: 40px;
    border-radius: 25px;
    box-shadow: 0 0 25px rgba(0,0,0,0.3);
    animation: fadeIn 1.5s ease;
    position: relative;
    z-index: 2;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

h2 {
    text-align: center;
    color: #ff4d4d;
    font-size: 1.9em;
    margin-bottom: 10px;
}

.decor-line {
    width: 120px;
    height: 5px;
    background: linear-gradient(90deg, #ff4d4d, #ff8c42, #4db8ff);
    border-radius: 5px;
    margin: 15px auto 25px auto;
}

p {
    line-height: 1.8;
    color: #333;
    font-size: 1.05em;
    text-align: justify;
    margin-top: 20px;
}

/* 🌸 Imágenes decorativas flotantes */
.decor {
    position: absolute;
    opacity: 0.8;
    z-index: 1;
    animation: float 8s ease-in-out infinite;
}
.decor1 { top: 15%; left: 10%; width: 80px; animation-delay: 0s; }
.decor2 { bottom: 20%; right: 12%; width: 100px; animation-delay: 3s; }
.decor3 { top: 60%; left: 25%; width: 60px; animation-delay: 1.5s; }

@keyframes float {
    0%, 100% { transform: translateY(0); opacity: 0.9; }
    50% { transform: translateY(-20px); opacity: 1; }
}

/* 👣 Pie de página */
footer {
    text-align: center;
    padding: 20px;
    color: white;
    font-size: 14px;
    background: rgba(0,0,0,0.3);
    margin-top: 40px;
    position: relative;
    z-index: 2;
}

/* 📱 Adaptable a móviles */
@media (max-width: 768px) {
    .contenido { width: 90%; padding: 25px; }
    header { height: 220px; }
    header h1 { font-size: 1.8em; }
    nav { flex-direction: column; }
    nav a { font-size: 15px; padding: 8px 12px; }
    .columna { display: none; }
    .decor { display: none; }
}
</style>
</head>

<body>

<div class="columna col-left"></div>
<div class="columna col-right"></div>

<header>
    <img src="img/logo.png" alt="Logo">
    <h1>Escuela Black Hollow</h1>
</header>

<nav>
    <a href="escuela.php">Inicio</a>
    <a href="institucion.php">Institución</a>
    <a href="nivel.php">Niveles</a>
    <a href="academico.php">Académico</a>
    <a href="vida_escolar.php">Vida Escolar</a>
    <a href="padres_estudiantes.php">Padres</a>
    <a href="contacto.php">Contacto</a>
    <a href="login.php">Login</a>
</nav>

<!-- 🌸 Imágenes flotantes decorativas -->
<img src="img/flor1.png" class="decor decor1" alt="">
<img src="img/estrella.png" class="decor decor2" alt="">
<img src="img/flor2.png" class="decor decor3" alt="">

<div class="contenido">
    <h2>Bienvenida</h2>
    <div class="decor-line"></div>

    <p>
    La <strong>Escuela Black Hollow</strong> es una institución dedicada a la formación integral de sus estudiantes, guiándolos en el desarrollo de su identidad y en el fortalecimiento de sus habilidades académicas y emocionales. Aquí, cada alumno aprende a conocerse, a mantener el orden y a encontrar estabilidad, incluso en los momentos de silencio que a veces acompañan el aprendizaje.
    </p>

    <p>
    Ubicada en un entorno tranquilo y apartado, la escuela ofrece un ambiente donde la concentración fluye con naturalidad y donde todo parece mantenerse en un equilibrio particular. Nuestras instalaciones están diseñadas para brindar seguridad, disciplina y un espacio donde cada estudiante pueda observar, reflexionar y crecer… incluso cuando no comprende del todo lo que comienza a descubrir en sí mismo.
    </p>

    <p>
    La Escuela Black Hollow combina métodos educativos tradicionales con prácticas formativas que favorecen la introspección. Nuestro equipo docente acompaña cada proceso con atención, procurando que ningún alumno se sienta perdido, aunque el camino pueda resultar distinto para cada uno.
    </p>

    <p>
    Aquí valoramos el silencio, la observación y la constancia. Cada paso es guiado, cada duda es atendida y cada avance es registrado con cuidado. <em>Black Hollow</em> es un lugar donde los estudiantes no solo aprenden, sino que también encuentran aquello que necesitan, incluso si no sabían que lo estaban buscando.
    </p>
</div>

<footer>
    &copy; 2025 Escuela Black Hollow — Todos los derechos reservados 🌟
</footer>

</body>
</html>

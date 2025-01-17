<?php
require_once 'config/config.php';
require_once 'includes/header.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rey del Corte - Cursos de Barbería</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<section class="hero">
<img src="assets/images/logo.jpg" alt="">
    <h1>Curso de barbería del Rey del Corte</h1>
    <h2>Conviértete en uno de nosotros</h2>
    <a href="#description" class="cta-button">¿Quiénes somos?</a>
    <br><a href="#courses" class="cta-button">Conoce todos mis cursos</a><br>
</section>
<div id="linea"></div>
<br>
<section>
</section>
<section id="description" class="description">
<h1 class="textoTituloCursos">¿Quiénes somos?</h1>
<div class="linea2"></div><br><br>
    <?php
    // Datos dinámicos para la tarjeta de descripción
    $description = [
        'title' => '¿Quiénes somos?',
        'image' => 'assets/images/about-us.jpeg',
        'text' => 'Somos una academia líder en formación de barberos profesionales, con más de X años de experiencia en el sector. En el Rey del Corte, no solo enseñamos técnicas de corte y estilismo, sino que formamos verdaderos artistas del cabello y la barba.
        
        Nuestro equipo de instructores expertos te guiará paso a paso en tu journey para convertirte en un barbero profesional. Combinamos técnicas tradicionales con las últimas tendencias del mercado, asegurando una formación completa y actualizada.'
    ];

    include 'components/description-card.php';
    ?>
</section>
<br>
<br>
<div id="linea"></div>
<section id="courses" class="courses">
<h1 class="textoTituloCursos">Cursos disponibles</h1>
<div class="linea2"></div><br><br>
    <div class="courses-grid">
        <?php
        // Assuming courses data comes from database
        $courses = [
            [
                'title' => 'Growth Course',
                'image' => 'assets/images/foto1.jpeg',
                'button'=>'components/hotmart-button.php',
            ],
            [
                'title' => 'Premium Course',
                'image' => 'assets/images/foto2.jpeg',
                'button'=>'components/hotmart-button.php'
            ],
            [
                'title' => 'Cutting Course',
                'image' => 'assets/images/foto3.jpeg',
                'button'=>'components/hotmart-button.php'
            ]
        ];

        foreach ($courses as $course) {
            include 'components/course-card.php';
        }
        ?>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>


<a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" 
   class="whatsapp-button" 
   target="_blank">
    Resuelve tus dudas
</a>
</body>
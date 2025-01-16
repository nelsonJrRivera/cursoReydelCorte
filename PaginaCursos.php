<?php
require_once 'config/config.php';
require_once 'includes/header.php';
?>

<section class="hero">
<img src="assets/images/logo.jpg" alt="">
    <h1>Curso de barbería del Rey del Corte</h1>
    <h2>Conviértete en uno de nosotros</h2>
    <a href="#description" class="cta-button">¿Quiénes somos?</a>
    <br><a href="#courses" class="cta-button">Conoce todos mis cursos</a><br>
</section>
<body>
<section id="description" class="description">
    <br>
    <h2>¿Quiénes somos?</h2>
    <div class="description-content">
        <img src="assets/images/about-us.jpg" alt="Sobre nuestra barbería" class="description-image">
        <p class="description-text">
            Somos una academia líder en formación de barberos profesionales, con más de X años de experiencia en el sector. En el Rey del Corte, no solo enseñamos técnicas de corte y estilismo, sino que formamos verdaderos artistas del cabello y la barba.
            
            Nuestro equipo de instructores expertos te guiará paso a paso en tu journey para convertirte en un barbero profesional. Combinamos técnicas tradicionales con las últimas tendencias del mercado, asegurando una formación completa y actualizada.
        </p>
    </div>
</section>

<section id="courses" class="courses">
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
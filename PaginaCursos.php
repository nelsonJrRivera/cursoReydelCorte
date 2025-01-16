<?php
require_once 'config/config.php';
require_once 'includes/header.php';
?>

<section class="hero">
<img src="assets/images/logo.jpg" alt="">
    <h1>Curso de barberos del Rey del Corte.</h1>
    <h2>Bienvenidos a nuestro reino de barberos</h2>
    <a href="#courses" class="cta-button">Conoce todos mis cursos</a>
</section>
<body class="fondo">
    
</body>

<section id="courses" class="courses">
    <div class="courses-grid">
        <?php
        // Assuming courses data comes from database
        $courses = [
            [
                'title' => 'Growth Course',
                'image' => '/assets/images/foto1.jpg',
                'button'=>'components/hotmart-button.php',
            ],
            [
                'title' => 'Premium Course',
                'image' => '/assets/images/premium-course.jpg',
                'button'=>'components/hotmart-button.php'
            ],
            [
                'title' => 'Cutting Course',
                'image' => '/assets/images/cutting-course.jpg',
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

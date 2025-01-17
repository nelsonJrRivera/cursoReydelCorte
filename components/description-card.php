<?php
// Datos para la descripción
$description = [
    'image' => 'assets/images/about-us.jpeg',
    'title' => '¿Quiénes somos?',
    'text' => 'Somos una academia de barberos apasionada por transformar el oficio de la barbería en una verdadera forma de arte. Nos especializamos en formar profesionales comprometidos con la excelencia, la innovación y el servicio de calidad. Creemos en el poder de la capacitación constante para elevar los estándares de la industria y brindar a nuestros estudiantes las herramientas necesarias para destacarse en un mercado competitivo.

En nuestra academia, cada corte, técnica y estilo es una oportunidad para crear, aprender y crecer. Nos enorgullece ser un espacio donde tradición y modernidad se fusionan, y donde cada alumno es guiado a desarrollar su máximo potencial como barbero.'];
?>
<div class="description-card">
    <img src="<?php echo htmlspecialchars($description['image']); ?>" 
         alt="<?php echo htmlspecialchars($description['title']); ?>" 
         class="description-image">
         <br>
    <p class="description-text"><?php echo htmlspecialchars($description['text']); ?></p>
</div>

<style>
.description-card {
    background: white;
    border-radius: 15px;
    overflow: hidden; /* Cambié auto por hidden para evitar el desbordamiento */
    box-shadow: 2px 40px 150px rgba(0, 0, 0, 0.15); /* Sombra con color visible y opacidad */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    width: 90%;
    margin-left: 70px;
    align-items: center;
}
.description-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0); /* Sombra más intensa al pasar el mouse */
}

.description-card:hover {
    transform: translateY(-10px);
}

.description-image {
    width: 100%;
    height: 450px;
    object-fit: cover;
    border-bottom: 1px solid #eaeaea; /* Línea decorativa */
}

.description-content {
    padding: 20px;
    text-align: center;
    align-items: center;
}

.description-title {
    font-size: 1.8rem;
    margin: 15px 0;
    color: #333;
    align-self: center;
    position: relative;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.description-text {
    font-size: 1.3rem;
    line-height: 1.6;
    color: #555;
    width: 95%;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    margin-bottom: 2%;
}
</style>
<?php
include_once 'hotmart-button.php'; // Asegúrate de que la ruta sea correcta
?>
<div class="course-card">
    <img src="<?php echo htmlspecialchars($course['image']); ?>" 
         alt="<?php echo htmlspecialchars($course['title']); ?>" 
         class="course-image">
    <div class="course-content">
        <h3 class="course-title"><?php echo htmlspecialchars($course['title']); ?></h3>
        <?php 
        // Determinar la URL de Hotmart según el curso
        $hotmartUrl = '';
        switch($course['title']) {
            case 'Growth Course':
                $hotmartUrl = 'https://hotmart.com/';
                break;
            case 'Premium Course':
                $hotmartUrl = 'https://hotmart.com/';
                break;
            case 'Cutting Course':
                $hotmartUrl = 'https://hotmart.com/';
                break;
            default:
                $hotmartUrl = 'https://hotmart.com/';
        }
        
        // Renderizar el botón de Hotmart
        renderHotmartButton($hotmartUrl);
        ?>
    </div>
</div>

<style>
.course-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
    display: flex;
    flex-direction: column;
}

.course-card:hover {
    transform: translateY(-10px);
}

.course-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.course-content {
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    flex-grow: 1;
}

.course-title {
    font-size: 1.5rem;
    margin-bottom: 15px;
    color: #333;
    text-align: center;
}
</style>
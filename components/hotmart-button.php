<?php
// components/hotmart-button.php

// Define la URL de Hotmart
if (!defined('HOTMART_URL')) {
    define('HOTMART_URL', 'https://hotmart.com');
}

// Construir el enlace de Hotmart
$hotmart_link = HOTMART_URL;

function renderHotmartButton($url = 'https://hotmart.com/default-course') {
    ?>
    <a href="<?php echo htmlspecialchars($url); ?>" 
       class="hotmart-button" 
       target="_blank" 
       rel="noopener noreferrer">
        Comprar Curso
    </a>
    <style>
        .hotmart-button {
            display: inline-block;
            background-color: #FF6B00;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            text-align: center;
            margin-top: 15px;
            width: 100%;
            max-width: 200px;
            position: inherit;
        }

        .hotmart-button:hover {
            background-color: #E65C00;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
    <?php
}
?>

<div class="hotmart-container">
    <a href="<?php echo $hotmart_link; ?>"
        class="hotmart-button"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Ir a Hotmart">
        <!-- Icono personalizado para Hotmart -->
        <svg class="hotmart-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM16 13H13V16C13 16.55 12.55 17 12 17C11.45 17 11 16.55 11 16V13H8C7.45 13 7 12.55 7 12C7 11.45 7.45 11 8 11H11V8C11 7.45 11.45 7 12 7C12.55 7 13 7.45 13 8V11H16C16.55 11 17 11.45 17 12C17 12.55 16.55 13 16 13Z" fill="currentColor"/>
        </svg>
        <span class="hotmart-text">Acceder al curso</span>
    </a>
</div>

<style>
.hotmart-container {
    position: fixed;
    bottom: 20px;
    right: 200px;
    z-index: 1000;
}

.hotmart-button {
    display: flex;
    align-items: center;
    gap: 8px;
    background-color: #F04E23; /* Color de Hotmart */
    color: white;
    padding: 12px 20px;
    border-radius: 50px;
    text-decoration: none;
    font-family: Arial, sans-serif;
    font-weight: 500;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
}

.hotmart-button:hover {
    background-color: #d83e15;
    transform: scale(1.05);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
}

.hotmart-icon {
    width: 24px;
    height: 24px;
}

.hotmart-text {
    font-size: 14px;
}

/* Responsive design */
@media (max-width: 768px) {
    .hotmart-container {
        bottom: 15px;
        right: 15px;
    }
    
    .hotmart-button {
        padding: 10px 16px;
    }
    
    .hotmart-text {
        display: none; /* Opcional: ocultar texto en móviles */
    }
    
    .hotmart-icon {
        width: 28px;
        height: 28px;
    }
}
</style>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería - Subir Fotos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Galería de Fotos</h1>
    </header>
    <main>
        <p>Explora las fotos de nuestros eventos y actividades.</p>
        
        <!-- Formulario de carga de imágenes -->
        <form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
            <label for="imageUpload">Selecciona una foto:</label>
            <input type="file" name="image" id="imageUpload" accept="image/*" required>
            <button type="submit">Subir Foto</button>
        </form>

        <!-- Galería de imágenes -->
        <section id="gallery">
            <h2>Imágenes Cargadas</h2>
            <div class="gallery-grid">
                <!-- Aquí se mostrarán las imágenes cargadas -->
                <?php
                    // Cargar imágenes desde la carpeta 'uploads'
                    $images = glob("uploads/*.{jpg,png,gif,jpeg}", GLOB_BRACE);
                    foreach ($images as $image) {
                        echo "<div class='gallery-item'><img src='$image' alt='Imagen'></div>";
                    }
                ?>
            </div>
        </section>
    </main>
    <footer>
        <p>© 2024 Institución Educativa - Todos los derechos reservados</p>
    </footer>
</body>
</html>

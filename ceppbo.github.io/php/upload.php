<?php
// Crear la carpeta de destino si no existe
$targetDir = "uploads/";
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

// Procesar la subida de la imagen
if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Validar el tipo de archivo
    $allowedTypes = ["jpg", "png", "jpeg", "gif"];
    if (in_array($imageFileType, $allowedTypes)) {
        // Mover el archivo a la carpeta de destino
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            echo "La imagen se ha subido correctamente.";
            header("Location: galeria.html"); // Redirigir de nuevo a la página de galería
            exit();
        } else {
            echo "Hubo un error al subir la imagen.";
        }
    } else {
        echo "Formato de archivo no permitido. Solo se permiten JPG, JPEG, PNG y GIF.";
    }
} else {
    echo "No se ha seleccionado ninguna imagen.";
}
?>

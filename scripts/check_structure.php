<?php

declare(strict_types=1);

$levels = ['basico', 'intermedio', 'avanzado', 'experto'];
$errors = [];
$exerciseCount = 0;

foreach ($levels as $level) {
    $directories = glob($level . '/ejercicio-*', GLOB_ONLYDIR) ?: [];

    foreach ($directories as $exerciseDir) {
        $exerciseCount++;

        foreach (['README.md', 'plantilla.php', 'resoluciones/.gitkeep'] as $required) {
            $path = $exerciseDir . '/' . $required;
            if (!is_file($path)) {
                $errors[] = "Falta archivo requerido: {$path}";
            }
        }
    }
}

if ($exerciseCount !== 160) {
    $errors[] = "Se esperaban 160 ejercicios y se encontraron {$exerciseCount}.";
}

if ($errors !== []) {
    echo "Revision fallida:\n";
    foreach ($errors as $error) {
        echo "- {$error}\n";
    }
    exit(1);
}

echo "Estructura correcta: {$exerciseCount} ejercicios validados.\n";

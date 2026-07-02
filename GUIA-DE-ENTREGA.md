# Guia de entrega para estudiantes

## Ruta correcta

Cada solucion debe quedar dentro de la carpeta `resoluciones` del ejercicio correspondiente.

Formato obligatorio:

```text
nivel/ejercicio-XXX-tema/resoluciones/nombre-apellido/ejercicio.php
```

Ejemplo:

```text
basico/ejercicio-001-variables-y-salida-en-consola-videojuegos-moba/resoluciones/maria-lopez/ejercicio.php
```

## Paso a paso

```bash
git checkout dev
git pull origin dev
git checkout -b alumno/nombre-apellido/ejercicio-001
mkdir -p basico/ejercicio-001-variables-y-salida-en-consola-videojuegos-moba/resoluciones/nombre-apellido
cp basico/ejercicio-001-variables-y-salida-en-consola-videojuegos-moba/plantilla.php basico/ejercicio-001-variables-y-salida-en-consola-videojuegos-moba/resoluciones/nombre-apellido/ejercicio.php
```

Resuelve, prueba y sube:

```bash
docker compose run --rm php php basico/ejercicio-001-variables-y-salida-en-consola-videojuegos-moba/resoluciones/nombre-apellido/ejercicio.php
git add .
git commit -m "feat: solve php exercise 001"
git push -u origin alumno/nombre-apellido/ejercicio-001
```

Abre Pull Request hacia `dev`.

## Si el bot rechaza tu PR

Lee el comentario del bot. Normalmente pasa por una de estas razones:

- Abriste el PR hacia `main`.
- Subiste archivos fuera de `resoluciones/nombre-apellido/`.
- Modificaste archivos base.
- Tu carpeta no usa formato `nombre-apellido`.
- Subiste archivos prohibidos como `vendor/`, `.env` o `.DS_Store`.

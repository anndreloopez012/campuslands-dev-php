# Campuslands Dev PHP

Repositorio educativo para aprender PHP desde fundamentos hasta practicas expertas con ejercicios progresivos, contexto moderno y flujo profesional de Git.

## Proposito educativo

Este repositorio ayuda a estudiantes de informatica a aprender PHP practicando con problemas reales y entretenidos. La ruta esta organizada para avanzar sin saltos bruscos:

- **Basico**: sintaxis, variables, condicionales, ciclos, arreglos y funciones.
- **Intermedio**: modularizacion, formularios, sesiones, archivos JSON y mini proyectos.
- **Avanzado**: PDO, APIs, seguridad, arquitectura por capas y pruebas.
- **Experto**: dominio, integraciones, jobs, cache, auditoria, concurrencia y observabilidad.

## Total de ejercicios

- 40 ejercicios de nivel basico.
- 40 ejercicios de nivel intermedio.
- 40 ejercicios de nivel avanzado.
- 40 ejercicios de nivel experto.
- Total: **160 ejercicios**.

Consulta el indice completo en [docs/INDICE-EJERCICIOS.md](docs/INDICE-EJERCICIOS.md).

## Estructura general

```text
campuslands-dev-php/
├── basico/
├── intermedio/
├── avanzado/
├── experto/
├── docs/
├── scripts/
├── docker-compose.yml
├── Dockerfile
├── composer.json
├── README.md
├── CONTRIBUTING.md
└── LICENSE
```

## Requisitos

Puedes trabajar con Docker o con PHP local. La opcion recomendada es Docker para que todos tengan el mismo entorno.

```bash
docker compose run --rm php php -v
```

## Flujo recomendado

```bash
git clone https://github.com/anndreloopez012/campuslands-dev-php.git
cd campuslands-dev-php
git checkout dev
git pull origin dev
git checkout -b alumno/nombre-apellido/ejercicio-001
```

Resuelve el ejercicio dentro de:

```text
nivel/ejercicio-XXX-tema/resoluciones/nombre-apellido/ejercicio.php
```

## Ejecutar una solucion

Con Docker:

```bash
docker compose run --rm php php basico/ejercicio-001-variables-y-salida-en-consola-videojuegos-moba/resoluciones/juan-perez/ejercicio.php
```

Con PHP local:

```bash
php basico/ejercicio-001-variables-y-salida-en-consola-videojuegos-moba/resoluciones/juan-perez/ejercicio.php
```

## Entrega

```bash
git status
git add .
git commit -m "feat: solve php exercise 001"
git push -u origin alumno/nombre-apellido/ejercicio-001
```

Luego abre Pull Request en GitHub:

- Base: `dev`
- Compare: tu rama personal

No abras PR hacia `main`. `main` es produccion academica.

## Ramas

- `main`: version estable del repositorio.
- `dev`: rama principal de trabajo estudiantil.
- `respuestas`: rama para soluciones oficiales del profesor.

## Reglas principales

- Cada estudiante trabaja en su propia rama.
- Cada respuesta va dentro de `resoluciones/nombre-apellido/`.
- No modificar archivos base.
- No tocar respuestas de otros estudiantes.
- No subir archivos fuera de la estructura.
- No hacer push directo a `main` ni `dev`.

## Documentacion util

- [Guia de entrega](GUIA-DE-ENTREGA.md)
- [Contributing](CONTRIBUTING.md)
- [Indice de ejercicios](docs/INDICE-EJERCICIOS.md)
- [Configuracion local](docs/CONFIGURACION-LOCAL.md)

## Buenas practicas PHP

- Usa `declare(strict_types=1);` cuando aplique.
- Nombra variables con intencion.
- Separa funciones cuando una regla crece.
- Valida entradas antes de procesar.
- Evita mezclar responsabilidades.
- Prueba casos normales, limites e invalidos.

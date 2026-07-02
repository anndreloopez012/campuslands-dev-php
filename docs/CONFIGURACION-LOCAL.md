# Configuracion local PHP

## Usar Docker

Validar PHP:

```bash
docker compose run --rm php php -v
```

Ejecutar archivo:

```bash
docker compose run --rm php php ruta/al/ejercicio.php
```

Instalar dependencias si se agregan:

```bash
docker compose run --rm php composer install
```

## Usar PHP local

Recomendado PHP 8.3 o superior:

```bash
php -v
composer --version
```

## Comandos rapidos

```bash
./scripts/run.sh ruta/al/ejercicio.php
./scripts/check-structure.sh
```

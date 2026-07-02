#!/usr/bin/env bash
set -euo pipefail
if [ $# -lt 1 ]; then
  echo "Uso: ./scripts/run.sh ruta/al/ejercicio.php"
  exit 1
fi
docker compose run --rm php php "$1"

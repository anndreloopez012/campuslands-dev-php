#!/usr/bin/env bash
set -euo pipefail
find basico intermedio avanzado experto -path '*/resoluciones/*' -type f | while read -r file; do
  case "$file" in
    */resoluciones/*-*/[!.]* ) ;;
    *) echo "Revisar ruta: $file" ;;
  esac
done
echo "Revision local terminada."

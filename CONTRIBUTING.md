# Contribuyendo

## Flujo correcto

1. Cambia a `dev` y actualiza.
2. Crea una rama personal.
3. Resuelve en `resoluciones/nombre-apellido/`.
4. Prueba tu ejercicio.
5. Haz commit con mensaje profesional.
6. Sube tu rama.
7. Abre Pull Request hacia `dev`.

## Nombres de ramas

```text
alumno/nombre-apellido/ejercicio-001
fix/nombre-apellido/correccion-001
docs/nombre-apellido/notas-php
```

## Commits con estandar

Usa Conventional Commits:

- `feat: solve php exercise 001`
- `fix: correct validation in exercise 014`
- `docs: add notes for exercise 022`
- `refactor: simplify ranking calculation`
- `test: add manual cases for exercise 050`
- `chore: organize solution files`

## Tipologias

- `feat`: nueva solucion o funcionalidad.
- `fix`: correccion de error.
- `docs`: documentacion.
- `refactor`: mejora interna sin cambiar resultado.
- `test`: casos de prueba.
- `chore`: orden o mantenimiento.
- `style`: formato sin cambiar logica.

## No permitido

- Push directo a `main` o `dev`.
- PR hacia `main`.
- Modificar README base del ejercicio para entregar una solucion.
- Borrar `.gitkeep` o plantillas.
- Subir `vendor/`, `.env`, logs o archivos temporales.
- Mezclar respuestas de varios estudiantes en una misma carpeta.

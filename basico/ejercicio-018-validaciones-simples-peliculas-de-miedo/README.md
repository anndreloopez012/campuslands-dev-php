# 18. Validaciones simples - peliculas de miedo

## Dificultad

Basico 2/4

## Tematica usada

peliculas de miedo

## Contexto del problema

Estas creando un script PHP de consola para apoyar una dinamica de peliculas de miedo. El reto no es hacer una app completa: debes concentrarte en entender datos, condiciones y resultados claros. El caso numero 18 se enfoca en validaciones simples.

En PHP no basta con que el codigo imprima algo. Un buen desarrollador debe leer el problema, identificar datos de entrada, transformar esos datos con reglas claras y producir una salida que otra persona pueda revisar.

## Objetivo

Practicar detectar datos incompletos o invalidos usando PHP y aplicando estos conceptos: **empty, isset, trim**.

## Explicacion paso a paso

1. Lee todo el enunciado antes de escribir codigo.
2. Identifica que datos necesita el problema: nombres, cantidades, estados, puntajes, precios o fechas.
3. Define esos datos en variables, arreglos o estructuras segun corresponda.
4. Escribe la regla principal del ejercicio en pasos pequenos.
5. Convierte cada paso en codigo PHP claro.
6. Muestra resultados con mensajes faciles de entender.
7. Prueba al menos tres casos: normal, limite y dato invalido.
8. Ajusta nombres, espacios y comentarios antes de entregar.

## Instrucciones detalladas

- Crea tu solucion dentro de esta carpeta en `resoluciones/nombre-apellido/`.
- Usa un archivo principal llamado `ejercicio.php`.
- Puedes crear archivos auxiliares si el ejercicio lo necesita, pero deben quedar dentro de tu carpeta personal.
- No edites este README ni la plantilla base del ejercicio.
- Ejecuta tu solucion con Docker o con PHP local.

Ejemplo con Docker desde la raiz del repositorio:

```bash
docker compose run --rm php php basico/ejercicio-018-validaciones-simples-peliculas-de-miedo/resoluciones/tu-nombre/ejercicio.php
```

Ejemplo con PHP instalado localmente:

```bash
php basico/ejercicio-018-validaciones-simples-peliculas-de-miedo/resoluciones/tu-nombre/ejercicio.php
```

## Ejemplos

Entrada conceptual:

```text
Tema: peliculas de miedo
Registros: 3 elementos de prueba
Regla: calcular, validar, filtrar u organizar segun el enunciado
```

Salida esperada conceptual:

```text
Resumen del proceso
Dato principal calculado
Listado o mensaje final sin errores
```

## Entregable esperado

Dentro de `resoluciones/nombre-apellido/` entrega:

- `ejercicio.php` con la solucion principal.
- `README.md` corto si necesitas explicar decisiones.
- Datos de prueba locales si el ejercicio los requiere.

## Reglas

- No modificar respuestas de otros estudiantes.
- No borrar archivos base del ejercicio.
- No subir archivos fuera de `resoluciones/nombre-apellido/`.
- No usar frameworks si el ejercicio no los pide.
- No copiar soluciones oficiales antes de intentar resolver.
- Mantener nombres de variables claros y consistentes.

## Consejos

- Si el ejercicio parece grande, divide primero en subtareas.
- Escribe funciones cuando una regla se repite.
- Usa `var_dump()` temporalmente para entender datos, pero no lo dejes ensuciando la salida final.
- Prefiere mensajes de salida concretos: que se entienda que paso y por que.
- Valida datos antes de calcular.

## Errores comunes

- Resolver todo en una sola linea dificil de leer.
- Usar nombres como `$x`, `$a`, `$dato1` sin contexto.
- No probar datos vacios, cero o valores invalidos.
- Mezclar HTML con logica cuando el ejercicio pide consola.
- Subir la solucion directamente a `dev` o `main` en vez de rama propia.

## Pistas opcionales

- Piensa primero en papel: entrada, proceso y salida.
- Si necesitas ordenar, revisa `sort()`, `rsort()` o `usort()`.
- Si necesitas filtrar, puedes usar `foreach` o `array_filter()`.
- Si necesitas sumar, crea un acumulador con valor inicial `0`.
- Si usas funciones, define claramente parametros y retorno.

## Como validar si quedo bien

Tu ejercicio queda bien si cumple todo esto:

- Se ejecuta sin errores fatales.
- La salida responde al contexto de peliculas de miedo.
- Los datos estan organizados y no quemados sin sentido.
- Hay al menos tres pruebas o casos considerados.
- El codigo se entiende sin que el instructor tenga que adivinar tu intencion.
- La entrega esta dentro de `resoluciones/nombre-apellido/`.

## Plantilla sugerida

Puedes copiar esta idea dentro de tu `ejercicio.php`:

```php
<?php

declare(strict_types=1);

// 1. Datos de entrada
// 2. Proceso o funciones
// 3. Salida final

echo "Ejercicio PHP - peliculas de miedo\n";
```

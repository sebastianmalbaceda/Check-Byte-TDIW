# Guía de contribución

¡Gracias por tu interés en contribuir a **Check Byte**! 🙌

Este es un proyecto académico, por lo que las contribuciones son bienvenidas siempre
que mantengan el enfoque educativo del repositorio. Antes de empezar, por favor
lee esta guía y el [Código de Conducta](CODE_OF_CONDUCT.md).

## Cómo contribuir

### 1. Crea un *fork* y una rama

- Haz un *fork* del repositorio.
- Crea una rama con un nombre descriptivo:
  ```bash
  git checkout -b feature/nombre-de-la-funcionalidad
  git checkout -b fix/nombre-del-ajuste
  ```

### 2. Escribe tu código

- Sigue la arquitectura **MVC** existente (`controller/`, `model/`, `view/`).
- Mantén el estilo y las convenciones de los archivos existentes.
- No dejes comentarios innecesarios que no aporten contexto

### 3. Realiza un commit con mensajes claros

Escribe mensajes de commit descriptivos en **inglés**, en tiempo presente, y
siguiendo el formato convencional:

```bash
git commit -m "feat: add category filter to product catalog"
git commit -m "fix: correct cart total calculation"
```

### 4. Envía un Pull Request (PR)

- Asegúrate de que tu rama está actualizada con `main`.
- Describe el **qué**, el **porqué** y el **cómo** de tu cambio en la descripción
  del PR, siguiendo la [plantilla](.github/pull_request_template.md).
- Enlaza cualquier *issue* relacionado.
- Espera la revisión del equipo.

## Criterios de revisión

Para que un PR sea aceptado debe:

- Pasar el *workflow* de CI (sintaxis de PHP, ver `.github/workflows`).
- No romper funcionalidades existentes.
- Seguir las convenciones de código y estructura del proyecto.
- Aportar valor pedagógico o funcional al proyecto.

## Reportar issues

Si encuentras un error o quieres proponer una mejora, abre un *issue*
usando las [plantillas del repositorio](.github/ISSUE_TEMPLATE/), e incluye:

- Descripción clara y concisa del problema.
- Pasos para reproducirlo.
- Comportamiento esperado frente al comportamiento observado.
- Capturas de pantalla, si procede.

## Configuración de desarrollo

1. Clona el repositorio y configura tu servidor Apache/PHP con la extensión
   `pgsql`.
2. Crea la base de datos PostgreSQL según el esquema documentado en el
   [README](README.md#-esquema-de-base-de-datos).
3. Configura la conexión en `model/connectDB.php`.

## Código de conducta

Todas las personas que participen en este proyecto deben respetar el
[Código de Conducta](CODE_OF_CONDUCT.md).
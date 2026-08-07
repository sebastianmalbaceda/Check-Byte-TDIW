<div align="center">

<img src="assets/imgs/Logo_Check-byte_name_no_background.png" alt="Check Byte" width="280"/>

# Check Byte

**Aplicación web de comercio electrónico** desarrollada como proyecto final de la asignatura **TDIW** (*Tecnologies de Desenvolupament per a Internet i Web*) de la **Universitat Autònoma de Barcelona (UAB)**.

Una tienda online completa: catálogo, carrito de la compra, cuentas de usuario y gestión de pedidos.

![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-4169E1?style=flat&logo=postgresql&logoColor=white)
![jQuery](https://img.shields.io/badge/jQuery-3.6.0-0769AD?style=flat&logo=jquery&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white)
![Licencia](https://img.shields.io/badge/Licencia-MIT-green)

</div>

---

## Sobre el proyecto

**Check Byte** es una plataforma de e-commerce funcional desarrollada como proyecto final de la asignatura **TDIW (Tecnologías de Desarrollo para Internet y Web)** de la **Universitat Autònoma de Barcelona**.

El proyecto implementa una experiencia completa de compra online con gestión de sesiones, un catálogo de productos, un carrito de la compra interactivo y un flujo de pedidos íntegro — desde la navegación hasta la confirmación del pedido — todo ello con PHP y PostgreSQL nativos.

> **Nota:** este es un proyecto **académico** creado con fines educativos y de referencia. Forma parte de una práctica evaluable de la asignatura TDIW.

## Funcionalidades

- **Autenticación de usuarios**: registro, inicio de sesión, cierre de sesión y gestión del perfil (nombre, dirección, e-mail, contraseña y foto de perfil)
- **Página de inicio**: pantalla de bienvenida con las categorías de productos
- **Catálogo de productos**: filtrar productos por categoría
- **Detalle de producto**: descripción, precio y acción de "añadir al carrito"
- **Carrito de la compra**: añadir, modificar cantidad y eliminar productos, vaciar carrito, almacenado en sesión
- **Mini carrito**: resumen del carrito visible desde la cabecera
- **Finalizar compra**: creación del pedido con precio total y número de productos
- **Mis pedidos**: listado de los pedidos del usuario y el detalle de cada uno
- **Mi cuenta**: consultar y actualizar la información personal

## Stack tecnológico

| Capa        | Tecnología                                     |
| ----------- | ---------------------------------------------- |
| Frontend    | HTML5, CSS3, JavaScript vanilla, jQuery 3.6.0   |
| Backend     | PHP (7+/8) con la extensión `pgsql`             |
| Base de datos| PostgreSQL                                     |
| Servidor    | Apache                                         |

## Estructura del proyecto

```
Check-Byte/
├── index.php                 # Controlador frontal (enrutado mediante ?action=)
├── resource_*.php            # Recursos de página (inicio, catálogo, login, ...)
├── controller/               # Controladores (lógica de negocio)
├── model/                    # Capa de acceso a datos (consultas PostgreSQL)
├── view/                     # Plantillas de vista (print*)
├── assets/
│   ├── css/                  # Hojas de estilo
│   ├── js/                   # Scripts del lado del cliente (AJAX, carrito, ...)
│   └── imgs/                 # Imágenes y recursos del logo
├── info.html                 # Documentación de despliegue (UAB)
└── autoavaluacio.pdf         # Autoevaluación del proyecto
```

La aplicación sigue una arquitectura **Modelo-Vista-Controlador (MVC)**. `index.php` actúa como controlador frontal que enruta las peticiones al controlador correspondiente mediante el parámetro `action`.

## Esquema de base de datos

Base de datos relacional sobre PostgreSQL:

| Tabla        | Columnas destacadas                                                   |
| ------------ | --------------------------------------------------------------------- |
| `user`       | `id_user`, `name`, `email`, `password`, `address`, `city`, `postal_code`, `profile_picture` |
| `category`   | `id_category`, `name`, `image`                                      |
| `product`    | `id_product`, `id_category`, `name`, `price`, `description`, `image` |
| `order`      | `id_order`, `id_user`, `total_price`, `total_products`, `order_datetime` |
| `order_lines`| `id_order`, `id_product`, `product_name`, `product_price`, `product_quantity` |

La conexión a la base de datos está configurada en `model/connectDB.php`.

## Primeros pasos

### Requisitos previos

- Servidor web con PHP y la extensión **pgsql** (p. ej. Apache + XAMPP/WAMP)
- Servidor PostgreSQL
- jQuery cargado mediante CDN

### Instalación

1. Clona el repositorio:

   ```bash
   git clone https://github.com/sebastianmalbaceda/Check-Byte-TDIW.git
   ```

2. Configura la conexión a la base de datos en `model/connectDB.php` con tus credenciales PostgreSQL.

3. Crea el esquema de la base de datos (ver [Esquema de la base de datos](#esquema-de-la-base-de-datos)) y carga los datos de ejemplo de productos/categorías.

4. Sirve la raíz del proyecto desde el document root de tu servidor web y abre el navegador.

> **Nota:** este proyecto fue desarrollado y desplegado en el servidor docente de la universidad (UAB `deic-docencia`). Rutas como `/home/TDIW/...` (ver `index.php`) y los ajustes de conexión reflejan ese entorno y puede que necesiten adaptarse para un despliegue local.

## Autores

Proyecto desarrollado por el equipo de **Check Byte**:

| Autor                | Rol          |
| -------------------- | ------------ |
| **Gabriel Rios**     | Desarrollador |
| **Sebastián Malbaceda** | Desarrollador |

## Contexto académico

- **Asignatura:** TDIW — *Tecnologías de Desarrollo para Internet y Web*
- **Universidad:** Universitat Autònoma de Barcelona (UAB)
- **Idioma de la interfaz:** Español
- **Estado:** Proyecto finalizado y calificado

## Licencia

Distribuido bajo la licencia **MIT**. Consulta [LICENSE](LICENSE) para más información.

---

<div align="center">
  Desarrollado por <b>Gabriel Rios</b> y <b>Sebastián Malbaceda</b> - Check Byte
</div>

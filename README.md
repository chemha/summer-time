# Summer Time

**[English](#english) · [Español](#español)**

---

## English

A web app for managing a children's summer school. It replaced the outdated Microsoft Access database that **Escuela de Verano Time** (a sports centre in Spain) used to run enrollment, groups and payments.

I built it during my FCT work placement for the DAW (Web Application Development) vocational degree, from March to June 2022. The school's staff used it in production that summer.

### The problem

The school tracked about 160 children per season in an Access 2003 database on a single office PC. Summer Time moves enrollment, groups, payments and staff announcements into a browser-based app with role-based access, so the whole team can use it from any device.

### Features

**Children's records (admin)**
- Full enrollment record: personal details, guardian contact, age, siblings
- Medical flags (medication, special needs) and free-text medical notes
- Group, schedule and which of the four summer fortnights each child attends
- Payment amount and receipt status
- Data-protection and photo-consent checkboxes
- Searchable, sortable, paginated list (DataTables), with a detail modal for each record

**Announcements (all staff)**
- Board of news and activities shown on the landing page
- Create, edit and delete with confirmation dialogs (SweetAlert)

**Users and roles**
- Two roles: **admin** (manages children and staff) and **monitor** (reads records, posts announcements)
- Admins create, edit and delete staff accounts and reset passwords
- Every user has a profile page with avatar upload, which is cropped to 320×320 with Intervention Image

**Interface**
- Fully in Spanish (laravel-lang), responsive Bootstrap 5 layout

### Tech stack

| Layer      | Tools                                                               |
|------------|---------------------------------------------------------------------|
| Backend    | PHP 8, Laravel 9, Eloquent ORM, policies, Laravel UI auth           |
| Database   | MySQL 8                                                             |
| Frontend   | Blade, Bootstrap 5, jQuery, DataTables, SweetAlert, Bootstrap Icons |
| Build      | Laravel Mix (webpack), Sass                                         |
| Dev env    | Laravel Sail (Docker Compose)                                       |
| Testing    | PHPUnit feature tests                                               |

### Data model

```
users ──< ninos       (children's enrollment records, created by an admin)
users ──< anuncios    (announcements, authored by any staff member)
```

`users.admin` is a boolean that separates admins from monitors. Authorization is handled by Laravel policies.

### Project structure

```
app/                Laravel application
  app/Http/Controllers   NinoController, AnuncioController, UserController, UserPerfilController
  app/Policies           Role checks
  database/migrations    Schema (users, ninos, anuncios)
  resources/views        Blade templates
  public/js              Page scripts (tables, modals, confirmations)
docs/               Project documentation, user manual and developer manual (Spanish)
```

### Running locally

Requirements: PHP 8.0+, Composer, Node 16+ and MySQL. Alternatively, use Docker for Sail.

```bash
cd app
composer install
cp .env.example .env          # set your DB_* credentials
php artisan key:generate
php artisan migrate
php artisan storage:link      # needed for avatar uploads
npm install && npm run dev
php artisan serve
```

With Sail, run `./vendor/bin/sail up -d` after `composer install`, then `./vendor/bin/sail artisan migrate`.

**Default login:** the users migration creates an admin account with user `admin` and password `admin`. Change it straight away on any machine that isn't your own.

To fill the database with fake children for testing, run:

```bash
php artisan tinker
>>> \App\Models\Nino::factory(50)->create();   // assigned to user id 1 (the seeded admin)
```

### Tests

```bash
cd app
php artisan test
```

### Screenshots

<!-- TODO: add screenshots taken with fake data (Faker), never real children's records -->

| Landing page | Children list | Record detail |
|---|---|---|
| _coming soon_ | _coming soon_ | _coming soon_ |

### Documentation

The `docs/` folder has the original deliverables, all in Spanish:
- **Documentación del proyecto**: research, interviews, personas, user flows, wireframes and mockups
- **Manual de usuario**: end-user guide for admins and monitors
- **Manual de desarrollador**: architecture, controllers, policies and JS overview

### License

[MIT](https://opensource.org/licenses/MIT)

---

## Español

Aplicación web para gestionar una escuela de verano infantil. Sustituyó a la base de datos de Microsoft Access, ya desfasada, con la que **Escuela de Verano Time** (un centro deportivo en España) llevaba las inscripciones, los grupos y los pagos.

La desarrollé durante mis prácticas de FCT del ciclo de DAW (Desarrollo de Aplicaciones Web), entre marzo y junio de 2022. El personal de la escuela la usó en producción ese verano.

### El problema

La escuela gestionaba unos 160 niños por temporada en una base de datos de Access 2003 instalada en un único PC de la oficina. Summer Time lleva las inscripciones, los grupos, los pagos y los anuncios del personal a una aplicación web con acceso por roles, para que todo el equipo pueda usarla desde cualquier dispositivo.

### Funcionalidades

**Fichas de los niños (admin)**
- Ficha de inscripción completa: datos personales, contacto del tutor, edad y hermanos
- Indicadores médicos (medicación, necesidades especiales) y observaciones médicas en texto libre
- Grupo, horario y a cuáles de las cuatro quincenas de verano asiste cada niño
- Importe pagado y estado del recibo
- Casillas de autorización de protección de datos y de fotos
- Listado con búsqueda, ordenación y paginación (DataTables), y un modal con el detalle de cada ficha

**Anuncios (todo el personal)**
- Tablón de noticias y actividades que aparece en la página de inicio
- Crear, editar y borrar, con diálogos de confirmación (SweetAlert)

**Usuarios y roles**
- Dos roles: **admin** (gestiona los niños y el personal) y **monitor** (consulta las fichas y publica anuncios)
- Los administradores crean, editan y borran cuentas del personal y restablecen contraseñas
- Cada usuario tiene una página de perfil donde puede subir su avatar, que se recorta a 320×320 con Intervention Image

**Interfaz**
- Totalmente en español (laravel-lang), con un diseño adaptable hecho con Bootstrap 5

### Stack tecnológico

| Capa          | Herramientas                                                        |
|---------------|---------------------------------------------------------------------|
| Backend       | PHP 8, Laravel 9, Eloquent ORM, policies, autenticación Laravel UI  |
| Base de datos | MySQL 8                                                             |
| Frontend      | Blade, Bootstrap 5, jQuery, DataTables, SweetAlert, Bootstrap Icons |
| Build         | Laravel Mix (webpack), Sass                                         |
| Entorno       | Laravel Sail (Docker Compose)                                       |
| Tests         | Tests de funcionalidad con PHPUnit                                  |

### Modelo de datos

```
users ──< ninos       (fichas de inscripción, creadas por un admin)
users ──< anuncios    (anuncios, escritos por cualquier miembro del personal)
```

El booleano `users.admin` distingue a los administradores de los monitores. La autorización se gestiona con policies de Laravel.

### Estructura del proyecto

```
app/                Aplicación Laravel
  app/Http/Controllers   NinoController, AnuncioController, UserController, UserPerfilController
  app/Policies           Comprobación de roles
  database/migrations    Esquema (users, ninos, anuncios)
  resources/views        Plantillas Blade
  public/js              Scripts de cada página (tablas, modales, confirmaciones)
docs/               Documentación del proyecto, manual de usuario y manual de desarrollador
```

### Ejecutarlo en local

Requisitos: PHP 8.0+, Composer, Node 16+ y MySQL. Como alternativa, Docker para usar Sail.

```bash
cd app
composer install
cp .env.example .env          # configura las variables DB_*
php artisan key:generate
php artisan migrate
php artisan storage:link      # necesario para subir avatares
npm install && npm run dev
php artisan serve
```

Con Sail, ejecuta `./vendor/bin/sail up -d` después de `composer install` y luego `./vendor/bin/sail artisan migrate`.

**Acceso por defecto:** la migración de usuarios crea una cuenta de administrador con usuario `admin` y contraseña `admin`. Cámbiala en cuanto la uses en cualquier equipo que no sea el tuyo.

Para rellenar la base de datos con niños ficticios de prueba:

```bash
php artisan tinker
>>> \App\Models\Nino::factory(50)->create();   // se asignan al usuario con id 1 (el admin creado por la migración)
```

### Tests

```bash
cd app
php artisan test
```

### Capturas

<!-- TODO: añadir capturas hechas con datos ficticios (Faker), nunca con fichas reales de niños -->

| Página de inicio | Listado de niños | Detalle de una ficha |
|---|---|---|
| _próximamente_ | _próximamente_ | _próximamente_ |

### Documentación

La carpeta `docs/` contiene los entregables originales:
- **Documentación del proyecto**: investigación, entrevistas, proto personas, user flows, wireframes y mockups
- **Manual de usuario**: guía de uso para administradores y monitores
- **Manual de desarrollador**: arquitectura, controladores, policies y JavaScript

### Licencia

[MIT](https://opensource.org/licenses/MIT)

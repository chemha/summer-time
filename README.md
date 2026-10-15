# Summer Time

A web app for managing a children's summer school. It replaced the outdated Microsoft Access database that **Escuela de Verano Time** (a sports centre in Spain) used to run enrollment, groups and payments.

I built it during my FCT work placement for the DAW (Web Application Development) vocational degree, from March to June 2022. The school's staff used it in production that summer.

## The problem

The school tracked about 160 children per season in an Access 2003 database on a single office PC. Summer Time moves enrollment, groups, payments and staff announcements into a browser-based app with role-based access, so the whole team can use it from any device.

## Features

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

## Tech stack

| Layer      | Tools                                                         |
|------------|---------------------------------------------------------------|
| Backend    | PHP 8, Laravel 9, Eloquent ORM, policies, Laravel UI auth     |
| Database   | MySQL 8                                                       |
| Frontend   | Blade, Bootstrap 5, jQuery, DataTables, SweetAlert, Bootstrap Icons |
| Build      | Laravel Mix (webpack), Sass                                   |
| Dev env    | Laravel Sail (Docker Compose)                                 |
| Testing    | PHPUnit feature tests                                         |

## Data model

```
users ──< ninos       (children's enrollment records, created by an admin)
users ──< anuncios    (announcements, authored by any staff member)
```

`users.admin` is a boolean that separates admins from monitors. Authorization is handled by Laravel policies.

## Project structure

```
app/                Laravel application
  app/Http/Controllers   NinoController, AnuncioController, UserController, UserPerfilController
  app/Policies           Role checks
  database/migrations    Schema (users, ninos, anuncios)
  resources/views        Blade templates
  public/js              Page scripts (tables, modals, confirmations)
docs/               Project documentation, user manual and developer manual (Spanish)
```

## Running locally

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

## Tests

```bash
cd app
php artisan test
```

## Screenshots

<!-- TODO: add screenshots taken with fake data (Faker), never real children's records -->

| Landing page | Children list | Record detail |
|---|---|---|
| _coming soon_ | _coming soon_ | _coming soon_ |

## Documentation

The `docs/` folder has the original deliverables, all in Spanish:
- **Documentación del proyecto**: research, interviews, personas, user flows, wireframes and mockups
- **Manual de usuario**: end-user guide for admins and monitors
- **Manual de desarrollador**: architecture, controllers, policies and JS overview

## Known limitations and what I'd improve

I built this as a student under a fixed deadline. Looking back, these are the things I would change before it went anywhere near production again:

- **Input validation:** controllers write request data directly. They should use Form Request classes with validation rules.
- **Mass assignment:** profile and user updates use `$request->all()`, and `admin` is fillable. A non-admin could promote themselves by posting an extra field. The fix is to whitelist fields with `$request->only()` or a validated payload, and to take `admin` out of `$fillable`.
- **Authorization:** announcement edit and delete aren't restricted to their author or an admin. Children's routes are checked through the User policy instead of a proper `NinoPolicy`.
- **Seeded credentials:** the default `admin`/`admin` account should be created by an interactive artisan command, not a migration.
- **Unused resource routes:** `show`, `create` and `edit` are routed on some controllers but not implemented.
- **Test coverage:** only the announcements feature is tested.
- **Upgrades:** Laravel 9 is end-of-life. The next steps would be Laravel 11+, Vite instead of Mix, and assets bundled instead of loaded from CDNs.

## License

[MIT](https://opensource.org/licenses/MIT)

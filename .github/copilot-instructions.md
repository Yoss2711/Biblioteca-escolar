# Copilot Instructions for Biblioteca Escolar

## Arquitectura General

- Proyecto PHP estructurado en MVC: `src/` contiene controladores, modelos, servicios, helpers y vistas.
- `public/` es la raíz web, contiene los puntos de entrada (`index.php`, `home.php`) y recursos estáticos (`assets/`).
- Componentes reutilizables en `components/` (ej: `navbar.php`, `footer.php`).
- Rutas y lógica de enrutamiento en `src/routers/web.php`.
- Configuración de base de datos en `src/config/database.php`.

## Flujos y Patrones Clave

- Controladores en `src/controllers/` gestionan la lógica de negocio y llaman a servicios (`src/services/`).
- Modelos en `src/models/` representan entidades como `Book`, `User`, `Loan`.
- Vistas en `src/views/` organizadas por dominio (auth, books, dashboard, home, partials).
- Helpers (`src/helpers/`) para utilidades y validaciones comunes.
- Los assets JS/CSS están en `public/assets/` y se organizan por contexto (auth, home, login, modules).

## Convenciones Específicas

- Los archivos de componentes PHP pueden ser incluidos en vistas usando `include` o `require`.
- Los controladores siguen el patrón `NombreController.php` y exponen métodos públicos para acciones.
- Los servicios encapsulan lógica de acceso a datos y operaciones de negocio.
- Los archivos JS suelen tener un archivo `main.js` por contexto y módulos reutilizables en `modules/`.

## Integraciones y Dependencias

- El frontend usa JS plano, sin frameworks modernos.
- Configuración de Supabase en `public/assets/js/config/supabase-config.js`.
- No se detectan herramientas de build ni tests automatizados.
- Composer está presente, pero el archivo `composer.json` no está documentado aquí.

## Ejemplos de Patrones

- Para agregar una nueva entidad:
  1. Crear modelo en `src/models/`
  2. Crear servicio en `src/services/`
  3. Crear controlador en `src/controllers/`
  4. Agregar vistas en `src/views/`
  5. Registrar rutas en `src/routers/web.php`
- Para agregar JS/CSS, ubicar en la carpeta correspondiente bajo `public/assets/`.

## Archivos Clave

- `src/routers/web.php`: Definición de rutas
- `src/controllers/`: Lógica de negocio
- `src/services/`: Acceso a datos y lógica de dominio
- `src/models/`: Entidades
- `src/views/`: Vistas y componentes visuales
- `public/assets/`: Recursos estáticos

---

Adapta los cambios a la estructura MVC y sigue los patrones de modularidad y reutilización presentes.


# 🪂 Sportouriz

**Sportouriz** is a web-based ticket booking platform designed for **paragliding sports**. Built using Laravel and modern web technologies, this application provides an interface for users to view, select, and book paragliding sessions conveniently.

## 🛠️ Features

- User authentication and registration
- Booking system for paragliding tickets
- Dynamic front-end using Blade and JavaScript
- Custom login page with unique UI template
- Multilingual support (English available)
- Modular Laravel structure for easy development

## 📁 Directory Structure

- `app/` - Core application logic (Controllers, Models, etc.)
- `bootstrap/` - Laravel bootstrap files
- `config/` - Application configuration
- `database/` - Migrations and seeders
- `lang/en/` - English localization files
- `public/` - Publicly accessible assets (CSS, JS, images)
- `resources/` - Blade views and other frontend assets
- `routes/` - Route definitions
- `storage/` - Logs and cached files
- `tests/` - Feature and unit tests

## 🚀 Installation

```bash
# Clone the repository
git clone https://github.com/IlhamNur/sportouriz.git
cd sportouriz

# Install PHP dependencies
composer install

# Install frontend dependencies
npm install && npm run dev

# Copy the example environment file
cp .env.example .env

# Generate the application key
php artisan key:generate

# Run database migrations
php artisan migrate

# Serve the application
php artisan serve
```

## 🧪 Testing

To run the test suite:
```bash
php artisan test
```

## 🧰 Technologies Used

- Laravel (PHP Framework)
- Blade Template Engine
- JavaScript
- CSS
- MySQL

## 👥 Contributors

- [Ilham Nur Romdoni](https://github.com/IlhamNur)

## 📜 License

This project is open-source under the [MIT license](LICENSE).

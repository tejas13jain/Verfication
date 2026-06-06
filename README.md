# Verfication

Laravel-based verification and authentication application.

## Requirements

* PHP 8.2+
* Composer
* MySQL
* Apache/Nginx
* Git

## Installation

Clone the repository:

```bash
git clone https://github.com/tejas13jain/Verfication.git
cd Verfication
```

Install dependencies:

```bash
composer install
```

Create environment file:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Configure database settings in `.env`.

Run migrations:

```bash
php artisan migrate
```

Start the application:

```bash
php artisan serve
```

Application URL:

```text
http://127.0.0.1:8000
```

---

## Production Deployment

The application is deployed on AWS EC2 using:

* GitHub
* GitHub Actions
* Amazon EC2
* Apache HTTP Server

Deployment workflow:

1. Push code to the `main` branch.
2. GitHub Actions runs automatically.
3. EC2 server pulls the latest code.
4. Composer dependencies are installed.
5. Laravel optimization commands are executed.
6. Apache is restarted.

---

## CI/CD

GitHub Actions workflow file:

```text
.github/workflows/deploy.yml
```

Deployment is triggered automatically on every push to:

```text
main
```

---

## Commands

Clear cache:

```bash
php artisan optimize:clear
```

Optimize application:

```bash
php artisan optimize
```

Check routes:

```bash
php artisan route:list
```

---

## Author

Tejas Jain

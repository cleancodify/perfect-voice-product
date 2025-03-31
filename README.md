# Picture Perfect Voices

Picture Perfect Voices is a Laravel-based web application powered by Alpine.js, designed to connect clients with professional voice actors.

## Installation

Follow these steps to set up the project locally:

1. Clone the repository:
   ```sh
   git clone <repository-url>
   cd picture-perfect-voices
   ```

2. Install dependencies:
   ```sh
   composer install
   npm install
   ```

3. Copy the environment file and generate the application key:
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure your `.env` file with the necessary database and environment settings.

5. Run database migrations:
   ```sh
   php artisan migrate
   ```

6. Link storage to public:
   ```sh
   php artisan storage:link
   ```

## Development Setup

To start the development server, run the following commands:

```sh
php artisan serve
npm run dev
```

## Production Setup

For the production environment, build the assets and start the server:

```sh
npm run build
php artisan serve
```

## Additional Notes

- Ensure your database is properly set up and configured in `.env`.
- If needed, seed the database with sample data using:
  ```sh
  php artisan db:seed
  ```
- To clear caches and refresh configurations, you can run:
  ```sh
  php artisan cache:clear
  php artisan config:clear
  php artisan route:clear
  php artisan view:clear
  ```

---

Now you're all set! 🚀 Happy coding with *Picture Perfect Voices*! 😊
!


Instruction on how to install the TO-DO App

1. Clone the repo:
   git clone (https://github.com/imano00/todo-app.git)
   cd your-laravel-project

2. Install dependencies:
   composer install

3. Copy the .env file (make sure the env file is the actual env file, not .env example:
   cp .env.example .env

4. Generate app key:
   php artisan key:generate

5. Set up your database (preferable to use MYSQL):
   - Open .env file
   - Update DB_DATABASE, DB_USERNAME, DB_PASSWORD with your local database info

6. Run migrations:
   php artisan migrate

7. (Optional) Seed the database:
   php artisan db:seed

8. Serve the app:
   php artisan serve

9. Open in browser:
   http://localhost:8000

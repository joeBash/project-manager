
# Project Management App

## Quick Background
A simple project management web application built with Laravel (version 12), React with TypeScript, Inertia V2, and uses Sqlite as database for simplicity.

> Note: The code was built on top of Laravel's official react starter kit (found [here](https://laravel.com/docs/12.x/starter-kits#react)).

## Local Setup

> [!TIP]
> Make sure you have installed php, composer, node.js and the following commands are available in terminal. `php`, `node`, `npm`, and `composer` to follow along.

1) Clone the repository
```git
git clone https://github.com/joeBash/project-manager.git
```

2) Change into the new directory
```git
cd project-manager
```

3) Copy `.env.example` into `.env`
```git
cp .env.example .env
```

4) Open `.env` and update all your relevant environment keys


5) Install all dependencies using the composer package manager
```git
composer install
```

6) Generate key for the application
```git
php artisan key:generate --ansi
```

7) Run initial migrations
```git
php artisan migrate
```

8) Seed the database (feel free to modify the number of model instances via the interactive seeder)
```git
php artisan db:seed
```

9) Install all front-end package dependencies using Node package manager
```git
npm install
```

10) Launch the back-end server
```git
php artisan serve
```

11) Launch the front-end client
```git
npm run dev
```

12) Open local application at [http://localhost:8000](http://localhost:8000)

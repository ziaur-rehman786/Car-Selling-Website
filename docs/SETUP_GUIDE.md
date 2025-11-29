# Setup Guide - Car Selling Website Backend

Hey Zia! This guide will help you get the backend running. I've created all the database structure, models, controllers, and routes. Here's what's been done and what you need to do next.

## What I've Already Created ✅

### Database Structure (Migrations)
- ✅ Users table (with phone field)
- ✅ Makers table (car brands like Toyota, Honda)
- ✅ Car Models table
- ✅ Car Types table (Sedan, SUV, etc.)
- ✅ Fuel Types table
- ✅ States table
- ✅ Cities table
- ✅ Cars table (main car listings)
- ✅ Car Images table (for photos)
- ✅ Watchlists table (favorites)

### Models (PHP Classes)
- ✅ All models created with relationships
- ✅ User model updated with car and watchlist relationships

### Controllers
- ✅ AuthController (login, signup, logout)
- ✅ CarController (all car operations)
- ✅ WatchlistController (favorite cars)
- ✅ HomeController (updated to show cars)

### Routes
- ✅ All routes connected to controllers
- ✅ Authentication routes
- ✅ Car CRUD routes
- ✅ Search route

### Database Seeder
- ✅ Comprehensive seeder with all:
  - 6 car makers (Toyota, Ford, Honda, Chevrolet, Nissan, Lexus)
  - 62+ car models
  - Car types, fuel types
  - States and cities

## What You Need to Do Next

### Step 1: Navigate to Laravel Section
```powershell
cd "Laravel Section"
```

### Step 2: Create .env File
```powershell
copy .env.example .env
```

### Step 3: Generate App Key
```powershell
php artisan key:generate
```

### Step 4: Run Migrations
```powershell
php artisan migrate
```
This creates all the database tables.

### Step 5: Seed Database
```powershell
php artisan db:seed
```
This adds all the car brands, models, types, states, cities to your database.

### Step 6: Create Storage Link (for images)
```powershell
php artisan storage:link
```
This makes uploaded images accessible via web.

### Step 7: Start Server
If using Laravel Herd, it should work automatically. Otherwise:
```powershell
php artisan serve
```

## What Still Needs to Be Done

### Convert HTML to Blade Views
The HTML files in the root folder need to be converted to Blade templates in `resources/views/`. Here's what needs to be created:

1. **Layout file** (`resources/views/layouts/app.blade.php`) - Common header/footer
2. **Home page** (`resources/views/home/index.blade.php`) - Already exists but needs updating
3. **Car views** (`resources/views/cars/`):
   - `index.blade.php` - List all cars
   - `show.blade.php` - View single car (from view.html)
   - `create.blade.php` - Add new car (from add_new.html)
   - `edit.blade.php` - Edit car (from edit_car.html)
   - `my_cars.blade.php` - User's cars (from my_cars.html)
   - `watchlist.blade.php` - Favorite cars (from watchlist.html)
   - `search.blade.php` - Search results (from s.html)
4. **Auth views** (`resources/views/auth/`):
   - `login.blade.php` - From login.html
   - `signup.blade.php` - From signup.html

### Copy CSS and JS
You need to copy:
- `css/app.css` → `Laravel Section/public/css/app.css`
- `js/app.js` → `Laravel Section/public/js/app.js`
- `img/` folder → `Laravel Section/public/img/`

### Update Asset Paths
In Blade views, use Laravel's `asset()` helper:
- `href="css/app.css"` → `href="{{ asset('css/app.css') }}"`
- `src="/img/logo.svg"` → `src="{{ asset('img/logo.svg') }}"`

## Quick Test

After setup, try:
1. Visit home page - should show cars
2. Create account - should work
3. Add a car - form should save
4. Search cars - filters should work

## Author Information

All code created by **Zia**

---

Need help? Check Laravel documentation: https://laravel.com/docs


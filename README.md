# Car Selling Website 🚗

Hey there! This is my fully functional car selling website where people can buy and sell cars. It's like a complete marketplace for cars - you can search for cars you want to buy, or list your own car to sell. **Everything works!** The frontend AND backend are both done!

## What This Website Can Do

### For Buyers (People Looking to Buy Cars):
- **Browse Cars**: See all the latest cars people are selling on the home page
- **Search & Filter**: Find exactly what you're looking for by:
  - Car brand (Toyota, Honda, Lexus, etc.)
  - Car model (Camry, Civic, RX350, etc.)
  - Year (like 2016, 2020, etc.)
  - Price range (how much money you want to spend)
  - Car type (SUV, Sedan, Hatchback, Pickup Truck, etc.)
  - Fuel type (Gasoline, Diesel, Electric, Hybrid)
  - Location (which state or city)
- **View Car Details**: Click on any car to see:
  - Multiple photos in a nice gallery
  - Full description
  - All specifications (like air conditioning, GPS, leather seats, etc.)
  - Owner's contact information
  - Price and location
- **Save Favorites**: Heart icon to save cars you like to your watchlist
- **Contact Seller**: See the seller's phone number and contact them directly

### For Sellers (People Selling Cars):
- **Create Account**: Sign up to start selling - it actually saves your account!
- **Add Your Car**: Fill out a form with:
  - Car details (brand, model, year)
  - Price
  - Description
  - Upload multiple photos - they actually save to the server!
  - Choose car type and fuel type
  - Add features (like AC, GPS, etc.)
  - Set your location
- **Manage Listings**: 
  - See all your cars in "My Cars" page
  - Edit any listing
  - Update photos
  - Delete listings
- **Track Your Cars**: Know which cars are published and which aren't

## What Makes This Website Work

This website has **TWO PARTS** that work together:

### Frontend (What You See)
- **HTML** - The structure of the pages (the skeleton)
- **CSS** - Makes everything look beautiful (the styling)
- **JavaScript** - Makes things interactive (like buttons and animations)

### Backend (What Happens Behind the Scenes)
- **Laravel** - The PHP framework that powers everything
- **SQLite Database** - Stores all your data (cars, users, images)
- **PHP** - The programming language that processes everything

## Languages and Tools Used

### Frontend Languages:
- **HTML5** - Building the web pages
- **CSS3** - Making it look pretty with custom styles
- **JavaScript** - Adding interactivity and animations

### Backend Languages:
- **PHP 8.4** - The server-side language that does the work
- **Laravel 12** - A powerful PHP framework that makes coding easier

### Database:
- **SQLite** - A simple, file-based database (no server needed!)

### Tools:
- **Laravel Herd** - Easy PHP development environment
- **Composer** - PHP package manager (installs Laravel and other tools)
- **Node.js** - For frontend build tools
- **Nginx** - Web server (comes with Herd)

### Other Libraries:
- **Font Awesome** - Beautiful icons
- **ScrollReveal.js** - Smooth scroll animations

## How Everything Works Together

1. **User visits website** → HTML/CSS shows them the page
2. **User fills out form** → JavaScript sends data to Laravel
3. **Laravel processes** → PHP code runs, saves to database
4. **Database stores** → SQLite saves all the information
5. **Results shown** → Laravel sends data back, HTML displays it

## How to Set Up and Run This Website

### Step 1: Install Everything (if you haven't already)

You need:
- **Laravel Herd** - Download from https://herd.laravel.com
- **Composer** - Usually comes with Herd
- **Node.js** - Download from https://nodejs.org

### Step 2: Setup the Backend

1. Open terminal/command prompt
2. Go to the "Laravel Section" folder:
   ```bash
   cd "Laravel Section"
   ```

3. Install PHP packages:
   ```bash
   composer install
   ```

4. Create the environment file:
   ```bash
   copy .env.example .env
   ```
   (or `cp .env.example .env` on Mac/Linux)

5. Generate app key:
   ```bash
   php artisan key:generate
   ```

6. Make sure database exists:
   - Check that `database/database.sqlite` file exists
   - If not, create it:
     ```bash
     touch database/database.sqlite
     ```

7. Run database migrations (create tables):
   ```bash
   php artisan migrate
   ```

8. Seed the database (add initial data like car brands):
   ```bash
   php artisan db:seed
   ```

### Step 3: Start the Server

If using Laravel Herd, the site should automatically work at:
- `http://car-selling-website.test` (or similar)

Or you can use Laravel's built-in server:
```bash
php artisan serve
```
Then visit: `http://localhost:8000`

### Step 4: Access the Website

Open your browser and go to:
- `http://localhost:8000` (if using artisan serve)
- Or your Herd URL

## Project Structure

```
Car Selling Website/
├── Frontend Files (HTML, CSS, JS)
│   ├── index.html          # Home page
│   ├── login.html          # Login page
│   ├── signup.html         # Signup page
│   ├── view.html           # Car details
│   ├── add_new.html        # Add car form
│   ├── edit_car.html       # Edit car form
│   ├── my_cars.html        # User's cars
│   ├── watchlist.html      # Favorite cars
│   ├── s.html              # Search results
│   ├── css/
│   │   └── app.css         # All styles
│   ├── js/
│   │   └── app.js          # JavaScript
│   └── img/                # Images
│
└── Laravel Section/        # Backend (the engine!)
    ├── app/
    │   ├── Http/Controllers/   # Controllers handle requests
    │   └── Models/             # Models represent database tables
    ├── database/
    │   ├── migrations/         # Database table definitions
    │   ├── seeders/            # Initial data (car brands, etc.)
    │   └── database.sqlite     # The actual database file
    ├── resources/
    │   └── views/              # Blade templates (HTML with PHP)
    ├── routes/
    │   └── web.php             # All the URLs and routes
    ├── storage/                # Uploaded images go here
    └── public/                 # Public files (entry point)
```

## Database Tables

The database stores:
- **users** - People who sign up
- **cars** - All the car listings
- **car_images** - Photos for each car
- **makers** - Car brands (Toyota, Honda, etc.)
- **car_models** - Car models (Camry, Civic, etc.)
- **car_types** - Sedan, SUV, Hatchback, etc.
- **fuel_types** - Gasoline, Diesel, Electric, Hybrid
- **states** - States/Regions
- **cities** - Cities in each state
- **watchlists** - Saved favorite cars

## Features That Actually Work

✅ **User Registration** - Create account, it saves to database  
✅ **User Login** - Actually authenticates users  
✅ **Add Car Listing** - Saves cars to database  
✅ **Upload Images** - Images save to server  
✅ **Search Cars** - Real search through database  
✅ **Filter Cars** - Filters work with database queries  
✅ **View Car Details** - Shows data from database  
✅ **Edit Car** - Update car information  
✅ **Delete Car** - Remove listings  
✅ **Watchlist** - Save favorite cars  
✅ **My Cars** - See all your listings  

## Important Notes

### Environment Setup
- The website uses **SQLite** which is perfect for development
- For production, you might want to use MySQL or PostgreSQL
- Images are stored in `storage/app/public/car_images`
- Make sure storage is linked: `php artisan storage:link`

### Default Data
- When you run `php artisan db:seed`, it adds:
  - 6 car brands (Toyota, Ford, Honda, Chevrolet, Nissan, Lexus)
  - Many car models for each brand
  - Car types (Sedan, SUV, etc.)
  - Fuel types
  - States and cities

## Troubleshooting

**Database not found?**
- Make sure `database/database.sqlite` exists
- Run `php artisan migrate` again

**Images not showing?**
- Run `php artisan storage:link`
- Check `storage/app/public/car_images` folder exists

**Routes not working?**
- Make sure you're accessing through Laravel (not just opening HTML files)
- Use `php artisan serve` or Laravel Herd

## Browser Support

Works on:
- ✅ Chrome
- ✅ Firefox  
- ✅ Safari
- ✅ Edge

Basically, any modern browser!

## What's Next?

The website is fully functional! You can:
- Add more car brands/models
- Add more features
- Deploy it to a server
- Add payment integration
- Add email notifications
- Anything you want!

---

## About

Created by **Zia**

This is a complete, fully functional car selling website with both frontend and backend. It's a great portfolio project showing real web development skills - not just HTML/CSS, but a complete working application!

---

## License

This project is open source and available for personal use.

**Happy coding! 🚀**

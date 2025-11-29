# Project Structure 📁

This project is organized in a **modular format** for easy navigation and modification.

## 📂 Folder Structure

```
Car-Selling-Website/
│
├── 📁 frontend/                    # All frontend files (what users see)
│   ├── 📁 pages/                   # All HTML pages
│   │   ├── index.html              # Home page
│   │   ├── login.html              # Login page
│   │   ├── signup.html             # Registration page
│   │   ├── view.html               # Car details page
│   │   ├── s.html                  # Search results page
│   │   ├── add_new.html            # Add new car listing
│   │   ├── edit_car.html           # Edit car listing
│   │   ├── my_cars.html            # User's car listings
│   │   ├── watchlist.html          # Saved favorite cars
│   │   ├── car_images.html         # Manage car images
│   │   ├── verify_email.html       # Email verification
│   │   └── password-reset.html     # Password reset page
│   │
│   └── 📁 assets/                  # All static assets
│       ├── 📁 css/
│       │   └── app.css             # All website styles
│       ├── 📁 js/
│       │   └── app.js              # All JavaScript code
│       └── 📁 img/                  # All images
│           ├── car.png             # Website logo
│           ├── avatar.png           # Default avatar
│           ├── cars/                # Car photos
│           └── ...                  # Other images
│
├── 📁 backend/                      # Laravel backend (the engine!)
│   ├── 📁 app/
│   │   ├── 📁 Http/Controllers/     # Request handlers
│   │   │   ├── AuthController.php  # Login, register, logout
│   │   │   ├── CarController.php    # Car CRUD operations
│   │   │   ├── HomeController.php   # Homepage
│   │   │   └── WatchlistController.php # Watchlist management
│   │   │
│   │   └── 📁 Models/               # Database models
│   │       ├── User.php             # User model
│   │       ├── Car.php              # Car model
│   │       ├── CarImage.php         # Car images model
│   │       ├── Maker.php            # Car brands
│   │       ├── CarModel.php         # Car models
│   │       └── ...                  # Other models
│   │
│   ├── 📁 database/
│   │   ├── 📁 migrations/           # Database table definitions
│   │   │   ├── create_users_table.php
│   │   │   ├── create_cars_table.php
│   │   │   └── ...                  # All table migrations
│   │   │
│   │   ├── 📁 seeders/              # Initial data
│   │   │   └── DatabaseSeeder.php  # Populates database
│   │   │
│   │   └── database.sqlite          # The actual database file
│   │
│   ├── 📁 resources/
│   │   └── 📁 views/                # Blade templates (HTML with PHP)
│   │       ├── home/
│   │       │   └── index.blade.php
│   │       └── ...
│   │
│   ├── 📁 routes/
│   │   └── web.php                  # All website URLs/routes
│   │
│   ├── 📁 public/                   # Public files (entry point)
│   │   ├── index.php                # Laravel entry point
│   │   └── img/                     # Public images
│   │
│   └── 📁 storage/                  # Uploaded files go here
│       └── app/public/              # Car images storage
│
├── 📁 docs/                         # Documentation
│   ├── README.md                    # Main project documentation
│   ├── SETUP_GUIDE.md              # Setup instructions
│   └── HOSTING_GUIDE.md            # How to host the website
│
├── .gitignore                       # Files to exclude from Git
└── PROJECT_STRUCTURE.md            # This file!
```

## 🎯 Quick Navigation Guide

### Want to modify a page?
→ Go to `frontend/pages/` and find the HTML file

### Want to change styles?
→ Go to `frontend/assets/css/app.css`

### Want to add JavaScript?
→ Go to `frontend/assets/js/app.js`

### Want to change backend logic?
→ Go to `backend/app/Http/Controllers/`

### Want to modify database?
→ Go to `backend/database/migrations/`

### Want to add a new feature?
→ Check `backend/routes/web.php` for routes

## 🔍 Finding Things

| What You Need | Where to Look |
|--------------|---------------|
| Home page | `frontend/pages/index.html` |
| Login page | `frontend/pages/login.html` |
| Car listing form | `frontend/pages/add_new.html` |
| All styles | `frontend/assets/css/app.css` |
| All JavaScript | `frontend/assets/js/app.js` |
| Website logo | `frontend/assets/img/car.png` |
| Backend routes | `backend/routes/web.php` |
| Database tables | `backend/database/migrations/` |
| User authentication | `backend/app/Http/Controllers/AuthController.php` |
| Car operations | `backend/app/Http/Controllers/CarController.php` |

## 📝 File Paths in HTML

All HTML files in `frontend/pages/` use relative paths:
- CSS: `../assets/css/app.css`
- JS: `../assets/js/app.js`
- Images: `../assets/img/...`

## 🚀 How It Works

1. **Frontend** (`frontend/`) - What users see and interact with
2. **Backend** (`backend/`) - Processes requests, handles database
3. **Database** (`backend/database/`) - Stores all data
4. **Routes** (`backend/routes/`) - Connects URLs to functions

## ✨ Benefits of This Structure

✅ **Easy to find** - Everything has a clear location  
✅ **Easy to modify** - Know exactly where to make changes  
✅ **Easy to understand** - Clear separation of concerns  
✅ **Easy to maintain** - Organized and clean  
✅ **Easy to share** - Others can navigate quickly  

---

**Author**: Zia  
**Last Updated**: 2025


# Car Selling Website

A modern, responsive car selling website built with HTML, CSS, and JavaScript.

## Features

- 🚗 Browse and search for cars with advanced filters
- 🔍 Search by maker, model, year, price range, car type, and fuel type
- 📸 Image gallery with carousel functionality
- 👤 User authentication (login/signup)
- ❤️ Watchlist/Favorites functionality
- 📱 Fully responsive design for mobile and desktop
- 🎨 Modern UI with smooth animations

## Tech Stack

- HTML5
- CSS3 (Custom CSS with CSS Variables)
- Vanilla JavaScript
- Font Awesome Icons
- ScrollReveal.js for animations

## Project Structure

```
├── index.html          # Home page
├── login.html          # Login page
├── signup.html         # Signup page
├── view.html           # Car details page
├── add_new.html        # Add new car listing
├── edit_car.html       # Edit car listing
├── my_cars.html        # User's car listings
├── watchlist.html      # User's favorite cars
├── s.html              # Search results page
├── css/
│   └── app.css         # Main stylesheet
├── js/
│   └── app.js          # Main JavaScript file
└── img/                # Images and assets
```

## Getting Started

### Running Locally

1. Clone the repository:
```bash
git clone <repository-url>
cd html-css-car-selling-website-main
```

2. Open the project:
   - Simply open `index.html` in your web browser, or
   - Use a local server (recommended):
```bash
# Using Python 3
python -m http.server 8000

# Using Node.js (http-server)
npx http-server

# Using PHP
php -S localhost:8000
```

3. Visit `http://localhost:8000` in your browser

## Pages

- **Home** (`index.html`) - Browse latest cars and search
- **Login** (`login.html`) - User login
- **Signup** (`signup.html`) - Create new account
- **View Car** (`view.html`) - View car details
- **Add Car** (`add_new.html`) - Add new car listing
- **Edit Car** (`edit_car.html`) - Edit existing listing
- **My Cars** (`my_cars.html`) - Manage your listings
- **Watchlist** (`watchlist.html`) - Your favorite cars
- **Search** (`s.html`) - Search results with filters

## Features in Detail

### Search & Filter
- Filter by maker, model, year, price range
- Filter by car type (Sedan, SUV, Hatchback, etc.)
- Filter by fuel type (Gasoline, Diesel, Electric, Hybrid)
- Filter by location (State/City)
- Sort by price (ascending/descending)

### Car Listings
- Image gallery with thumbnail navigation
- Detailed car specifications
- Owner contact information
- Favorite/Watchlist functionality

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Notes

This is a **frontend-only** project. For a complete application, you would need:
- Backend API for data persistence
- Database for storing car listings, users, etc.
- Authentication system (backend)
- Image upload functionality (backend)

## Author

**Zia**

---

## License

This project is open source and available for personal use.


# Car Selling Website 🚗

Hey there! This is my car selling website where people can buy and sell cars. It's like a marketplace for cars - you can search for cars you want to buy, or list your own car to sell.

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
- **Create Account**: Sign up to start selling
- **Add Your Car**: Fill out a form with:
  - Car details (brand, model, year)
  - Price
  - Description
  - Upload multiple photos
  - Choose car type and fuel type
  - Add features (like AC, GPS, etc.)
  - Set your location
- **Manage Listings**: 
  - See all your cars in "My Cars" page
  - Edit any listing
  - Update photos
  - Delete listings
- **Track Your Cars**: Know which cars are published and which aren't

## All The Pages Explained

1. **Home Page** (`index.html`)
   - Shows a cool slider with two slides
   - Has a big search form at the top where you can filter cars
   - Displays all the latest cars added to the website
   - Each car card shows image, price, location, and type

2. **Login Page** (`login.html`)
   - Where you sign in if you already have an account
   - Can also login with Google or Facebook

3. **Signup Page** (`signup.html`)
   - Create a new account
   - Enter your email, password, name, and phone number
   - Also can sign up with Google or Facebook

4. **Search Results Page** (`s.html`)
   - Shows all cars matching your search
   - Has filters on the left side (sidebar)
   - Can sort by price (low to high or high to low)
   - Shows how many cars were found

5. **Car Details Page** (`view.html`)
   - Shows one car in detail
   - Big photo gallery where you can click through images
   - Full description
   - All car specifications (what features it has)
   - Seller's name and contact info
   - Heart button to add to favorites

6. **Add New Car Page** (`add_new.html`)
   - Form to list your car for sale
   - Fill in all the details
   - Upload multiple photos
   - Choose all the features your car has

7. **Edit Car Page** (`edit_car.html`)
   - Edit any of your existing car listings
   - Change price, description, features, etc.

8. **My Cars Page** (`my_cars.html`)
   - Shows a table of all your listed cars
   - Can see which are published
   - Edit or delete buttons for each car
   - Link to manage photos for each car

9. **Car Images Page** (`car_images.html`)
   - Manage photos for your car listing
   - Reorder photos
   - Delete photos
   - Upload new ones

10. **Watchlist Page** (`watchlist.html`)
    - Shows all the cars you've saved as favorites
    - Easy to find cars you're interested in

11. **Password Reset Page** (`password-reset.html`)
    - If you forgot your password, request a reset here

12. **Email Verification Page** (`verify_email.html`)
    - Verify your email after signing up

## How to Use This Website

### Option 1: Just Open the File
1. Download all the files
2. Double-click on `index.html`
3. It will open in your web browser

### Option 2: Use a Local Server (Better Way)
1. Download all the files
2. Open terminal/command prompt in the folder
3. Run one of these commands:
   - If you have Python: `python -m http.server 8000`
   - If you have Node.js: `npx http-server`
   - If you have PHP: `php -S localhost:8000`
4. Open your browser and go to `http://localhost:8000`

## What This Website Looks Like

- **Beautiful Design**: Modern orange color theme, clean layout
- **Mobile Friendly**: Works great on phones, tablets, and computers
- **Smooth Animations**: Nice effects when scrolling and clicking
- **Easy to Use**: Simple navigation, clear buttons, intuitive layout

## Important Things to Know

### This is Frontend Only
Right now, this website is just the frontend part - meaning what you see on the screen. To make it fully work, you would need:

- **Backend Server**: Something to save all the data (like car listings, user accounts)
- **Database**: Where to store everything permanently
- **Authentication System**: Real login/signup that actually works
- **Image Upload**: Way to actually save photos to a server

Right now, if you try to submit a form or login, nothing will save because there's no backend. It's like a beautiful car with no engine - it looks great but doesn't run yet!

## Technical Stuff (For Developers)

- Made with: HTML, CSS, and JavaScript (no frameworks needed!)
- Uses: Font Awesome icons, ScrollReveal for animations
- Responsive: CSS Grid and Flexbox for layouts
- All custom CSS - no Bootstrap or other frameworks

## Files in This Project

```
├── index.html          # Home page - where everything starts
├── login.html          # Login page
├── signup.html         # Signup page  
├── view.html           # See one car in detail
├── add_new.html        # Form to add your car
├── edit_car.html       # Edit your car listing
├── my_cars.html        # List of all your cars
├── watchlist.html      # Your favorite cars
├── s.html              # Search results page
├── car_images.html     # Manage car photos
├── password-reset.html # Reset password
├── verify_email.html   # Verify email
├── css/
│   └── app.css         # All the styling
├── js/
│   └── app.js          # All the JavaScript functionality
└── img/                # All images (logo, car photos, etc.)
```

## Browser Support

Works on:
- ✅ Chrome
- ✅ Firefox  
- ✅ Safari
- ✅ Edge

Basically, any modern browser!

---

## About

Created by **Zia**

This is a portfolio project showing a complete car selling website interface. Perfect for learning web development or as a starting point for a real car selling platform.

---

**Feel free to use this code, learn from it, or build something even better! 🚀**

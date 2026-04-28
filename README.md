# 🧶 Chunkish Shop Website

A dynamic web-based system for showcasing and managing handmade crochet products. This project is built using **PHP, MySQL, JavaScript, and Bootstrap**, and includes user authentication, cart functionality, and database-driven content.

---

## 📌 Features

### E-Commerce Functionality

* Add to Cart system (AJAX + PHP backend)
* Cart stored in database
* Quantity selection and item removal
* Dynamic total price calculation

  ⚠️ Disclaimer:
  The Chunkish brand and products are not owned by the developer of this system. They belong to a student from Chiang Kai Shek College who granted permission for the brand and product concept to be used for academic/project purposes.
  This website was developed solely as a school project.

### User Authentication

* User registration and login system
* Session-based authentication
* Login, logout, and registration pages

### Interactive UI

* Language switcher (English / Filipino)
* Currency switcher (PHP / USD)
* Responsive design using Bootstrap
* Sticky header with scroll animation

### Contact System

* Contact form with database storage
* Backend processing using PHP

---

## ⚙️ Technologies Used

* **Frontend:** HTML, CSS, Bootstrap, JavaScript
* **Backend:** PHP
* **Database:** MySQL
* **Server:** XAMPP

---

## Setup Instructions

### 1. Install XAMPP

Download and install XAMPP.

---

### 2. Start Server

Open XAMPP Control Panel and start:

* Apache
* MySQL

---

### 3. Setup Database

1. Open:

   ```
   http://localhost/phpmyadmin
   ```
2. Create a database:

   ```
   chunkishwebsite
   ```
3. Import the SQL files from the `dbschema` folder:

   * `cart.sql`
   * `contact.sql`
   * `login.sql`

---

### 4. Configure Database Connection

Make sure your database connection matches:

```php id="2xk81a"
<?php

$servername = "127.0.0.1";
$port = 3306;
$username = "root";   
$password = "12345";        
$dbname = "chunkishwebsite"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Failed to connect DB " . $conn->connect_error;
}

?>
```

---

### 5. Run the Project

1. Place the project folder in:

   ```
   C:\xampp\htdocs\
   ```
2. Open browser:

   ```
   http://localhost/your-folder-name/index.php
   ```

---

## Project Structure

```
CHUNKISH WEBSITE PROJECT/
│
├── css/
│   ├── bootstrap.css
│   ├── bootstrap.min.css
│   ├── contact.css
│   ├── login.css
│   └── style.css
│
├── dbschema/
│   ├── cart.sql
│   ├── contact.sql
│   └── login.sql
│
├── img/                 # Images and assets
│
├── js/
│   ├── all.min.js
│   ├── bootstrap.min.js
│   ├── index.js
│   ├── jquery-3.5.1.min.js
│   ├── login.js
│   └── popper.min.js
│
├── phpmailer/           # Email handling library
│
├── cart_handler.php     # Handles cart operations
├── contact_connect.php  # DB connection for contact
├── contact.html         # Contact page (UI)
├── contact.php          # Contact form processing
├── index.php            # Main homepage
├── login_connect.php    # DB connection for login
├── login.html           # Login page UI
├── login.php            # Login logic
├── logout.php           # Logout logic
└── register.php         # User registration
```

---

## System Overview

### 🛒 Cart System

* Uses JavaScript `fetch()` to communicate with `cart_handler.php`
* Stores cart items in MySQL
* Loads cart automatically on page load

---

### Authentication Flow

* Users register via `register.php`
* Login handled by `login.php`
* Sessions control access and UI display

---

### Contact Feature

* Users submit form in `contact.html`
* Data processed in `contact.php`
* Stored in database via `contact_connect.php`

---

## Troubleshooting

### Database not connecting

* Check database name: `chunkishwebsite`
* Verify MySQL username/password

### Cart not working

* Ensure user is logged in
* Check `cart_handler.php` connection

### Styles or scripts not loading

* Verify folder paths (`css`, `js`, `img`)

---

## 📖 Notes

* Designed for **local development using XAMPP**
* Not yet optimized for production use
* Future improvements:

  * Password hashing & security
  * Payment integration (GCash, PayPal)
  * Admin dashboard
  * Checkout page
  * Navbar Collapse
  * Mobile Device UI
  * Full Responsiveness

---

## 🌐 Live Website Deployment

A published version of this project is also available online for demonstration purposes. The website was deployed using InfinityFree hosting.

🔗 Live link:
http://chunkish.ct.ws/

---

## 👩‍🎨 Author

Leih Aldrin Balbin
---



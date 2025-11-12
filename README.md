# pc-builder-ecommerce

## Features

### UI & Layout
- **Custom front-end UI with bootstrap-5**
- **Back-end (Admin Panel) template setup**

### Core Functionality
- **Hero Carousel single page CRUD with validation**
- **Product Display Filtered by Category**
- **Product Display Filtered by Sub-Category**
- **Category CRUD with validation**
- **Sub-Category CRUD with validation**
- **Product CRUD with validation**
- **Brand CRUD with validation**

### Integrations
- **Laravel Breeze**

---

**Requirements**

- PHP **^8.2**
- Laravel **^12.0**
- **Composer**
- **phpMyAdmin**
- **laravel breeze**

---

**To Run The Project**

1. Start **Apache** and **MySQL** in **XAMPP**.
2. Create a database named **`ecommerce`** in **phpMyAdmin**, and import the **`ecommerce.sql`** file from the **`DB`** folder.
3. Clone the project
    ```bash
    git clone https://github.com/talha-51/pc-builder-ecommerce
    ```
4. Run the following commands one by one:
   ```bash
   composer install
   ```
   ```bash
   npm install
   ```
   ```bash
   cp .env.example .env
   ```
   ```bash
   php artisan key:generate
   ```
   ```bash
   php artisan migrate
   ```
   ```bash
   npm run dev
   ```
   ```bash
   php artisan serve
   ```
   Go inside the .env file and change the DB name to **"ecommerce"**
   
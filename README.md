<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/your-username/your-repo/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

# E-Commerce Web Application

This project is a **Laravel-based** web application designed to facilitate the sale of electronic products online. The platform provides both users and administrators with essential functionalities for purchasing and managing products.

## Project Overview

The main objective of this project is to create an **e-commerce platform** that is user-friendly, secure, and scalable. It allows users to browse a catalog of electronic products, manage a shopping cart, and make secure purchases. Administrators have full control over product management and order processing.

## Features

### User Features
- **User Authentication**: Register, login, and manage profiles securely.
- **Product Browsing**: View and search for electronic products.
- **Shopping Cart**: Add, update, and remove products.
- **Secure Checkout**: Complete purchases with integrated payment gateway.
- **Order Tracking**: View order history and details.

### Admin Features
- **Product Management**: Add, edit, and remove products.
- **Order Management**: View and manage user orders.

## Technologies Used

- **Laravel**: The PHP framework used for the backend.
- **MySQL**: Database for storing product, user, and order data.
- **HTML, CSS, JavaScript**: For the frontend and UI interactions.
- **Bootstrap**: For responsive design and user-friendly interface.
- **Cloudinary**: For image storage and manipulation.
- **MVC Architecture**: The application follows the Model-View-Controller (MVC) pattern for structured code organization.

## System Architecture

The application is built using a modular and object-oriented approach:
- **Users Module**: Handles user authentication and profile management.
- **Products Module**: Manages product listing, search, and details.
- **Orders Module**: Handles order creation, payment, and tracking.

## Database Structure

The database includes the following key tables:
- **Users**: Stores user details like name, email, password, and roles (admin or customer).
- **Products**: Stores product information like name, description, price, and stock.
- **Orders**: Stores order details and links to specific users and products.
- **Cart**: Stores temporary cart data before checkout.

## Installation

To run this project locally, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/your-repo.git
   ```

2. Navigate to the project folder:
   ```bash
   cd your-project-folder
   ```

3. Install dependencies:
   ```bash
   composer install
   npm install
   ```

4. Set up your environment:
   - Copy the `.env.example` to `.env` and configure your database and other settings:
     ```bash
     cp .env.example .env
     ```

5. Generate an application key:
   ```bash
   php artisan key:generate
   ```

6. Run migrations to create database tables:
   ```bash
   php artisan migrate
   ```

7. Serve the application:
   ```bash
   php artisan serve
   ```

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

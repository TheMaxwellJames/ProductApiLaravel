# User Authentication and Product CRUD API

This project is a RESTful API built with Laravel and Sanctum that provides user authentication features and a set of endpoints for managing products. It is designed to be used as a backend service for applications that require user registration, authentication, and product management.

## Table of Contents

- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [User Authentication](#user-authentication)
  - [Registration](#registration)
  - [Login](#login)
  - [Logout](#logout)
- [Product CRUD](#product-crud)
  - [Create Product](#create-product)
  - [Read Products](#read-products)
  - [Update Product](#update-product)
  - [Delete Product](#delete-product)

## Getting Started

### Prerequisites

Before you begin, ensure you have the following installed:

- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/) or another database of your choice
- [Laravel](https://laravel.com/docs/8.x/installation)

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/your-repo.git
   cd your-repo


Install PHP dependencies:

composer install




ChatGPT
Certainly! Here's a sample README file content for your project, which includes information about setting up, using, and understanding the user authentication API along with the product CRUD API:

markdown
Copy code
# User Authentication and Product CRUD API

This project is a RESTful API built with Laravel and Sanctum that provides user authentication features and a set of endpoints for managing products. It is designed to be used as a backend service for applications that require user registration, authentication, and product management.

## Table of Contents

- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [User Authentication](#user-authentication)
  - [Registration](#registration)
  - [Login](#login)
  - [Logout](#logout)
- [Product CRUD](#product-crud)
  - [Create Product](#create-product)
  - [Read Products](#read-products)
  - [Update Product](#update-product)
  - [Delete Product](#delete-product)

## Getting Started

### Prerequisites

Before you begin, ensure you have the following installed:

- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/) or another database of your choice
- [Laravel](https://laravel.com/docs/8.x/installation)

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/your-repo.git
   cd your-repo
Install PHP dependencies:

bash
Copy code
composer install
Configure your database connection by updating the .env file with your database credentials.

Run database migrations:


php artisan migrate




Start the development server:

php artisan serve




Now your Laravel application is up and running.

User Authentication
Registration
URL: /api/register
Method: POST
Description: Register a new user.
Request Body: JSON object with name, email, password, and password_confirmation fields.
Response: JSON response with a success message if registration is successful.







Login
URL: /api/login
Method: POST
Description: Authenticate a user.
Request Body: JSON object with email and password fields.
Response: JSON response with an access token if authentication is successful.





Logout
URL: /api/logout
Method: POST
Description: Logout an authenticated user.
Authorization: Bearer token in the Authorization header.
Response: JSON response indicating successful logout.





Product CRUD
Create Product
URL: /api/products
Method: POST
Description: Create a new product.
Authorization: Bearer token in the Authorization header.
Request Body: JSON object with name, description, price, and other product details.
Response: JSON response with the newly created product.





Read Products
URL: /api/products
Method: GET
Description: Retrieve a list of products.
Authorization: Bearer token in the Authorization header.
Response: JSON response with a list of products.





Update Product
URL: /api/products/{id}
Method: PUT
Description: Update an existing product.
Authorization: Bearer token in the Authorization header.
Request Body: JSON object with updated product details.
Response: JSON response with the updated product.






Delete Product
URL: /api/products/{id}
Method: DELETE
Description: Delete an existing product.
Authorization: Bearer token in the Authorization header.
Response: JSON response indicating successful deletion.








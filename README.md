# Blogspot-Laravel

A full-stack blog application built with Laravel, featuring CRUD functionality.

## About

Blogspot-Laravel is a web application that allows users to create, read, update, and delete (CRUD) blog posts. It's built using the Laravel framework, which provides a robust and elegant structure for web development. This project represents a first Laravel application, demonstrating core Laravel concepts and full-stack development.

## Features

-   **Create Blog Posts:** Allows users to create new blog posts with titles and content.
-   **Read Blog Posts:** Displays blog posts in a user-friendly format.
-   **Update Blog Posts:** Allows users to edit existing blog posts.
-   **Delete Blog Posts:** Allows users to remove blog posts.
-   **Database Integration:** Uses Laravel's Eloquent ORM for database interaction.
-   **Dynamic Content:** Uses Blade templating for dynamic HTML generation.
-   **Routing:** Implements Laravel's routing system for URL management.
-   **User Interface:** Provides a user-friendly interface for blog management.

## Technologies Used

-   **Laravel:** PHP web application framework.
-   **PHP:** Backend scripting language.
-   **Blade:** Laravel's templating engine.
-   **MySQL/PostgreSQL (or other Laravel supported databases):** Database for storing blog data.
-   **HTML/CSS/JavaScript:** Frontend technologies for user interface.

![Tech Stack](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Tech Stack](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Tech Stack](https://img.shields.io/badge/Blade-orange?style=for-the-badge)
![Tech Stack](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)

## Installation and Setup

1.  **Clone the Repository:** `git clone https://github.com/Joshualaycoh/Blogspot-Laravel.git`
2.  **Navigate to the Directory:** `cd Blogspot-Laravel`
3.  **Install Dependencies:** `composer install` and `npm install`
4.  **Configure Environment:**
    -   Copy `.env.example` to `.env`.
    -   Update the database connection details in `.env`.
5.  **Generate Application Key:** `php artisan key:generate`
6.  **Run Database Migrations:** `php artisan migrate`
7.  **Run the Development Server:** `php artisan serve` or `npm run dev`
8.  **Access the Application:** Open your browser and navigate to `http://localhost:8000`.

## Contributing

Contributions are welcome! Please follow the existing code structure and submit pull requests with clear descriptions of your changes.

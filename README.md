
# CRUD Laravel Sail

This repository is a sample CRUD (Create, Read, Update, Delete) application built using Laravel and Sail, demonstrating the use of basic CRUD operations within a Laravel project.

**Demo:** [http://18.222.249.8](http://18.222.249.8)

## Table of Contents

- [Project Overview](#project-overview)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Features](#features)

## Project Overview

This project demonstrates how to build a simple CRUD application using the Laravel framework with Docker through Laravel Sail. It includes functionality to create, read, update, and delete records in a database. The project is ideal for learners or developers looking for a basic project setup using Laravel and Docker.

## Prerequisites

Ensure you have the following before starting:

- PHP >= 8.0
- Composer
- Docker & Docker Compose
- Laravel Sail (included in this project)
- Git (for cloning the repository)

## Installation

Follow these steps to set up the project locally:

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/sugihAF/CRUD-Laravel-Sail.git
   ```

2. **Navigate to the Project Directory:**

   ```bash
   cd CRUD-Laravel-Sail
   ```

3. **Install Dependencies:**

    ```bash
    docker run --rm \
        -u "$(id -u):$(id -g)" \
        -v $(pwd):/var/www/html \
        -w /var/www/html \
        laravelsail/php81-composer:latest \
        composer install --ignore-platform-reqs
    ```

4. **Start Laravel Sail:**

    Start Sail using Docker:

    ```bash
   ./vendor/bin/sail up -d
    ```

    This command will pull the necessary Docker containers (for PHP, MySQL, etc.) and run them.

5. **Run Migrations:**

    After the Docker containers are up, run the following command to migrate the database:

    ```bash
    ./vendor/bin/sail artisan migrate
    ```

6. **Access the Application:**

    Once Sail is running, access the application at:

    ```bash
    http://localhost
    ```

7. **Login:**

   To access the application as an admin, use the following default credentials:

   - **Email:** `admin@example.com`
   - **Password:** `password`

## Usage

Once the application is running, you can use the following endpoints to manage data:

- **Items:** `/items` – Manage CRUD items.
- **Categories:** `/categories` – View categories.

Test CRUD operations directly in your browser or use an API client (e.g., Postman, Insomnia) to make requests.

## Features

- **Basic CRUD operations:** Create, Read, Update, and Delete records.
- **Dockerized environment:** Easy setup using Laravel Sail and Docker.
- **Database migrations:** Built-in support for managing the application's database schema.
- **RESTful API structure:** Follows RESTful conventions for routes and controllers.
- **Scalable:** The project architecture allows easy extension and modification.

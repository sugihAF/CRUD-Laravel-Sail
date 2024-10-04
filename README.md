# CRUD Laravel Sail

This repository is a sample CRUD (Create, Read, Update, Delete) application built using Laravel and Sail, which demonstrates the use of basic CRUD operations within a Laravel project.

**Demo:** [http://18.222.249.8](http://18.222.249.8)

## Table of Contents

- [Project Overview](#project-overview)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Features](#features)

## Project Overview

This project demonstrates how to build a simple CRUD application using the Laravel framework with Docker through Laravel Sail. It includes the functionality to create, read, update, and delete records in a database. The project is ideal for those who are learning Laravel or looking for a basic project setup using Laravel and Docker.

## Prerequisites

Before you begin, ensure you have met the following requirements:

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

To use Docker, you can start Laravel Sail with the following command:

    ```bash
    
    ./vendor/bin/sail up -d
    ```

5. ** This command will pull the necessary Docker containers (for PHP, MySQL, etc.) and run them. :**

Run Migrations:

After the Docker containers are up and running, migrate the database:

    ```bash
    
    ./vendor/bin/sail artisan migrate
    ```

6. **Access the Application:**

Once Sail is up, you can access the application at:

    ```bash
    
        http://localhost
    ```

7. **Login:**

   To access the application as an admin, use the following default credentials:

   - **Email:** `admin@example.com`
   - **Password:** `password`

## Usage

Once the application is running, you can use the following endpoints to manage data:

- **items:** `/items` – Add CRUD items menu.
- **categories:** `/categories` – View categories.

You can test the CRUD operations by accessing these endpoints directly in your browser, or by using an API client like Postman or Insomnia to make requests.

## Features

- **Basic CRUD operations:** Allows users to Create, Read, Update, and Delete records.
- **Dockerized environment:** Easy setup using Laravel Sail and Docker, providing a containerized development environment.
- **Database migrations:** Built-in migration support to manage the application's database schema.
- **RESTful API structure:** The project follows RESTful conventions for its routes and controllers.
- **Scalable:** The project architecture allows for easy extension and modification.

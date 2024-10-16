# Blog CRUD App

## Introduction
This is a simple Blog CRUD (Create, Read, Update, Delete) application built using PHP and the Laravel framework. The app allows users to create, view, update, and delete blog posts. The backend uses MySQL for database storage and Laravel for handling routes and logic.

## Technologies
- **Laravel**: ^10.10 (PHP framework)
- **PHP**: ^8.1
- **MySQL**: 8.x.x
- **Composer**: Dependency management tool for PHP

## Features
- **Create Blog Post**: Add new blog posts with title, content, and timestamps.
- **Read Blog Post**: View all blog posts and individual post details.
- **Update Blog Post**: Edit existing blog posts.
- **Delete Blog Post**: Remove blog posts from the database.
- **Validation**: Form input validation for title and content.
- **Pagination**: Blog post listing is paginated for better user experience.

## Setup

### 1. Clone the Repository
Clone the project to your local machine:
```bash
git clone https://github.com/Ahmedmaghrapy11/blog-api.git
cd blog-api
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Set Up Environment Variables
- Copy the .env.example file to create your .env file:
```bash
cp .env.example .env
```
- Then, open the .env file and update the database settings to match your MySQL configuration:
```code
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=blog_crud
    DB_USERNAME=your_mysql_username
    DB_PASSWORD=your_mysql_password
```

### 4. Create Database in MySQL
```sql
CREATE DATABASE blog_crud;
```

### 5. Generate Application Key
```bash
php artisan key:generate
```

### 6. Run Migrations php artisan serve
```bash
php artisan migrate
```

### 6. Run the Development Server
```bash
php artisan serve
```

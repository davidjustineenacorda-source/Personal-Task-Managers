# Personal Task Managers

**Name:** David Justine Enacorda
**Section:** BSIT Sec 10 – 2nd Year

## Description

Personal Task Managers is a simple task management web application built with Laravel. It allows users to create, view, update, and delete tasks.

## Features

* Add a new task
* View all tasks
* Update an existing task
* Delete a task
* Delete confirmation
* Simple and clean interface

## Sections

### Dashboard

Displays the list of tasks and provides access to the task management features.

### Add Task

Allows the user to create a new task by entering a title and description.

### Update Task

Allows the user to edit and update an existing task.

### Delete Task

Allows the user to remove a task with a confirmation message before deletion.

## Technologies Used

* Laravel
* PHP
* MySQL
* HTML
* CSS
* Blade Templates

## CRUD Operations

| Operation | Description           |
| --------- | --------------------- |
| Create    | Add a new task        |
| Read      | View existing tasks   |
| Update    | Edit an existing task |
| Delete    | Remove a task         |

## How to Run

1. Open the project folder in the terminal.
2. Install dependencies:

```bash
composer install
```

3. Create the environment file:

```bash
cp .env.example .env
```

4. Generate the application key:

```bash
php artisan key:generate
```

5. Configure the database in `.env`.

6. Run migrations:

```bash
php artisan migrate
```

7. Start the Laravel server:

```bash
php artisan serve
```

8. Open the application in your browser:

```text
http://127.0.0.1:8000
```

## Project Structure

```text
Personal-Task-Managers/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│   └── views/
├── routes/
├── storage/
├── tests/
├── .env.example
├── artisan
├── composer.json
└── README.md
```

## Author

**David Justine Nacorda**
**BSIT Sec 10 – 2nd Year**


# Laravel To-Do List Application

This is a simple To-Do List application built with Laravel using the MVC structure. It allows users to create, read, update, and delete tasks. The application also implements request validation and follows best practices for structuring a Laravel project.

## Features

-   Create new tasks

-   View all tasks

-   Mark tasks as completed

-   Edit existing tasks

-   Delete tasks

-   Request validation using Form Requests

-   Clean MVC structure

## Usage

### Creating a Task

To create a new task, click the "Add Task" button and fill in the task title. The task will be added to the list of tasks.

### Viewing Tasks

The main page displays a list of all tasks. Completed tasks are shown with a strikethrough.

### Editing a Task

You can edit any task by clicking on its title. You will be redirected to an edit form where you can change the task details.

### Marking a Task as Completed

Tasks can be marked as completed by clicking on their title, which applies the `line-through` class.

### Deleting a Task

You can delete any task by clicking the delete button next to it.

## Validation

The application uses Laravel's **Form Request Validation** to validate input data when creating and updating tasks. Validation rules are defined in a custom request file (`TaskRequest`), ensuring that task titles are required and follow specific constraints.

### Request File Example (`TaskRequest.php`):

```php

public function rules()

{

    return [
    #There is a rule that the title is required and must be a string with a maximum length of 255 characters.
    ];

}

```

## Project Structure

This project follows the **Model-View-Controller (MVC)** pattern.

-   **Models**: The `Task` model is responsible for interacting with the database.

-   **Views**: Blade templates are used to display the list of tasks and forms.

-   **Controllers**: `TaskController` handles business logic and user interactions.

### Routes

Routes are defined in the `web.php` file. Example:

```php

Route::resource('tasks', TaskController::class);

```

This uses Laravel's resource routes, automatically creating routes for CRUD operations.

## Testing

You can write tests for your application using Laravel's testing capabilities. Run the following command to execute tests:

```bash

php artisan test

```

## Contributing

Feel free to contribute to this project by submitting issues or pull requests. All contributions are welcome!

## License

This project is open-source and licensed under the MIT License.

---

This `README.md` provides a comprehensive overview of your Laravel To-Do List application and covers installation, usage, and the structure of the project. Let me know if you'd like to modify anything!

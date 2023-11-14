# Search In All Fields Of Related Tables


## Overview

**Search In All Fields Of Related Tables** is an application designed to facilitate searching across multiple fields within related tables in a database. The application allows users to efficiently search for specific information encompassing various related entities.

Key Features:

- Seamless search functionality across interconnected tables.
- Utilizes Laravel framework's powerful Eloquent relationships.
- User-friendly interface for easy navigation and data retrieval.

This project aims to simplify the search process within a database by encompassing related tables, enhancing the user experience when querying information across various fields.

## Author

- **Name:** Juan Esteban Benjumea Correa
- **GitHub:** [GitHub Profile](https://github.com/esteban5tael)
- **Email:** [Your Email Address](mailto:jebcdev@gmail.com)
- **YouTube:** [Your YouTube Channel](https://www.youtube.com/@jebcdev)

## Contents

- [Models](#models)
- [Controllers](#controllers)
- [Database](#database)
- [Routes](#routes)
- [Views](#views)
- [Additional Information](#additional-information)

### Models

#### User.php

- Defines the `User` model class.
- Includes relationships with categories and products.

#### Product.php

- Defines the `Product` model class.
- Establishes relationships with users and categories.

#### Category.php

- Defines the `Category` model class.
- Contains relationships with users and products.

### Controllers

#### \_SiteController.php

- Handles the application's main logic.
- Includes an index method to display products based on search.

### Database

#### Migrations

- **categories_migration.php**: Creates the `categories` table with user relationships.
- **products_migration.php**: Creates the `products` table with user and category relationships.

#### Seeders

- **UserSeeder.php**: Seeds the database with admin and user accounts.
- **CategorySeeder.php**: Seeds the `categories` table with predefined categories.
- **ProductSeeder.php**: Seeds the `products` table with sample products.

#### DatabaseSeeder.php

- Orchestrates the seeding process for database population.

### Routes

#### Web.php

- Defines routes for index, dashboard, profile, and authentication functionalities.

### Views

#### SampleView.blade.php

- Contains a sample view with a search form and table for displaying product information.

Here's the content for the `### Additional Information` section in your `README.md`:

---

### Additional Information

#### Installation Steps

To set up the project, follow these steps:

1. **Composer Installation**:
    - Run `composer install` in the project root directory to install PHP dependencies.

2. **NPM Installation**:
    - Execute `npm install` to install necessary JavaScript dependencies.

3. **Environment Configuration**:
    - Review the `.env` file and ensure that all required configurations, including database settings and application keys, are properly set.

#### Running the Application

- Use `php artisan serve` to start the development server.

#### Notes

- Ensure your local environment meets the prerequisites specified in the project documentation.
- For detailed information on setting up Laravel applications, refer to the official [Laravel Documentation](https://laravel.com/docs).



## Some Used and Modified Files:

1. **User.php** (in `App\Models`)
2. **Product.php** (in `App\Models`)
3. **Category.php** (in `App\Models`)
4. **\_SiteController.php** (in `App\Http\Controllers`)
5. **categories_migration.php** (a migration file for creating the `categories` )
6. **products_migration.php** (a migration file for creating the `products` table)
7. **UserSeeder.php** (in `Database\Seeders`)
8. **CategorySeeder.php** (in `Database\Seeders`)
9. **ProductSeeder.php** (in `Database\Seeders`)
10. **DatabaseSeeder.php** (in `Database\Seeders`)
11. **Web.php** (in `routes`)
12. **SampleView.blade.php** (a Blade view file)

* These files are related to Laravel models, controllers, database seeding,routes, and view templates within your Laravel application. *
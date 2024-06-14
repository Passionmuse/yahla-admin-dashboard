# Yahla Admin Dashboard

This is the Yahla Admin Dashboard, a Laravel-based project for managing Yahla services.

## Installation

Follow these steps to get the project up and running on your local machine.

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js and npm
- MySQL

### Steps

1. Clone the repository:
    ```bash
    git clone git@gitlab.com:yahla/yahla-admin-dashboard.git
    cd yahla-admin-dashboard
    ```

2. Install the dependencies:
    ```bash
    composer install
    npm install
    npm run dev
    - MongoDB

    ```

3. Set up the environment variables:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. Configure the MongoDB settings in the `.env` file:
    ```
    DB_CONNECTION=mongodb
    DB_HOST=127.0.0.1
    DB_PORT=27017
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

5. Run the migrations:
    ```bash
    php artisan migrate
    ```

6. Serve the application:
    ```bash
    php artisan serve
    ```

## Usage

Explain how to use the application here.

## Contributing

Guidelines for contributing to the project.

## License

Specify the license under which the project is distributed.

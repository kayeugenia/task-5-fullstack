# task-5-fullstack
Virtual Internship Experience (Investree) - Fullstack - Kay Eugenia Purnama

### How to fetch from API
To interact with the API, follow these steps:

1. Create a .env file by copying the content of .env.example and fill in the required database details such as DB_DATABASE, DB_USERNAME, and DB_PASSWORD.
2. Run `php artisan migrate` and make sure you have already installed the required dependencies by running `composer install`
3. Start the server by running the command `php artisan serve` in your terminal.
4. Launch POSTMAN, a popular API client, on your computer.
5. Set the base URL as http://localhost:8000/api/v1/ to access the API endpoints.
6. Perform a GET request to the API endpoint posts to view all posts with pagination.
7. Test the Eloquent relationships by creating posts and categories and ensure that the relationships are correctly established.

# test-api

Run the migrations:
- php artisan migrate

Seed the application with users, articles, and comments:
- php artisan db:seed

Grab the api_token value of a user in the database to call the api. Add the following header to requests:
- Accept: application/json
- Authorization: Bearer {api_token}

Available resources:
GET: /articles
POST: /article
POST: /comment
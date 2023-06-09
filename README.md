## Description
This is a very tiny project, to use a GraphQL client with Laravel.

Please, make sure that you have docker on your machine before running the project.
You will just need to run `composer install` and then `./vendor/bin/sail up` and you will find the working app under `http://localhost`.

Note: that you will need to create your own `.env` file, and replace `GRAPHQL_ENDPOINT` and `GRAPHQL_CREDENTIALS`, you can copy `.env.example` and change as needed ;)

The `GRAPHQL_CREDENTIALS` variable accepting the `Bearer` token directly, so you don't need to change so much.


This is the GraphQL client I used in the project if you want to have a look:
https://github.com/bendeckdavid/graphql-client

This project is not depending on any data store (like MySQL/Redis), they just came with laravel on the `docker-compose` file but not used in the project, so every refresh on the browser you would expect a new request to the `GraphQLServer`, this is not optimal, but this is the requested task in the meantime.

This picture represents the requested ER diagram (not related specifically to this code).

<img width="741" alt="Screenshot 2023-03-19 at 11 27 24 AM" src="https://user-images.githubusercontent.com/20791641/226166092-ac756b6b-9b1b-403c-8bd7-f55fb133d5de.png">

Please, let me know if you have any comments, always welcome.

## Installation

You will need Composer installed globally, otherwise you will have to run commands from install script one-by-one.

Run command `./install` or `bash install`

Enter MySQL-database credentials in `.env` file

Run command `vendor/bin/phinx migrate` to run migrations

## Server

You can use local PHP server: cd into public directory `cd public` and run `php -S localhost:8080`

Navigate to http://localhost:8080 to see application

#### Apache

Enable mod_rewrite and configure virtual host to have web-root in `public/` folder of the app.

#### nginx

Configure Nginx with proper location

```
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```
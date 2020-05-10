## Tasker

Tasker is a web application built using Laravel framework to create your task

## Configuration

Create the 'tasker' database,

and then change your database configuration on .env:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tasker
DB_USERNAME=root
DB_PASSWORD=root
```

For MAMP users add this to your .env

```env
DB_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock
```

Run migration

```php
php artisan migrate
```

Run seed

```php
php artisan db:seed
```

Run the server

```php
php artisan serve
```

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)

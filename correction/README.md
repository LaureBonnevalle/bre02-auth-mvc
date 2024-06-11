# bre01-auth-mvc
Exercise to set up authentication using OOP and the MVC design pattern

## Database

You will need to create a `config/database.txt` file with your own database info.

The file format :

```txt
username
password
host
database_name
```

### Structure of the users table

- id
- username
- email
- password
- role (USER or ADMIN)
- created_at

## Available routes in the project :

- `?route=login`
- `?route=check-login`
- `?route=register`
- `?route=check-register`
- `?route=profile`
- `?route=logout`
- no route : redirect to login
- unknown route : 404 page

## Tests

You can run the files in the `tests` folder to test different parts of the project.

- Install XAMPP
- Start Apache and MySQL 
- Goto C:/xampp/htdocs/
- Create a project folder there. So:
C:/xampp/htdocs/giver_project
- Open the project folder in Vs-Code
- Create  a "index.php" file and PHP Code
- Open "localhost/giver_project" in browser to see the PHP Code Output

- To run other PHP files, open "localhost/giver_project/test.php"

- ********** Laravel **********
- Laravel is a framework for PHP which provides easy syntax and efficient coding in PHP
- It follows MVC(Model, View and Controller)
- View is FrontEnd and Controller is Backend
- Controller and View can use Model
- Every View has its Controller
- Use Model to work with database

- Setup:
    - Install "Composer"
    - Open cmd and goto htdocs location using "cd" 
    - Run command: composer create-project laravel/laravel blog
    - Run command: cd blog
    - Run command: php artisan serve
    - CMD will give local host port name. Eg: <http://127.0.0.1:8000>
    - Copy paste this port in browser to see the project 

- Goto blogs/resources/views
- Create new file named: "file_name.blade.php"
- Goto blogs/routes and open "web.php"
- Edit the return path to your "file_name"

- Visit https://laravel.com/ for Laravel Tutorial and Docs

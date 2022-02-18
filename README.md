# Simple PHP Router

A simple PHP router to handle and validate the requests to a site. It can be part of a greater project to use MVC model.

 1. Modify the .htaccess file to point to the project's directory, this will save all requests in the parameter URI:
 ```
 RewriteEngine On
 RewriteBase /php-router <-- Change here
 RewriteCond %{REQUEST_FILENAME} !-f
 RewriteCond %{REQUEST_FILENAME} !-d
 RewriteRule ^(.+)$ index.php?uri=$1 [QSA,L]
 ```
2. At index.php, require *routes.php*
3. Create the object with the pages available in the project:
```
new Route($index, <-- View file containing the home page
		  $http404, <-- View if a page is doesn't exists
		  $routes <-- Array of available routes as the key and the view file as the value)
```
4. At the body of the project include the view requested:
```
$route->page();
```

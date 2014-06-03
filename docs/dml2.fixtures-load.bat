::c:\xampp\php\php.exe c:\xampp\htdocs\dml2\app\console doctrine:database:drop --force
::c:\xampp\php\php.exe c:\xampp\htdocs\dml2\app\console doctrine:database:create
::c:\xampp\php\php.exe c:\xampp\htdocs\dml2\app\console doctrine:schema:create
::c:\xampp\php\php.exe c:\xampp\htdocs\dml2\app\console doctrine:fixtures:load --no-interaction
@echo off
set ruta=%cd%
set exec="\app\console"
echo.
php %ruta%%exec% doctrine:database:drop --force
php %ruta%%exec% doctrine:database:create
php %ruta%%exec% doctrine:schema:create
php %ruta%%exec% doctrine:fixtures:load --no-interaction
@echo off

set exec="app\console"
echo.

cd ..
php %exec% doctrine:database:drop --force
php %exec% doctrine:database:create
php %exec% doctrine:schema:create
php %exec% doctrine:fixtures:load --no-interaction
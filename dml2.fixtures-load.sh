#!/bin/sh
php /home/oswaldo/sf2Projects/dml2/app/console doctrine:database:drop --force
php /home/oswaldo/sf2Projects/dml2/app/console doctrine:database:create
php /home/oswaldo/sf2Projects/dml2/app/console doctrine:schema:create
php /home/oswaldo/sf2Projects/dml2/app/console doctrine:fixtures:load --no-interaction
#!/bin/sh
ruta=`pwd`
php $ruta/app/console doctrine:database:drop --force
php $ruta/app/console doctrine:database:create
php $ruta/app/console doctrine:schema:create
php $ruta/app/console doctrine:fixtures:load --no-interaction
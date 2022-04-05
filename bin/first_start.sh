#!/bin/bash

docker-composer exec app composer install
docer-compose exec app chmod 777 .web/assets -R
docker-compose exec app chmod 777 .runtime -R
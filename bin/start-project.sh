#!/bin/bash

docker-compose exec app composer global require "fpx/composer-asset-plugin:^1.4.1"
docker-compose exec app composer create-project --prefer-dist --stability=dev yiisoft/yii2-app-basic .
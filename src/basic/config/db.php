<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => "mysql:host=" . $_ENV['DB_DATBASE'] . ";dbname=yii2basic",
    'username' => 'root',
    'password' => $_ENV['DB_PASSWORD'],
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];

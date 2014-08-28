<?php

return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOPgSql\Driver',
                'params' => array(
                    'host' => 'localhost',
                    'port' => '5432',
                    'user' => 'postgres',
                    'password' => 'm2smart',
                    'dbname' => 'zf2_livraria',
                    'driverOptions' => array(
                        PDO::PGSQL_ATTR_INNIT_COMMAND => "SET NAMES 'UTF-8'"
                    )
                )
            )
        )
    ),
);

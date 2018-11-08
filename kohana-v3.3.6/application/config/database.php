<?php
return array
(
    'default' => array(
        'type'       => 'MySQLi',
        'connection' => array(
            'hostname'   => 'localhost',
            'database'   => 'begin_kohana',
            'username'   => 'root',
            'password'   => FALSE,
            'persistent' => FALSE,
            'ssl'        => NULL,
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE,
    ),
);
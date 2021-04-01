<?php 

return [
    'model_defaults' => [
        'namespace'       => 'App\Model\Banquet',
        'base_class_name' => \Illuminate\Database\Eloquent\Model::class,
        'output_path'     => 'Model/Banquet',
        'no_timestamps'   => null,
        'date_format'     => null,
        'connection'      => 'mysql_banquet',
        'backup'          => null,
    ],
    'db_types' => [
        'enum' => 'string',
    ],
];
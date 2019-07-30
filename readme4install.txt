

For twilio api

composer require twilio/sdk
composer require authy/php


For Mqtt Connection


composer require salmanzafar/laravel-mqtt

To declare the provider and/or alias explicitly, then add the service provider to your config/app.php

In your config/app.php

'providers' => [
	Salman\Mqtt\MqttServiceProvider::class, 
];

And then add the alias to your config/app.php:

'aliases' => [
	'Mqtt' => \Salman\Mqtt\Facades\Mqtt::class,
];

Configuration

publish the configuration file

php artisan vendor:publish --provider="Salman\Mqtt\MqttServiceProvider"

Config/mqtt.php

    'host'     => env('mqtt_host','127.0.0.1'),
    'password' => env('mqtt_password',''),
    'username' => env('mqtt_username',''),
    'certfile' => env('mqtt_cert_file',''),
    'port'     => env('mqtt_port','1883'),
    'debug'    => env('mqtt_debug',false) //Optional Parameter to enable debugging set it to True


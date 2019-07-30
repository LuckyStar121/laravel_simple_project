<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 7/25/2019
 * Time: 12:53 AM
 */
return [
    'host'     => env('mqtt_host','postman.cloudmqtt.com'),
    'password' => env('mqtt_password','Sf32rlWCAf-d'),
    'username' => env('mqtt_username','vygspdmt'),
    'certfile' => env('mqtt_cert_file',''),
    'port'     => env('mqtt_port','10888'),
    'debug'    => env('mqtt_debug',true) //Optional Parameter to enable debugging set it to True
];
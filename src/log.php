<?php


namespace Styde;


class log
{
    public static $logger;

    public static function setLogger($logger){
        static::$logger = $logger;
    }
    public static function info($message){
        static::$logger->info($message);
    }
}
<?php

class Hello
{
    public function __construct()
    {

        //rest
    }

    public static function hello()
    {
        (function () {
            echo 'Hello World';
        })();
    }

    public static function hello2()
    {
        (function () {
            echo 'Hello World 2';
        })();
    }
}

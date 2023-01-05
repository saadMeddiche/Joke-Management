<?php

class Session
{

    static public function set($type, $message)
    {
        //Name , value , time of expiration , this coockie will work in the hole projet
        setcookie($type, $message, time() + 5, "/");
    }
}

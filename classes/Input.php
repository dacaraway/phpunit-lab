<?php
/**
 * Created by PhpStorm.
 * User: Daria
 * Date: 3/9/14
 * Time: 9:38 PM
 */

class Input{

    public static function get($key, $default=null ){

        if(!isset($_GET) && $default != null){
            $_GET[$key] = $default;
            return $_GET[$key];
        }

        if(isset($_GET) && $default == null){
            return $_GET[$key];

        }

        return;
    }




}
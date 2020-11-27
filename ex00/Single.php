<?php

final class Single
{
    private static $instance;
//  Your code here


public static function getInstance(): Single
{
    //vérifie si une instance de Single existe
    if(!self::$instance){
        // si aucune instance de Single existe, on en crée une
        self::$instance= new self();
    }

    return self::$instance;
}
}
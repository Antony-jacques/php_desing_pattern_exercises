<?php

final class Emitter
{
  // Your code here
  private static $instance;
  private $listeners = [];


public function emit(string $event, ...$args) {}
// => parcours le tableau $listeners à l'index $event
// et appelle la fonction avec les $args en paramètre.
// (penser à utiliser la fonction php "call_user_func_array")

public function on(string $event, callable $fct) {}
// => Recupere la fonction $fct et la met dans le tableau de listeners à l'index $event.


  public static function getInstance(): Emitter
{
    if(!self::$instance){
        self::$instance= new self();
    }

    return self::$instance;
}

private static $instance;



}
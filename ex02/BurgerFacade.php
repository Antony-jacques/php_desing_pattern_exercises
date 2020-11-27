<?php
class BurgerFacade
{
//   Your code here
    protected $burger;

    public function __construct($burger){
        $this->burger = $burger;
    }

    public function getBurger()
    // Qui appellera les méthodes qui correspondent à la confection d'un burger (cf Burger.php)
    {
        $this->burger->getBread();
        $this->burger->cookSteak();
        $this->burger->putTheVegetables();
        $this->burger->serve();

    }

    public function eatBurger()
    // Qui appellera les méthodes qui correspondent à l'alimentation d'un burger (cf. Burger.php)
    {
        $this->burger->unpack();
        $this->burger->eat();
        $this->burger->clearTheTable();


    }

}
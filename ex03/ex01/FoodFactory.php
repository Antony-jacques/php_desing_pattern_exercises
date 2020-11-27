<?php
include_once('Food.php');
include_once('FoodChef.php');

interface FoodFactory
{
  //  Your code here
  public function makeFood(): Food;
public function makeExpert(): FoodChef;

}

class AsianFoodFactory implements FoodFactory
{
    // Your code here
  //$asianFood;

    public function makeFood(): Food{
      $asianFood = new AsianFood;
      return $asianFood->getDescription();
    }

    public function makeExpert(): FoodChef{
    $asianChef= new AsianChef;
    return $asianChef->getDescription;
    }

}
  
class FrenchFoodFactory implements FoodFactory
{
  // Your code here

  public function __construct($frenchFood){
    $this->frenchFood = $frenchFood;
  }

  public function makeFood(): Food{
    $frenchFood = new FrenchFood;
    return $frenchFood;

  }


  public function makeExpert(): FoodChef{
    $frencChef = new FrenchChef;
    return $frencChef;

  }

}
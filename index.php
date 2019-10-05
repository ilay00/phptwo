<?php
abstract class Product
{
const PROFIT_PERCENT=10; //процент прибыли   применяится для всех товаров создаем константу
abstract public function totalCost(); // финальная стоимость товара создаем абстрактный метод стоимости товара
//который будет изменять значения с ноименоавниям товара
abstract public function profitCalc(); //доход получаемый с продаже //используется аналогично
}
class ProductDigital extends Product 
{// создоем класс первого товара и наследеваим его от базевого 
//который содержет общие методы константы  

    const PRICE=100;  //так как цина товаров отличается осздоем константу со значениям 
    //цены
    private $amount;  //количество товара
    public function __construct($amount) //создаем конструктор   
    {
        self::setAmount($amount); //?
    }
    public function getPrice()  // метод возрощающей цену
    {
        return PRICE;
    }
      public function getAmount() //метод возрощаюсчей количества
      {
          return $this->amount;
      }

     public function setAmount($amount=0) //получаем доступ к переменной 
     {
         $this->amount=$amount;
     }
          
     public function totalCost() //переопредиляим (изменяим тело метода для товара)
     {
         return self:: PRICE* $this->amount;   //и вычесляим общею стоимость за количества товара 
     }
     public function profitCalc() //аналогично общая прибыль с товара
     {
           return self::PRICE*$this->amount/100*parent::PROFIT_PERCENT;
           //стоимость на количество и на процент брибыли

     }
    }
class ProductReal extends ProductDigital  //Товар штучный его class имеит много общего с предедущем товаром поэтому производим наследевания от него 
{
public function getPrice()
{
    return parent::PRICE*2; //указеваим переменую родительского класса так как в услови задания сказена в 2 раза больше цена 
}
public function totalCost()
{
    return $this->getPrice()*parent::getAmount(); //переопределеный метод стоимости Цена поноженая на количество 
}
public function profitCalc()  //переопределенный метод дохода общего
{
 return $this->getPrice()*parent::getAmount()/100*parent::PROFIT_PERCENT; //цена на количества с процентом
}
}
class ProductWeight extends Product //третий продукт имеит вес  
{
  private $price;           //объявляим переменную цина и вес товара 
  private $wieght;

   public function  __construct($price,$wieght)
   {
  self::setPrice($price);   //получаим доступ к переменным
  self::setWieght($wieght);
   }
   public function setPrice($price=0) //
   {
       $this->price=$price;
   }
   
   public function setWieght($wieght=0)
{
   $this->wieght=$wieght;

}
public function totalCost()               //метод переопределенный стоимость товара
{
    return $this->price*$this->wieght;
}
  public function profitCalc()
  {
      return $this->price*$this->wieght/100*parent::PROFIT_PERCENT; //преопределенный метод дохода от товара
  }

}

$obj_digital=new ProductDigital(3);   //оброщения классу тавара устоновка значения в количестве
echo $obj_digital->profitCalc(); //и вывод на экран 
$obj_real=new ProductReal(3); //анологично
echo $obj_real->profitCalc(); // вывод на экран 
$obj_weight=new ProductWeight(3,300); //шт за кг 
echo $obj_weight->profitCalc(); //на экран 
?>
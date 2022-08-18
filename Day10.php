<?php
class Customer
{
    public function __construct(public $name)
    {
    }

}
$user=new Customer("ali");
print_r($user);


//class Customer
//{
//   public function gatname($n,$a)
//   {
//       echo $this->name=$n;
//       echo $this->age=$a;
//   }
//}
//$user=new Customer();
//$user2=new Customer();
//$user->gatname("karim",25);
//$user2->gatname("Hoda",20);


//echo "<pre>";print_r($user);echo "</pre>";
//echo "<pre>";print_r($user2);echo "</pre>";























//abstract class Customer
//{
//    protected $name;
//    protected $age;
//    protected $number;
//
//    public abstract function setname(string $name):string;
//
//}
//class User1 extends Customer
//{
//
//    public function getFather(): string
//    {
//        return $this->father;
//    }
//    public function getname($na)
//    {
//        return $na."<br>";
//    }
//    public function name()
//    {
//        return $this->name;
//    }
//    public  function setname(string $name):string
//    {
//        $this->name=$name;
//        return  $name;//return void
//    }
//
//
//}
////class User2 extends Customer
////{
////    public  function sayhello()
////    {
////        echo "hello to my course <br>";
////    }
////
////}
//$user1=new User1();
//$user2=new User1();
//$user1->sayhello();
//$user2->sayhello();
//$user=new Customer();
//echo $user1->getname("ali");
//echo $user2->setname("sara");



//class Field
//{
//    public function __construct(protected string $name)
//    {
//
//    }
//    public function render():string
//    {
//        return " ";
//    }
//}
//class Text extends Field
//{
//    public function render(): string
//    {
//        return <<<HTML
//  <input type="text" name="{$this->name}"  />
//
//HTML;
//    }
//}
//class Boolean extends Field
//{
//
//}
//class Radio extends Boolean
//{
//    public function render(): string
//    {
//        return  <<<HTML
//  <input type="radio" name="{$this->name}"  />
//
//HTML;
//    }
//
//}
//class Checkbox extends Boolean
//{
//    public function render(): string
//    {
//        return <<<HTML
//  <input type="checkbox" name="{$this->name}"  />
//
//HTML;
//    }
//}
//?>



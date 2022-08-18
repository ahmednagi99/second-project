<?php


trait Fingerprint
{
    public function foo()
    {
        echo "this is finger feature <br>";

    }
}

trait faceprint
{
    public function foo()
    {
        echo "this is face feature <br>";

    }
}


class Iphone
{
   use Fingerprint,faceprint
   {

       faceprint::foo insteadof Fingerprint;
       Fingerprint::foo as ahmed;
       faceprint::foo as ali;
   }


}

class Nokia
{
    use Fingerprint;
}
$phone=new Iphone();
$phone->ali();
$phone->ahmed();


//$phone2=new Samsung();
//$phone3=new Nokia();
//$phone1->fingerfeature()->facefeature()->_3dfeature();
//echo "<br>";
//echo "<br>";
//$phone2->facefeature()->_3dfeature();
//echo "<br>";
//echo "<br>";
//$phone3->fingerfeature();









//static
//$name="ali";
//class Customer
//{
//    const name="ahmed";
//    public static $age=20;
//    public static $number=156454;
//
//    public static function foo()
//    {
//        // echo $this->age;   (false)
//         echo "hello world";
//    }
//}
//$user1=new Customer();
//$user1->foo();
//echo Customer::$age."<br>";
//echo Customer::$number."<br>";
//Customer::foo()."<br>";
























//class User
//{
//    public $name;
//    public $age;
//
//    public function __construct($n,$a)
//    {
//        $this->name=$n;
//        $this->age=$a;
//    }
//    public function __clone()
//    {
//        $this->name=clone $this->name;
//    }
//}

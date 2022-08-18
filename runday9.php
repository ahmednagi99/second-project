<?php
require "Day9.php";

//class Toaster
//{
//    public  $slices=[];
//    public  $size=2;
//
//    public function addslice(string $slices)
//    {
//        if (count($this->slices)<= $this->size)
//        {
//            $this->slices[]=$slices;
//        }
//    }
//    public function toast()
//    {
//        foreach ($this->slices as $x=>$slice)
//        {
//            echo ($x +1). "toast :".$slice;
//        }
//    }
//}
//$toast=new Toaster();
//$toast->addslice(1);
//$toast->addslice(1);
//
//$toast->toast();
//$toast->toast();
//$toast->toast();
//$toast->toast();


































//class CheckingAccount extends BankAccount
//{
//    private $minbalance;
//    public function __construct($amount,$minbalance)
//    {
//        if ($amount > 0 && $amount >= $minbalance) {
//            parent::__construct($amount);
//            $this->minbalance=$minbalance;
//        }else{
//            throw new \http\Exception\InvalidArgumentException("amount must be more than zero and higher than minbalance");
//        }
//    }
//    public function withdraw($amount){
//        if ($amount >0 && $this->getBalance()-$amount >=$this->minbalance){
//            parent::withdraw($amount);}
//        return "false";
//    }
//}
//$account1=new CheckingAccount(3000,1000);
//$account1->withdraw(500);
//echo $account1->getBalance();












//class Sub extends Super
//{
//    public $age;
//    public function __construct($a,$n)
//    {
//
//        $this->age=$a;
//        parent::__construct($n);
//    }
//    public function getname()
//    {
////        echo parent::getname()."<br>";
//        echo $this->age ."<br>";
//
//
//    }
//    public function sayhello()
//    {
//        echo "hi guys";
//    }
//}
//$sub1=new Sub(20,"ahmed");
////echo "<pre>"; print_r($sub1);echo "</pre>";
//
////$sub1->getname();
//$sub1->sayhello();






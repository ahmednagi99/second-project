<?php

class Test2
{
    public $test2;
}



//class Customer
//{
//    private $name;
//   public function __set($propertie,$value)
//   {
//    echo  "this propertie [" .$propertie." ]is not fount or not accessible that has value :".$value;
//
//    }


//
//    public function __get($property)
//    {
//        echo "this propertie [" .$property." ]is not fount or not accessible";
//    }

//}





//__call
//class Customer
//{
//    public $name;
//    private $age;
//
//       private function foo($x,$n)
//           {
//             echo "hello world";
//           }
//    public function __call($name,$arguments)
//    {
//        echo "this function [" .$name."] is not found or not acessible <br>";
//        print_r($arguments);
//    }
//}
























//class User
//{
//    private $name;
//    private $number;
//
//    public function __destruct()
//    {
//        echo "goodbye ".$this->name;
//    }
//
//    public function sayhello()
//    {
//        echo "hello ".$this->name ."<br/>";
//    }
//    public function __construct($n,$num)
//    {
//        $this->name=$n;
//        $this->number=$num;
//    }
//}

//class File
//{
//    private $fileName;
//    private $handle;
//
//    public function __construct($name,$mode)
//    {
//        $this->fileName=$name;
//        $this->handle=fopen($this->fileName,$mode);
//    }
//    public function readfile()
//    {
//        echo  fread($this->handle,200);
//    }
//    public function __destruct()
//    {
//       fclose($this->handle);
//    }
//
//}












////Magic methods
//class Construct
//{
//   private $name;
//   private $age;
//
//    private function setproperties($n,$a)
//    {
//        $this->name=$n;
//        $this->age=$a;
//        //echo $this->name."<br>".$this->age;
//    }
//    public function __call($setproperties,$n ,$a)
//    {
//        echo $this->name."<br>".$this->age;
//    }
//}

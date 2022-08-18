<?php

final class AppleDevice
{
    //properties
    public $ram;//property
    public $inch;
    public $space="264Gb";
    public $color;
    public $name="ahmed";

   
    
    public function declaration($ra,$in,$co,$spa,$flash)
    {
        $this->ram   =$ra;
        $this->color =$co;
        $this->inch  =$in;
        $this->space =$spa;
         $this->flash=$flash;
        return $this->ram ."<br/>".$this->color ."<br/>".$this->inch ."<br/>". $this->space ."<br/>";

    }
    final public function setname($n)
    {
        echo "welcome to ".$n."<br/>";
    }


}
class SamsungDevices extends AppleDevice
{
    public $_3D="V405";
    public $camera;
//    public function declaration($ra,$in,$co,$spa,$_3d,$flash)
//   {
//       $this->ram   =$ra;
//       $this->color =$co;
//       $this->inch  =$in;
//       $this->space =$spa;
//       $this->_3D=$_3d;}





}
class ShawmyDevices extends AppleDevice
{

//    public function declaration($ra,$in,$co,$spa)
//    {
//        $this->ram   =$ra;
//        $this->color =$co;
//        $this->inch  =$in;
//        $this->space =$spa;
//
//        return $this->ram ."<br/>".$this->color ."<br/>".$this->inch ."<br/>". $this->space ;
//
//    }
}
















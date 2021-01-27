<?php
class User{
    private $name;
    private $phone;
    private $adress;

    public function __construct($name, $phone,$adress)
    {
        $this->name=$name;
        $this->phone=$phone;
        $this->adress =$adress;
    }
    function setName($name){
        $this->name=$name;
    }
    function getName(){
        return $this->name;
    }
}
$user= new User("hoa","012345678","thanh xuan");
$user->setName("quan");
echo $user->getName();
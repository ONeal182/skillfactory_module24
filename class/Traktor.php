<?

class Traktor extends Transport implements InterfaceTransport
{
    public function __construct($name,$color,$HP,$MaxSpeed,$key)
    {
        $this->name = $name;
        $this->color = $color;
        $this->HP = $HP;
        $this->MaxSpeed = $MaxSpeed;
        $this->key = $key;
    }

    public function specAction(){
        echo 'Поднять ковш';
    }


    
}
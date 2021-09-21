<?
abstract class Transport
{   

    public function getName(){
        echo $this->name;
    }
    public function getColor(){
        echo $this->color;
    }
    public function getHP(){
        echo $this->HP;
    }
    public function getMaxSpeed(){
        echo $this->MaxSpeed;
    }
    public function switchOn(){
        if($this->key){
            // echo 'Ух завелась';
            return true;
        }else{
            // echo 'Петрович неси трос';
            return false;
        }
        
    }

    public function go(){
        if($this->switchOn()){
            echo'Поехали';
        }else{
            echo 'Не девигается';
        }
    }

    
}
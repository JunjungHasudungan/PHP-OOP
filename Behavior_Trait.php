<?php

trait CatBehavior
{
    public function beranak()
    {
        //  we can reuse properthies or method from other class used trait  
         
        return " {$this->setName(name:"Cat")} ini bisa beranak";
    }
}

trait DogBehavior
{
    public function beranak()
    {
        return "{$this->setName(name: "Dog")}  ini bisa beranak";    
    }
}

trait HorseBehavior
{
    public function beranak()
    {
        return "{$this->setName(name: "Horse")} ini bisa beranak";
    }
}

class Animal 
{
    // declaration all trait name
    // because in all trait have same name method, we must be  
    // include keyword ::insteadof for using method from trait   
    
    use CatBehavior, DogBehavior, HorseBehavior{
        DogBehavior::beranak insteadof CatBehavior, HorseBehavior;
    }

    private String $name = "Kuda";

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function periakuBinatang()
    {
        // we used DogBehavior trait to recall method it self
        return $this->beranak();
    }

}

$binatang = new Animal();

echo $binatang->periakuBinatang();

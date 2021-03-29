<?php
class UserController
{
    private $primerNombre;
    private $segundoNombre;
    private $primerApellido;
    private $segundoApellido;
    


    /**
     * Get the value of primerNombre
     */ 
    public function getPrimerNombre()
    {
        return $this->primerNombre;
    }

   
    public function setPrimerNombre($primerNombre)
    {
        $this->primerNombre = $primerNombre;

        return $this;
    }

   
    public function getSegundoNombre()
    {
        return $this->segundoNombre;
    }

    
    public function getPrimerApellido()
    {
        return $this->primerApellido;
    }

 
    public function getSegundoApellido()
    {
        return $this->segundoApellido;
    }
}
?>
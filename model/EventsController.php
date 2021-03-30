<?php
class EventsController
{
    private $nombreEvento;
    private $lugarEvento;
    private $horaEvento;
    private $fechaEvento;
    private $tiempo;

    public function getNombreEvento()
    {
        return $this->nombreEvento;
    }

    public function setNombreEvento($nombreEvento)
    {
        $this->nombreEvento = $nombreEvento;

        return $this;
    }

    public function getLugarEvento()
    {
        return $this->lugarEvento;
    }

    public function setLugarEvento($lugarEvento)
    {
        $this->lugarEvento = $lugarEvento;

        return $this;
    }

    public function getHoraEvento()
    {
        return $this->horaEvento;
    }

    public function setHoraEvento($horaEvento)
    {
        $this->horaEvento = $horaEvento;

        return $this;
    }

    public function getFechaEvento()
    {
        return $this->fechaEvento;
    }

    public function setFechaEvento($fechaEvento)
    {
        $this->fechaEvento = $fechaEvento;

        return $this;
    }

    public function getTiempo()
    {
        return $this->tiempo;
    }

    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;

        return $this;
    }

    public function mostrar()
    {

        $final = "hola ";
        return $final;

    }
}

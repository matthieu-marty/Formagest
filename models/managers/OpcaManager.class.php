<?php

class OpcaManager extends Model
{
    private $opcas;

    public function addOpca($opca)
    {
        $this->opcas[] = $opca;
    }

    public function getOpcas()
    {
        return $this->opcas;
    }
}

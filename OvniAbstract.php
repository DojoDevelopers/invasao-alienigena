<?php

abstract class OvniAbstract
{
    protected $alphabet;

    protected $comet;

    protected $group;

    public function __construct()
    {
        $i = 1;
        foreach (range('A', 'Z') as $letter) {
            $this->alphabet[$i] = $letter;
            $i++;
        }        

        $this->comet = [
            'HALLEY',
            'ENCKE',
            'WOLF',
            'KUSHIDA'
        ];

        $this->group = [
            'AMARELO',
            'VERMELHO',
            'PRETO',
            'AZUL'
        ];
    }

    abstract protected function sort();
}


<?php

namespace Dojo;

abstract class OvniAbstract
{
    protected $alphabet;

    public $comet;

    public $group;

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


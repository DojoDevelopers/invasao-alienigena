<?php namespace Dojo;

abstract class OvniAbstract
{
    /**
     * @var array
     */
    protected $alphabet;

    /**
     * @var array
     */
    protected $comet;

    /**
     * @var array
     */
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

    abstract public function sort();
}


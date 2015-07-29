<?php namespace Dojo;

class Ovni extends OvniAbstract
{
    /**
     * @var int
     */
    private $magicNumber = 45;

    public function sort()
    {
        $matchGroups = [];

        foreach ($this->comet as $comet) {
            foreach ($this->group as $group) {
                if ($this->groupMatchesComet($group, $comet)) {
                    $matchGroups[$group] = $group;
                }
            }
        }

        return array_intersect($matchGroups, $this->group);
    }

    /**
     * @param string $word
     * @return int
     */
    private function getWordAsNumber($word)
    {
        $sum = 0;

        for ($i = 0; $i < strlen($word); $i++) {
            $sum += array_search($word{$i}, $this->alphabet);
        }

        return $sum;
    }

    /**
     * @param $group
     * @param $comet
     * @return bool
     */
    private function groupMatchesComet($group, $comet)
    {
        return ($this->getWordAsNumber($group) / $this->magicNumber) === ($this->getWordAsNumber($comet) / $this->magicNumber);
    }
}

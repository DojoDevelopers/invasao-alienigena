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

        foreach ($this->comet as $kc => $comet) {
            foreach ($this->group as $kg => $group) {
                if ($kc == $kg && $this->groupMatchesComet($group, $comet)) {
                    $matchGroups[] = $group;
                }
            }
        }

        return array_values(array_diff($this->group, $matchGroups));
    }

    /**
     * @param string $word
     * @return int
     */
    private function getWordAsNumber($word)
    {
        $number = 1;

        for ($i = 0; $i < strlen($word); $i++) {
            $number = array_search($word{$i}, $this->alphabet) * $number;
        }

        return $number;
    }

    /**
     * @param $group
     * @param $comet
     * @return bool
     */
    private function groupMatchesComet($group, $comet)
    {
        return ($this->getWordAsNumber($group) % $this->magicNumber) === ($this->getWordAsNumber($comet) % $this->magicNumber);
    }
}

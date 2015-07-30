<?php

namespace Dojo;

class Ovni extends OvniAbstract
{
	public function sort()
	{
		$arrayNaoLevados = array();

		for ($i=0; $i < count($this->comet); $i++) {
			$cometa = $this->processaCometasGrupos($this->comet[$i]);
			$grupo = $this->processaCometasGrupos($this->group[$i]);


			if ($cometa != $grupo) {
				$arrayNaoLevados[] = $this->group[$i];

			}

		}

		return $arrayNaoLevados;
	
	}
	
	protected function processaCometasGrupos($cometaGrupo, $mod=45)
	{

		if (empty($cometaGrupo) || !preg_match('/[A-Za-z]+/', $cometaGrupo) || !is_numeric($mod)) {
			return 0;

		 }

		$multiplicacao = 1;

		for ($i=0; $i<strlen($cometaGrupo);$i++) {
			$multiplicacao *= (ord($cometaGrupo[$i]) - ord('A') + 1);

		}

		return $multiplicacao % $mod;

 	}

}

<?php

namespace Dojo;

class Ovni extends OvniAbstract
{
	public function sort()
	{
		$arrayRetorno = $this->group;

		foreach ($this->comet as $keyCometa => $cometa) {
			$produtoCometa = $this->getProdutoByName($cometa) % 45;
			
			foreach ($this->group as $key => $grupo) {
				$produtoGrupo = $this->getProdutoByName($grupo) % 45;
				// se o grupo foi levado alguma vez ele nao deve ser retornado
				if ($keyCometa == $key && $produtoCometa == $produtoGrupo
					//&& isset($arrayRetorno[$key])
					){
					//echo sprintf("Para o cometa %s o grupo %s foi levado\n", $cometa, $grupo);
					unset($arrayRetorno[$key]);
				} else {
					//echo sprintf("Para o cometa %s o grupo %s NAO foi levado\n", $cometa, $grupo);
				}
		
			} 
		}

		return $arrayRetorno;
	}

	public function getProdutoByName($name)
	{
		$produto = 1;
		for ($i = 0; $i < strlen($name); $i++) {
			$produto = $produto * $this->getNumeroDaLetra($name[$i]);
		}
	
	
		return $produto;
	}

	public function getNumeroDaLetra($letra)
	{
		return array_search(mb_strtoupper($letra), $this->alphabet);
	}
}

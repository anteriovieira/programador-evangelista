<?php

trait DonsDoEspiritoSanto 
{
	public function louvar($louvor){
		Deus::exautado($louvor)
	}

	public function falarComSabedoria($palavras){
		// remover palavras torpes antes de falar 
		echo $palavras;
	}

	public function profetizar(){
		return Deus::mandamento();
	}
	
	public function palavraDeCiencia() {}
	public function discernimentoDoEspiritos() {}
	public function domDaFe() {}
	public function cura() {}
	public function operacaoDeMilagres() {}
	public function variedadeDeLinguas() {}
	public function DonsEspirituaisEFrutoDoEspiritoSanto () {}
	public function DonsEspirituaisETalentos() {}	
}

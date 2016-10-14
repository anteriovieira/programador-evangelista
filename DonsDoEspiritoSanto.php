<?php


/**
 * É a manifestação do Espírito Santo no crente, capacitando-o com poder para 
 * realizar uma tarefa segundo a vontade de Deus. A palavra “dons” vem do grego 
 * “charismata”, derivada da palavra “charis” que significa “graça.” São, 
 * portanto, dons pela graça de Deus e não algo que conseguimos ou merecemos.
 *
 */
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

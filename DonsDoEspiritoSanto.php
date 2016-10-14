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
}

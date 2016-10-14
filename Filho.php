<?php

// Somos co-herdeiros em cristo jesus
final class Filho extends Jesus implements EspiritoSanto()
{
	use DonsDoEspiritoSanto;
	
    public function orar($oracao){
	    // Nesse momento, oramos a jesus que interceda
	    // por nós junto ao pai em nossas orações
		JesusCristo::intecede($this, $oracao)
	}
}

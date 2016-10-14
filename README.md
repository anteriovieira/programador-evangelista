# A visão do relacionamento com Deus visto pelo olhar técnico de um programador.

Esse é um pequeno projeto de evangelização. Temos um publico alvo, nossos colegas programadores. Quanto tempos temos dedicados a Deus? Como podemos contribuir com o que fazemos de melhor? Bom, o objetivo desse trabalho é fornecer uma ferramento para levarmos a palavra de Deus  a todos em todos os lugares.

Vamos aplicar os conceitos de programação utilizando exemplos bíblico para evangelizarmos nossos colegas de trabalho.

> Esse é apenas um ponta pé inicial. Sua contribuição é muito importante. Participe desse projeto.



```php

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

// Espirito santo.
interface EspiritoSanto 
{
	public function amar(){}
	public function serPaciente(){}
	public function serBondoso(){}
	public function serFiel(){}
	public function serManso(){}
	public function terDominioProprio(){}
}

abstract class Deus 
{
    protected static function seRelacionar(JesusCristo $filho){
		
	}

	private function salvar(){

	}

	public function exautado($louvor){
		
	}
}

abstract class JeususCristo extends Deus
{
    public static function intercede(Filho $filho, $peticao){
		
	}
}

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

// Você é um novo filho, uma nova criatura em Cristo Jesus.
// Somos co-herdeiros com cristo.
$voce = new Filho(); 

// Precisamos nos relacionar diariamente com 
// Deus, a oração é o único meio.
$voce->orar('Deus obrigado por esse dia');

// Os dos do espirito santo nos direciona
// no nosso dia a dia a como sermos exemplos 
$voce->falarComSabedoria('como esta sendo o seu dia hoje?');
```

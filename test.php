<?php

/**
*	Getting prepositions for country names in French
*
*	
* 	@param type $string
*/


function getPreposition_FR ($country) 
{
	$array_preposition = array ('en', 'à', 'au', 'aux');
	$suffix_preposition = '';

	if  (preg_match('/(agne|iche|ran|ance|lande|èce|ogne|aine|eine|ène|rse|la|ence|erre|dor|ie|ak|ine|é|ée|rica|oupe|oire|iche|ïdjan|an|sud|ège|ède|ypte|ique|teur|isse)$/i', $country, $matches) )
			$suffix_preposition .= $array_preposition[0];
	else if (preg_match('/(ar|ram|eille|nade|ris|ba|na|ma|co|ago|alu|boul|bul|eïn|ain|nei|ti|ok|pre|orre|lize|bourg|ypre|grenadine|ey)$/i', $country, $matches))
			$suffix_preposition .= $array_preposition[1];
	else if (preg_match('/(aso|am|oc|os|ana|odge|bas|tho|bon|esh|oun|il|ili|ert|pon|nin|kistan|uela|xique|siege|di|ji|men|nam|ogo|ad|ade|embourg|mark|al|mala|kong|ice|pour|ay|ka|bwe)$/i', $country, $matches))
			$suffix_preposition .= $array_preposition[2];
	else if (preg_match('/(Îles|unis|elles|ores|ans|mas|ives|udes)$/i', $country, $matches))
			$suffix_preposition .= $array_preposition[3];

	return $suffix_preposition.' '.ucfirst($country);
}


/* Test array */
$countries = array (
	'Allemagne',
	'Andorre',
	'Autriche',
	'Belgique',
	'Danemark',
	'Espagne',
	'Finlande',
	'France',
	'Cambodge',
	'Irlande',
	'Italie',
	'Luxembourg',
	'Monaco',
	'Norvège',
	'Pays-bas',
	'Pologne',
	'Portugal',
	'Royaume-Uni',
	'Slovaquie',
	'Brésil'
);

/* Execute */
foreach ($countries as $item) echo getPreposition_FR ($item) . '<br/>';


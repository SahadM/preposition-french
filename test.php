<?php

/**
*	Getting prepositions for country names in French
*
*	
* 	@param type $string
*/


function getPreposition_FR ($country) 
{
	$prep_country = '';

	if  (preg_match('/(agne|iche|ran|ance|lande|nde|èce|ogne|aine|eine|ène|rse|la|ence|erre|dor|ie|ak|ine|é|ée|rica|oupe|oire|iche|ïdjan|nistan|sud|ège|ède|ypte|ique|teur|isse)$/i', $country, $matches) )
		$prep_country = 'en '.ucfirst($country);
	else if (preg_match('/(ar|ram|eille|nade|ris|ba|na|ma|co|ago|alu|boul|bul|eïn|ain|nei|ti|ok|pre|orre|lize|ypre|grenadine|ey)$/i', $country, $matches))
		$prep_country = 'à '.ucfirst($country);
	else if (preg_match('/(aso|am|ban|oc|os|ana|odge|bas|tho|bon|esh|oun|il|ili|ert|pon|nin|kistan|uela|xique|siege|di|ji|men|nam|ogo|ad|ade|rou|bourg|mark|al|mala|kong|ice|pour|ay|ka|bwe|uni)$/i', $country, $matches))
		$prep_country = 'au '.ucfirst($country);
	else if (preg_match('/(Îles|unis|elles|ores|ans|mas|ives|udes)$/i', $country, $matches))
 		$prep_country = 'aux '.ucfirst($country);
	return $prep_country;
}


/* Test array */
$countries = array (
	'Madagascar',
	'Sénégal',
	'Cameroun',
	'Allemagne',
	'Maroc',
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
	'Algérie',
	'Comores',
	'Pakistan',
	'Turquie',
	'Liban',
	'Iran',
	'Luxembourg',
	'Monaco',
	'Norvège',
	'Pays-bas',
	'Pologne',
	'Portugal',
	'Royaume-Uni',
	'Slovaquie',
	'Brésil',
	'Fidji',
	'Nouvelle-Zélande',
	'Australie',
	'Equateur',
	'Chili',
	'Pérou',
	'Djibouti',
	'Inde'
);

/* Execute */
foreach ($countries as $item) echo getPreposition_FR ($item) . "\n";


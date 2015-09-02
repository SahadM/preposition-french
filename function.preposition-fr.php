<?php
/**
*	Getting prepositions for country names in French
*
*       	
* 	    @param type $string
*
*       N.b: Rules / règles en français
*       -------------------------------
* 
*       On met la préposition AU devant un nom de pays masculin commençant par une consonne.
*       We must put The preposition AU before a male country name beginning with a consonant.
*
*       On met la préposition EN devant un nom de pays féminin et devant un pays masculin commençant par une voyelle.
*       We must put The preposition EN before a female country name and before a male country name beginning with a vowel.
*
*       On met la préposition AUX devant un nom de pays pluriel.
*       We must put The prepostition AUX before a country plurial name.
*
*       On met la préposition À devant un nom de ville, ou principautés (exceptions à certains pays).
*       We must put The preposition A before a city name or principalities (expect some countries).
*
*
*
*/


function getPreposition_FR ($country) 
{
    $prep_country = '';
    
    // EN
    if  (preg_match('/(agne|iche|ran|ance|lande|nde|èce|ogne|aine|eine|ène|rse|la|ence|erre|dor|ie|ak|ine|é|ée|oupe|oire|iche|ïdjan|nistan|sud|ège|ède|ypte|bique|gique|nique|tique|teur|isse|ion)$/i', $country, $matches) )
    {
       $prep_country = 'en '.$country;
    }
    
    // AU
    else if (preg_match('/(aso|am|ban|oc|os|ana|odge|bas|tho|bon|esh|oun|ica|il|ili|ert|pon|nin|kistan|uela|exique|siege|di|ji|men|nam|ogo|ad|ade|rou|bourg|mark|al|mala|kong|ice|pour|ay|ka|bwe|uni|nuatu|stein)$/i', $country, $matches))
    {
       $prep_country = 'au '.$country;
    }

    // AUX
    else if (preg_match('/(Îles|unis|elles|ores|ans|mas|ives|udes)$/i', $country, $matches))
    { 
       $prep_country = 'aux '.$country;
    }
    
    // À
    else if (preg_match('/(ar|ram|eille|nade|ris|ba|na|ma|co|ago|ong|alu|boul|bul|eïn|ain|nei|ti|ok|pre|pour|orre|lize|ypre|grenadine|ey)$/i', $country, $matches))
    {
       $prep_country = 'à '.$country;
    }
    
    return $prep_country;
}


/* Test array */
$countries = array (
    'Madagascar',
    'Sénégal',
    'Cameroun',
    'Japon',
    'Thailande',
    'Sri-Lanka',
    'Lesotho',
    'Suisse',
    'Réunion',
    'Seychelles',
    'Mozambique',
    'Lienstenstein',
    'Mexique',
    'Vanuatu',
    'Nouvelle Zélande',
    'Antartique',
    'Islande', 
    'Panama',
    'Cuba',
    'Costa Rica',
    'Mongolie'
);

/* Execute */
foreach ($countries as $item) echo getPreposition_FR ($item) . "\n";


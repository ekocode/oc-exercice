<?php
// Ce script fait la paix dans le monde
$peace = true;
$place = "the world";

echo peaceToLove($peace,$place);


/**
* Fonction qui transforme la paix en amour :)
**/
function peaceToLove($peace,$place)
{
	forcePeace($peace); // et voila :)
	
	if ($peace)
	{
		return "Love in ".$place;
	}
	else
	{
		return "Sadness in ".$place;
	}
}


/**
* Fonction qui force la paix
**/
function forcePeace(&peace)
{
	$peace=true;
}

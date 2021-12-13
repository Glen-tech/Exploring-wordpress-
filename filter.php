<?php

function seperate_templates()
{
	$our_title = get_the_title( get_option('page_for_posts', true) );
	
	switch($our_title)
	{
		case "Home page":
		echo "Found home page";
		break;
		
		case "Button page":
		echo "Found button page";
		break;
	}
	
}

?>
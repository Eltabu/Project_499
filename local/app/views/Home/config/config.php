<?php

if(CHANGE == 1){

	//CHanges found. Open for writing
	$fp = fopen(__DIR__."/map.php", "w+");

	if(MAP == 0)
	{
		//Map is currently not a feature of the site so add it
		fwrite($fp, ' <div style="min-height:400px" id="map"></div>');
	}
	else
	{
		//Map is a feature of the site so remove it
		fwrite($fp,'</div>');

	}

	fclose($fp);
}
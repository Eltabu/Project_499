<?php

if(CHANGEMAP == 1){

	//CHanges found. Open for writing
	$fp = fopen(__DIR__."/map.php", "w+");

	if(MAP == 0)
	{
		//Map is currently not a feature of the site so add it
		fwrite($fp, '<div style="min-height:400px" id="map"></div></div><div  class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
			 <ul id="province-select">
      <h2>Ontario</h2>
      <li><a>Windsor</a></li>
      <li><a>Chatham</a></li>
      <li><a>Sarnia</a></li>
      <li><a>More...</a></li>
    </ul>
   <ul id="province-select">
      <h2>Quebec</h2>
      <li><a>Montreal</a></li>
      <li><a>Quebec City</a></li>
      <li><a>Val D\'Ors</a></li>
      <li><a>More...</a></li>
 
    </ul>');
	}
	else
	{
		//Map is a feature of the site so remove it
		fwrite($fp,'</div><div style="text-align:center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" > 
			<h1>Our Locations</h1>
			 <ul style="list-style-type:none" id="province-select">
      <h2>Ontario</h2>
      
      <li><a>Windsor</a></li>
      <li><a>Chatham</a></li>
      <li><a>Sarnia</a></li>
      <li><a>More...</a></li>
    </ul>
   <ul style="list-style-type:none" id="province-select">
      <h2>Quebec</h2>
      <li><a>Montreal</a></li>
      <li><a>Quebec City</a></li>
      <li><a>Val D\'Ors</a></li>
      <li><a>More...</a></li>
 
    </ul>');

	}

	fclose($fp);
}
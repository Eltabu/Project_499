<?php

if(CHANGE == 1){

	//CHanges found. Open for writing
	$fp = fopen(__DIR__."/inquirymenu.php", "w+");

	if(INQUIRIES == 0)
	{
		//Map is currently not a feature of the site so add it
		fwrite($fp, ' <a href="<?php echo URL ?>Admin/inquiries" class="list-group-item"><span class="fa fa-question" aria-hidden="true"></span> Inquiries </a>');
	}
	else
	{
		//Map is a feature of the site so remove it
		fwrite($fp,' ');

	}

	fclose($fp);
}
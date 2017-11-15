<?php

if(CHANGE == 1){

	//CHanges found. Open for writing
	$fp = fopen(__DIR__."/inquirycontroller.php", "w+");

	if(INQUIRIES == 1)
	{
		fwrite($fp, '<?php $this->view(\'Admin/index\', [\'viewName\' => \'Admin Dashboard\']); ?>');

	}
	else
	{
		fwrite($fp, '<?php $this->view(\'Admin/inquiries\', [\'viewName\' => \'Admin Dashboard\']);?>');

	}

	fclose($fp);
}
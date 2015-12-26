<?php
require_once 'import.php';
require_once 'header.php';
echo <<<END
<div class="grid_24">
	<div class="about grid_24">
	<div class="in">
		<p id="note">Please sign in to your IIT GN account in new tab if the form is not visible.</p>
		<div class="iframe">
		<iframe src="https://docs.google.com/a/iitgn.ac.in/spreadsheet/embeddedform?formkey=dG1iREpRX2VqYWVJZi1hUXJoOFB0NVE6MQ" width="760" height="1600" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
		</div>
	</div>
		</div>
		</div>
		</div>
	<div class="clear"></div>
END;
require_once 'footer.php';
?>

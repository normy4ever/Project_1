<div>

<?php

	if(isset($error)){
		 echo '<p>'. $error .'</p>';
	}


			if(isset($mes) > 0) {
				foreach($mes->result() as $row) {
					$data[] = $row;
				}
			}
				
?>

</div>
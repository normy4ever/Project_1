<div>

<?php

	if(isset($error)){
		 echo '<p>'. $error .'</p>';
	}


			if($mes > 0) {
				foreach($mes->result() as $row) {
					$data[] = $row;
				}
				
?>

</div>
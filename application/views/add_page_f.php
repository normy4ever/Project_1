<div id="file_upload">
           	 <p class="steptitle">PASUL 4 - Incarca pozele</p>
				<?php
				if($this->session->userdata('CID'))
				{
					echo form_open_multipart('add/photo_up');
					echo '<p>Alege imaginile: ';
					echo form_upload('userfile');
					echo '</p><p>';
					echo form_submit('upload', 'Upload');
					echo '</p>';
					echo form_close();
				}
				?>		
                <div id="temp_gallery">
                </div>
                <p class="form_buttons">
					<a href="add/finalize">Finalizeaza</a>
				</p>
</div> <!-- file upload -->  